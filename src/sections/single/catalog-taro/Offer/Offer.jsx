import { Image } from 'minista'
import './Offer.scss'

export default () => {
  return (
    <section
      className="offer offer-cat container"
      aria-labelledby="offer-title"
    >
      <div className="offer__w">
        <div className="offer__left">
          <h1 className="offer__title">Библиотека колод ТАРО</h1>
          <div className="offer__text-mobile">
            <p className="text-2">
              Найдите колоду, которая будет полностью совпадать с&nbsp;вашим
              настроением и&nbsp;состоянием
            </p>
            <p className="text-2 opa-5">
              Используйте для самопознания, где каждая карта обладает своим
              значением и&nbsp;помогает лучше понять прошлое, настоящее или
              будущее
            </p>
          </div>
        </div>
        <div className="offer__text">
          <p className="text-2">
            Найдите колоду, которая будет полностью совпадать с&nbsp;вашим
            настроением и&nbsp;состоянием
          </p>
          <p className="text-2 opa-5">
            Используйте для самопознания, где каждая карта обладает своим
            значением и&nbsp;помогает лучше понять прошлое, настоящее или
            будущее
          </p>
        </div>
      </div>
      <Image
        className="offer__bg"
        src="/src/assets/images/catalog-taro/offer-bg.png"
      />
    </section>
  )
}
