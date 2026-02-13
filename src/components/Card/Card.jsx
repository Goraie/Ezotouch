import clsx from 'clsx'
import { Image } from 'minista'
import Button from '../Button'
import './Card.scss'

export default (props) => {
  const { className, title, children, img, origin = false } = props

  return (
    <div className={clsx('card', className)}>
      <div className="card__img">
        <Image src={'/src/assets/images/main/card-' + img + '.png'} />
        {!origin && <span>авторская колода</span>}
      </div>
      <div className="card__cont">
        <div className="card__top">
          <h3 className="card__title">{title}</h3>
          <p className="card__descr opa-7 text-3">{children}</p>
        </div>
        <div className="card__action">
          <Button href="/pack" className="btn card__btn">
            Подробнее
          </Button>
          <div className="card__bottom">
            <Button
              className="btn btn-marketplace btn-marketplace-wb"
              name="wb"
            ></Button>
            <Button
              className="btn btn-marketplace btn-marketplace-ozon"
              name="ozon"
            ></Button>
          </div>
        </div>
      </div>
    </div>
  )
}
