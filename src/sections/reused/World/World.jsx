import { Image } from 'minista'
import './World.scss'

export default () => {
  return (
    <section className="world" aria-labelledby="offer-title">
      <div className="container">
        <h2 className="world__title">
          Найдите свой мир в&nbsp;библиотеке EZOTOUCH
        </h2>
        <div className="world__w">
          <div className="world__line"></div>

          <div className="world__card">
            <div className="world__top">
              <span className="world__count">1</span>
              <p className="world__text text-1">
                Каждая колода создается командой психологов и художников
              </p>
            </div>
            <Image
              className="world__img"
              src="/src/assets/images/main/world-1.png"
            />
          </div>
          <div className="world__line"></div>
          <div className="world__card">
            <div className="world__top">
              <span className="world__count">2</span>
              <p className="world__text text-1">
                <b>Мы прислушиваемся к тем,</b> кто работает с нашими картами, и
                бережно дорабатываем каждую деталь
              </p>
            </div>
            <Image
              className="world__img"
              src="/src/assets/images/main/world-2.png"
            />
          </div>
          <div className="world__line"></div>
          <div className="world__card">
            <div className="world__top">
              <span className="world__count">3</span>
              <p className="world__text text-1">
                <b>Карты сделаны так, чтобы с ними хотелось работать</b> (мягкие
                края и гладкая поверхность)
              </p>
            </div>
            <Image
              className="world__img"
              src="/src/assets/images/main/world-3.png"
            />
          </div>
          <div className="world__line"></div>
        </div>
      </div>
    </section>
  )
}
