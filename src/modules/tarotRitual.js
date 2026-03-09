// cards setting

let cards = document.querySelectorAll('.tarot-ritual__card')

const RADIUS = {
  x: window.outerWidth < 480 ? 160 : window.outerWidth < 1024 ? 240 : 320,
  y: window.outerWidth < 480 ? 160 : window.outerWidth < 1024 ? 240 : 320,
}

const ANGLE = {
  start:
    window.outerWidth < 480 ? -125 : window.outerWidth < 1024 ? -140 : -160,
  end: window.outerWidth < 480 ? -55 : window.outerWidth < 1024 ? -40 : -20,
}

const CARD_COUNT = cards.length
const START_ANGLE = ANGLE.start
const END_ANGLE = ANGLE.end

cards.forEach((card, index) => {
  const step = (END_ANGLE - START_ANGLE) / (CARD_COUNT - 1)
  const angleDeg = START_ANGLE + step * index
  const angle = (angleDeg * Math.PI) / 180

  card.style.setProperty('--card-x', `${RADIUS.x * Math.cos(angle)}px`)
  card.style.setProperty('--card-y', `${RADIUS.y * Math.sin(angle) + 240}px`)
  card.style.setProperty('--card-rotate', `${angleDeg + 90}deg`)
  card.style.setProperty('--delay', `${index * 0.1}`)
})

// cards setting end

const STAGES = {
  INTRO: 'intro',
  SPREAD: 'spread',
  SELECTED: 'selected',
  REVEALED: 'revealed',
}

const SPREAD_LOCK_MS = 920
const SELECT_TO_FLIP_MS = 680
const SHOW_DETAILS_MS = 300
const RESET_MS = 520
const HOVER_SOUND_GAP_MS = 220

const BACKGROUND_AUDIO_SOURCES = [
  '/wp-theme/assets/audio/background.mp3',
  '/assets/audio/background.mp3',
]

const ACTION_AUDIO_SOURCES = [
  '/wp-theme/assets/audio/action.mp3',
  '/assets/audio/action.mp3',
]

