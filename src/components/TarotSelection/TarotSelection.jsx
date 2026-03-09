import { Image } from 'minista'
import './TarotSelection.scss'

const START_ANGLE = -160
const END_ANGLE = -20
const RADIUS = 320

const CARDS = [
  {
    name: 'THE EMPEROR',
    subtitle: 'Authority',
    keyNote: 'Опора и контроль',
    energy: 'Стабильная • Структурная',
    advice: 'Выставите ясные границы и опирайтесь на дисциплину.',
    meaning:
      'Сегодня сила в спокойной уверенности. Действуйте последовательно: порядок и ответственность создают пространство для будущей свободы.',
  },
  {
    name: 'THE STAR',
    subtitle: 'Guidance',
    keyNote: 'Надежда и обновление',
    energy: 'Лёгкая • Исцеляющая',
    advice: 'Фокус на одном намерении и поддерживайте его каждый день.',
    meaning:
      'Впереди период мягкого восстановления. Позвольте себе идти маленькими шагами — именно они собираются в большую перемену.',
  },
  {
    name: 'THE MOON',
    subtitle: 'Intuition',
    keyNote: 'Внутренний компас',
    energy: 'Глубокая • Чувственная',
    advice: 'Не ускоряйте решения. Сначала наблюдайте, потом действуйте.',
    meaning:
      'Неясность не враг, а пространство для тонкого понимания. Доверяйте ощущениям и проверяйте факты, прежде чем делать выводы.',
  },
  {
    name: 'THE EMPEROR',
    subtitle: 'Authority',
    keyNote: 'Опора и контроль',
    energy: 'Стабильная • Структурная',
    advice: 'Выставите ясные границы и опирайтесь на дисциплину.',
    meaning:
      'Сегодня сила в спокойной уверенности. Действуйте последовательно: порядок и ответственность создают пространство для будущей свободы.',
  },
  {
    name: 'THE STAR',
    subtitle: 'Guidance',
    keyNote: 'Надежда и обновление',
    energy: 'Лёгкая • Исцеляющая',
    advice: 'Фокус на одном намерении и поддерживайте его каждый день.',
    meaning:
      'Впереди период мягкого восстановления. Позвольте себе идти маленькими шагами — именно они собираются в большую перемену.',
  },
  {
    name: 'THE MOON',
    subtitle: 'Intuition',
    keyNote: 'Внутренний компас',
    energy: 'Глубокая • Чувственная',
    advice: 'Не ускоряйте решения. Сначала наблюдайте, потом действуйте.',
    meaning:
      'Неясность не враг, а пространство для тонкого понимания. Доверяйте ощущениям и проверяйте факты, прежде чем делать выводы.',
  },
  {
    name: 'THE EMPEROR',
    subtitle: 'Authority',
    keyNote: 'Опора и контроль',
    energy: 'Стабильная • Структурная',
    advice: 'Выставите ясные границы и опирайтесь на дисциплину.',
    meaning:
      'Сегодня сила в спокойной уверенности. Действуйте последовательно: порядок и ответственность создают пространство для будущей свободы.',
  },
  {
    name: 'THE STAR',
    subtitle: 'Guidance',
    keyNote: 'Надежда и обновление',
    energy: 'Лёгкая • Исцеляющая',
    advice: 'Фокус на одном намерении и поддерживайте его каждый день.',
    meaning:
      'Впереди период мягкого восстановления. Позвольте себе идти маленькими шагами — именно они собираются в большую перемену.',
  },
  {
    name: 'THE MOON',
    subtitle: 'Intuition',
    keyNote: 'Внутренний компас',
    energy: 'Глубокая • Чувственная',
    advice: 'Не ускоряйте решения. Сначала наблюдайте, потом действуйте.',
    meaning:
      'Неясность не враг, а пространство для тонкого понимания. Доверяйте ощущениям и проверяйте факты, прежде чем делать выводы.',
  },
  {
    name: 'THE EMPEROR',
    subtitle: 'Authority',
    keyNote: 'Опора и контроль',
    energy: 'Стабильная • Структурная',
    advice: 'Выставите ясные границы и опирайтесь на дисциплину.',
    meaning:
      'Сегодня сила в спокойной уверенности. Действуйте последовательно: порядок и ответственность создают пространство для будущей свободы.',
  },
  {
    name: 'THE STAR',
    subtitle: 'Guidance',
    keyNote: 'Надежда и обновление',
    energy: 'Лёгкая • Исцеляющая',
    advice: 'Фокус на одном намерении и поддерживайте его каждый день.',
    meaning:
      'Впереди период мягкого восстановления. Позвольте себе идти маленькими шагами — именно они собираются в большую перемену.',
  },
  {
    name: 'THE MOON',
    subtitle: 'Intuition',
    keyNote: 'Внутренний компас',
    energy: 'Глубокая • Чувственная',
    advice: 'Не ускоряйте решения. Сначала наблюдайте, потом действуйте.',
    meaning:
      'Неясность не враг, а пространство для тонкого понимания. Доверяйте ощущениям и проверяйте факты, прежде чем делать выводы.',
  },
]

