import clsx from 'clsx'
import Icon from '../Icon'
import './Button.scss'

export default (props) => {
  const { className, type = 'button', href, name = false, children } = props

  const isLink = href !== undefined
  const Component = isLink ? 'a' : 'button'
  const linkAttributes = { href }
  const buttonAttributes = { type }
  const attributesByTag = isLink ? linkAttributes : buttonAttributes
  const hasIcon = name ? true : false

  return (
    <Component className={clsx('btn', className)} {...attributesByTag}>
      {children && <span>{children}</span>}
      {hasIcon && <Icon name={name} hasFill />}
      <span className="bg"></span>
    </Component>
  )
}
