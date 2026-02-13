import Button from '@/components/Button'
import { Image } from 'minista'
import './Offer.scss'

export default () => {
  return (
    <section className="offer container" aria-labelledby="offer-title">
      <div className="offer__w">
        <div className="offer__left">
          <h1 className="offer__title">
            Магическая Библиотека колод Таро и МАК
          </h1>
          <div className="offer__text-mobile">
            <p className="text-2">
              Каждая колода Ezotouch&nbsp;&mdash; это отдельный мир
              со&nbsp;своей энергией и&nbsp;историей
            </p>
            <p className="text-2 opa-5">
              Каждая карта продумана до&nbsp;мелочей, она хранит свой смысл
              и&nbsp;помогает увидеть ответы на&nbsp;любые вопросы
            </p>
          </div>
          <div className="offer__action">
            <Button href="/catalog-taro" className="btn btn-primary">
              Выбрать колоду Таро
            </Button>
            <Button href="/catalog-mak" className="btn">
              Выбрать колоду МАК
            </Button>
          </div>
        </div>
        <div className="offer__text">
          <p className=" text-2">
            Каждая колода Ezotouch&nbsp;&mdash; это отдельный мир со&nbsp;своей
            энергией и&nbsp;историей
          </p>
          <p className=" text-2 opa-5">
            Каждая карта продумана до&nbsp;мелочей, она хранит свой смысл
            и&nbsp;помогает увидеть ответы на&nbsp;любые вопросы
          </p>
        </div>
      </div>
      <Image
        className="offer__bg"
        src="/src/assets/images/homepage/first-bg.png"
      />
    </section>
  )
}
