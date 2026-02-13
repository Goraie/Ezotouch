import Button from '@/components/Button'
import SectionTop from '@/layouts/SectionTop'
import { Image } from 'minista'
import './Day.scss'

export default () => {
  return (
    <section className="day " aria-labelledby="day-title">
      <div className="container">
        <SectionTop className="day-top" title="Ваша карта дня">
          Узнайте какая из карт сегодня выпадет Вам.{' '}
          <span className="opa-5">Возможно, это знак</span>
        </SectionTop>

        <div className="day__wrapper">
          <div className="day__card">
            <div className="day__flipped">
              <Image
                className="day__close"
                src="/src/assets/images/homepage/card-close.png"
              />
              <Image
                className="day__open"
                src="/src/assets/images/homepage/card-open.png"
              />
            </div>
          </div>
          <div className="day__descr">
            <div className="day__top">
              <span className="day__span">Ваша карта</span>
              <h2 className="day__title">Название карты</h2>
            </div>
            <div className="day__content">
              <p>Тут будет описание вашей карты</p>
            </div>
            <div className="day__action">
              <Button className="btn btn-primary day__btn">
                Подобрать карту
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
