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
          <h1 className="offer__title">Библиотека колод МАК</h1>
          <div className="offer__text-mobile">
            <p className="text-2">
              Метафорические ассоциативные карты для самопознания, работы
              с&nbsp;чувствами и&nbsp;психологических практик
            </p>
            <p className="text-2 opa-5">
              Выбирайте свою колоду интуитивно, ориентируясь на&nbsp;отклик
              внутри
            </p>
          </div>
        </div>
        <div className="offer__text text-2">
          <p className="">
            Метафорические ассоциативные карты для самопознания, работы
            с&nbsp;чувствами и&nbsp;психологических практик
          </p>
          <p className="">
            Выбирайте свою колоду интуитивно, ориентируясь на&nbsp;отклик внутри
          </p>
        </div>
      </div>
      <Image
        className="offer__bg"
        src="/src/assets/images/catalog-mak/offer-bg.png"
      />
    </section>
  )
}