const cards = Array.from({ length: CARDS.length }, (_, index) => {
  const step = (END_ANGLE - START_ANGLE) / (CARDS.length - 1)
  const angleDeg = START_ANGLE + step * index
  const angle = (angleDeg * Math.PI) / 180
  const content = CARDS[index % CARDS.length]

  return {
    id: index,
    x: RADIUS * Math.cos(angle),
    y: RADIUS * Math.sin(angle) + 240,
    rotate: angleDeg + 90,
    ...content,
  }
})

const particles = Array.from({ length: 110 }, (_, index) => {
  const left = (index * 37) % 100
  const size = 2 + (index % 5)
  const delay = (index % 18) * 0.45
  const duration = 7 + (index % 11)
  const drift = -80 + ((index * 29) % 160)
  const alpha = 0.12 + (index % 7) * 0.08

  return {
    id: index,
    left,
    size,
    delay,
    duration,
    drift,
    alpha,
  }
})

export default () => {
  return (
    <section className="tarot-ritual " data-tarot-ritual data-stage="intro">
      <div className="tarot-ritual__particles" aria-hidden="true">
        {particles.map((particle) => (
          <span
            key={particle.id}
            className="tarot-ritual__particle"
            style={{
              '--particle-left': `${particle.left}%`,
              '--particle-size': `${particle.size}px`,
              '--particle-delay': `${particle.delay}s`,
              '--particle-duration': `${particle.duration}s`,
              '--particle-drift': `${particle.drift}px`,
              '--particle-alpha': particle.alpha,
            }}
          />
        ))}
      </div>

      <div className="tarot-ritual__intro" data-intro>
        <h2 className="tarot-ritual__title">Карта дня</h2>
        <p className="tarot-ritual__description">
          Выберите карту и получите ориентир дня: фокус, энергию и рекомендацию.
        </p>

        <button
          type="button"
          className="btn btn-primary tarot-ritual__action"
          data-spread-trigger
        >
          Выбрать карту
        </button>
      </div>

      <div className="tarot-ritual__arena">
        {cards.map((card, index) => {
          return (
            <button
              key={card.id}
              type="button"
              className="tarot-ritual__card"
              data-card
              data-id={card.id}
              data-name={card.name}
              data-subtitle={card.subtitle}
              data-key-note={card.keyNote}
              data-energy={card.energy}
              data-advice={card.advice}
              data-meaning={card.meaning}
            >
              <span className="tarot-ritual__card-inner">
                <Image
                  className="tarot-ritual__face tarot-ritual__face--back"
                  src="src/assets/images/main/back.png"
                />
                <Image
                  className="tarot-ritual__face tarot-ritual__face--front"
                  src="src/assets/images/main/magican.png"
                />
              </span>
            </button>
          )
        })}
      </div>

      <div className="tarot-ritual__details" data-details>
        <div className="tarot-ritual__details-head">
          <h3 className="tarot-ritual__details-title" data-details-title>
            Название карты
          </h3>
          <p className="tarot-ritual__details-subtitle" data-details-subtitle>
            Основной архетип
          </p>
        </div>

        <div className="tarot-ritual__details-grid">
          <div className="tarot-ritual__details-panel">
            <p className="tarot-ritual__meta-line">
              <span>Ключ:</span>{' '}
              <span data-details-key-note>Параметр карты</span>
            </p>
            <p className="tarot-ritual__meta-line">
              <span>Энергия:</span> <span data-details-energy>Энергия дня</span>
            </p>
            <p className="tarot-ritual__meta-line">
              <span>Совет:</span> <span data-details-advice>Совет карты</span>
            </p>
          </div>

          <div className="tarot-ritual__details-spacer" aria-hidden="true">
            <Image data-details-image src="src/assets/images/main/back.png" />
          </div>

          <div className="tarot-ritual__details-panel tarot-ritual__details-panel--description">
            <p data-details-meaning>Описание появится после выбора карты.</p>
          </div>
        </div>

        <button
          type="button"
          className="btn btn-primary tarot-ritual__action"
          data-reset-trigger
        >
          Выбрать другую карту
        </button>
      </div>
    </section>
  )
}
