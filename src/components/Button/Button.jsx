import clsx from 'clsx'
import Icon from '../Icon'
import './Button.scss'

export default (props) => {
  const { className, type = 'button', href, name = false, children, id } = props

  const isLink = href !== undefined
  const Component = isLink ? 'a' : 'button'
  const linkAttributes = {
    href,
    ...(typeof href === 'string' && href.startsWith('http')
      ? { target: '_blank', rel: 'noopener noreferrer' }
      : {}),
  }
  const buttonAttributes = { type }
  const attributesByTag = isLink ? linkAttributes : buttonAttributes
  const hasIcon = name ? true : false

  return (
    <Component id={id} className={clsx('btn', className)} {...attributesByTag}>
      {children && <span>{children}</span>}
      {hasIcon && <Icon name={name} hasFill />}
      <span className="bg"></span>
    </Component>
  )
}
