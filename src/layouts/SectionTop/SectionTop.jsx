import Button from '@/components/Button'
import clsx from 'clsx'
import './SectionTop.scss'

export default (props) => {
  const { className, title, btn = false, isPopup = false, children } = props

  return (
    <div className={clsx('section-top', className)}>
      <h2 className="section-top__title">{title}</h2>
      <div className="section-top__right">
        <p className="section-top__text text-2">{children}</p>
        {btn && (
          <Button href="/" className="btn-primary section-top__btn">
            {btn}
          </Button>
        )}
      </div>
    </div>
  )
}