const setupTarotRitual = (root) => {
  if (!root || root.dataset.initialized === 'true') {
    return
  }

  root.dataset.initialized = 'true'

  const spreadButton = root.querySelector('[data-spread-trigger]')
  const resetButton = root.querySelector('[data-reset-trigger]')
  const cards = [...root.querySelectorAll('[data-card]')]
  const detailsTitle = root.querySelector('[data-details-title]')
  const detailsSubtitle = root.querySelector('[data-details-subtitle]')
  const detailsKeyNote = root.querySelector('[data-details-key-note]')
  const detailsEnergy = root.querySelector('[data-details-energy]')
  const detailsAdvice = root.querySelector('[data-details-advice]')
  const detailsMeaning = root.querySelector('[data-details-meaning]')
  const detailsImage = root.querySelector('[data-details-image]')

  let stage = STAGES.INTRO
  let locked = false
  let selectedCard = null
  const timers = []

  const soundState = {
    ambient: null,
    action: null,
    unlocked: false,
    hoverTick: 0,
  }

  const setHoverReady = (isReady) => {
    root.dataset.hoverReady = isReady ? 'true' : 'false'
  }

  setHoverReady(false)

  const queue = (callback, delay) => {
    const timer = setTimeout(callback, delay)
    timers.push(timer)
  }

  const clearTimers = () => {
    timers.forEach((timer) => clearTimeout(timer))
    timers.length = 0
  }

  const setStage = (nextStage) => {
    stage = nextStage
    root.dataset.stage = nextStage
  }

  const createAudio = (sources, options = {}) => {
    const audio = new Audio()
    audio.preload = 'auto'
    audio.loop = Boolean(options.loop)
    audio.volume = options.volume ?? 0

    sources.forEach((src) => {
      const source = document.createElement('source')
      source.src = src
      source.type = 'audio/mpeg'
      audio.append(source)
    })

    return audio
  }

  const initAudio = () => {
    if (soundState.ambient && soundState.action) {
      return
    }

    if (!soundState.ambient) {
      soundState.ambient = createAudio(BACKGROUND_AUDIO_SOURCES, {
        loop: true,
        volume: 0,
      })
    }

    if (!soundState.action) {
      soundState.action = createAudio(ACTION_AUDIO_SOURCES, {
        loop: false,
        volume: 0,
      })
    }
  }

  const stopFade = (audio) => {
    if (audio && audio.__fadeFrame) {
      cancelAnimationFrame(audio.__fadeFrame)
      audio.__fadeFrame = null
    }
  }

  const fadeAudio = (audio, targetVolume, duration, options = {}) => {
    if (!audio) {
      return
    }

    stopFade(audio)

    const safeDuration = Math.max(duration, 16)
    const startVolume = Number.isFinite(audio.volume) ? audio.volume : 0
    const startTime = performance.now()

    const animate = (timestamp) => {
      const elapsed = timestamp - startTime
      const progress = Math.min(elapsed / safeDuration, 1)
      audio.volume = Math.abs(
        startVolume + (targetVolume - startVolume) * progress
      )

      if (progress < 1) {
        audio.__fadeFrame = requestAnimationFrame(animate)
        return
      }

      audio.__fadeFrame = null

      if (options.pauseOnZero && targetVolume <= 0.001) {
        audio.pause()
        if (options.resetOnPause) {
          audio.currentTime = 0
        }
      }
    }

    audio.__fadeFrame = requestAnimationFrame(animate)
  }

  const unlockAudio = async () => {
    initAudio()

    if (soundState.unlocked) {
      return
    }

    try {
      if (soundState.ambient) {
        await soundState.ambient.play()
        soundState.ambient.pause()
        soundState.ambient.currentTime = 0
      }

      if (soundState.action) {
        await soundState.action.play()
        soundState.action.pause()
        soundState.action.currentTime = 0
      }

      soundState.unlocked = true
    } catch {
      soundState.unlocked = false
    }
  }

  const setAmbientState = async (isActive) => {
    initAudio()

    if (!soundState.ambient) {
      return
    }

    await unlockAudio()

    if (!soundState.unlocked) {
      return
    }

    if (isActive) {
      try {
        await soundState.ambient.play()
      } catch {
        return
      }

      fadeAudio(soundState.ambient, 0.18, 1600)
      return
    }

    fadeAudio(soundState.ambient, 0, 900, {
      pauseOnZero: true,
      resetOnPause: false,
    })
  }

  const playInteractionPulse = async ({
    peak = 3,
    fadeIn = 20,
    hold = 30,
    fadeOut = 20,
  } = {}) => {
    initAudio()

    if (!soundState.action) {
      return
    }

    await unlockAudio()

    if (!soundState.unlocked) {
      return
    }

    try {
      soundState.action.loop = false
      soundState.action.currentTime = 0
      await soundState.action.play()
    } catch {
      return
    }

    fadeAudio(soundState.action, peak, fadeIn)

    const fadeOutTimer = setTimeout(() => {
      fadeAudio(soundState.action, 0, fadeOut, {
        pauseOnZero: true,
        resetOnPause: true,
      })
    }, hold)

    timers.push(fadeOutTimer)
  }

  const playHoverAction = () => {
    const now = performance.now()

    if (now - soundState.hoverTick < HOVER_SOUND_GAP_MS) {
      return
    }

    soundState.hoverTick = now
    playInteractionPulse({ peak: 0.16, fadeIn: 120, hold: 120, fadeOut: 680 })
  }

  const playAction = () => {
    playInteractionPulse({ peak: 0.12, fadeIn: 90, hold: 70, fadeOut: 420 })
  }

  const softenInteractionTail = () => {
    if (!soundState.action) {
      return
    }

    fadeAudio(soundState.action, 0, 360, {
      pauseOnZero: true,
      resetOnPause: false,
    })
  }

  const setDetailsFromCard = (card) => {
    detailsTitle.textContent = card.dataset.name || ''
    detailsSubtitle.textContent = card.dataset.subtitle || ''
    detailsKeyNote.textContent = card.dataset.keyNote || ''
    detailsEnergy.textContent = card.dataset.energy || ''
    detailsAdvice.textContent = card.dataset.advice || ''
    detailsMeaning.textContent = card.dataset.meaning || ''
    detailsImage.src = card.querySelector('.tarot-ritual__face--front').src
  }

  const startSpread = () => {
    if (locked || stage !== STAGES.INTRO) {
      return
    }

    playAction()

    locked = true
    setHoverReady(false)
    setStage(STAGES.SPREAD)

    queue(() => {
      setHoverReady(true)
      locked = false
    }, SPREAD_LOCK_MS)
  }

  const selectCard = (card) => {
    if (locked || stage !== STAGES.SPREAD) {
      return
    }

    playAction()

    locked = true
    selectedCard = card
    cards.forEach((item) => {
      item.classList.remove('is-selected')
      item.classList.remove('is-flipped')
    })

    selectedCard.classList.add('is-selected')
    setStage(STAGES.SELECTED)

    queue(() => {
      selectedCard.classList.add('is-flipped')
      playAction()
    }, SELECT_TO_FLIP_MS)

    queue(() => {
      setDetailsFromCard(selectedCard)
      setHoverReady(false)
      setStage(STAGES.REVEALED)
      playAction()
      locked = false
      selectedCard.classList.add('is-flipped')
    }, SHOW_DETAILS_MS)
  }

  const resetRitual = () => {
    if (locked || stage !== STAGES.REVEALED) {
      return
    }

    playAction()
    clearTimers()
    locked = true
    setStage(STAGES.SELECTED)

    queue(() => {
      cards.forEach((item) => {
        item.classList.remove('is-selected')
        item.classList.remove('is-flipped')
      })

      selectedCard = null
      setHoverReady(false)
      setStage(STAGES.SPREAD)
      playAction()

      queue(() => {
        setHoverReady(true)
        locked = false
      }, SPREAD_LOCK_MS)
    }, RESET_MS)
  }

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting && entry.intersectionRatio > 0.35) {
        setAmbientState(true)
      } else {
        setAmbientState(false)
      }
    },
    {
      threshold: [0, 0.2, 0.35, 0.6, 1],
    }
  )

  observer.observe(root)

  spreadButton?.addEventListener('click', startSpread)
  resetButton?.addEventListener('click', resetRitual)

  cards.forEach((card) => {
    card.addEventListener('click', () => {
      selectCard(card)
    })

    card.addEventListener('mouseenter', () => {
      if (stage === STAGES.SPREAD && !locked) {
        playHoverAction()
      }
    })

    card.addEventListener('mouseleave', softenInteractionTail)
  })
  ;[spreadButton, resetButton].forEach((button) => {
    if (!button) {
      return
    }

    button.addEventListener('mouseenter', () => {
      playHoverAction()
    })

    button.addEventListener('mouseleave', softenInteractionTail)
  })

  root.addEventListener('pointerenter', () => {
    unlockAudio()
  })

  root.addEventListener('pointerleave', () => {
    softenInteractionTail()
  })

  root.addEventListener('pointerdown', () => {
    unlockAudio()
  })
}

const initTarotRitual = () => {
  document.querySelectorAll('[data-tarot-ritual]').forEach((root) => {
    setupTarotRitual(root)
  })
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initTarotRitual)
} else {
  initTarotRitual()
}
