import { forwardRef, useMemo, useState } from 'react'

const withMotion = (TagName = 'div') => {
  return forwardRef(function MotionComponent(props, ref) {
    const {
      animate,
      initial,
      exit,
      transition,
      whileHover,
      whileTap,
      style,
      onMouseEnter,
      onMouseLeave,
      onMouseDown,
      onMouseUp,
      ...rest
    } = props

    const [hovered, setHovered] = useState(false)
    const [pressed, setPressed] = useState(false)

    const current = useMemo(() => {
      if (pressed && whileTap) {
        return whileTap
      }

      if (hovered && whileHover) {
        return whileHover
      }
      return animate || initial || exit || {}
    }, [animate, exit, hovered, initial, pressed, whileHover, whileTap])

    const transformValues = []

    if (current.x !== undefined || current.y !== undefined) {
      transformValues.push(
        `translate(${current.x || 0}px, ${current.y || 0}px)`
      )
    }

    if (current.scale !== undefined) {
      transformValues.push(`scale(${current.scale})`)
    }

    if (current.rotate !== undefined) {
      transformValues.push(`rotate(${current.rotate}deg)`)
    }

    if (current.rotateY !== undefined) {
      transformValues.push(`rotateY(${current.rotateY}deg)`)
    }

    const mergedStyle = {
      ...style,
      opacity: current.opacity ?? style?.opacity,
      zIndex: current.zIndex ?? style?.zIndex,
      transform: [style?.transform, ...transformValues]
        .filter(Boolean)
        .join(' '),
      transition:
        typeof transition === 'object'
          ? `all ${transition.duration || 0.4}s ${transition.ease || 'ease-out'}`
          : style?.transition,
    }

    return (
      <TagName
        ref={ref}
        style={mergedStyle}
        onMouseEnter={(event) => {
          setHovered(true)
          if (onMouseEnter) {
            onMouseEnter(event)
          }
        }}
        onMouseLeave={(event) => {
          setHovered(false)
          if (onMouseLeave) {
            onMouseLeave(event)
          }
        }}
        onMouseDown={(event) => {
          setPressed(true)
          if (onMouseDown) {
            onMouseDown(event)
          }
        }}
        onMouseUp={(event) => {
          setPressed(false)
          if (onMouseUp) {
            onMouseUp(event)
          }
        }}
        {...rest}
      />
    )
  })
}

export const motion = new Proxy(
  {},
  {
    get: (_, key) => withMotion(key),
  }
)

export const AnimatePresence = ({ children }) => <>{children}</>
