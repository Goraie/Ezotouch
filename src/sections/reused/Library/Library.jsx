import Button from '@/components/Button'
import { Image } from 'minista'
import './Library.scss'

export default () => {
  return (
    <section className="library" aria-labelledby="offer-title">
      <div className="container">
        <div className="section-top">
          <h2 className="section-top__title">
            Погрузитесь в волшебную библиотеку EZOTOUCH
          </h2>
          <div className="section-top__right">
            <p className="section-top__text text-2">
              Познайте свои чувства и эмоции через наши карты
            </p>
            <Button className="btn-primary section-top__btn popup-open">
              Перейти в библиотеку
            </Button>
          </div>
        </div>
        <div className="library__w">
          <div className="library__w-t">
            <div className="library__card">
              <p className="library__text">Самопознание</p>
            </div>
            <div className="library__card">
              <p className="library__text">Психологические практики</p>
            </div>
          </div>
          <div className="library__w-t">
            <div className="library__card">
              <p className="library__text">Консультации</p>
            </div>
            <div className="library__card">
              <p className="library__text">
                Расклады на любовь,&nbsp;путь и&nbsp;предназначение
              </p>
            </div>
          </div>
        </div>
        <Button className="btn-primary library__btn popup-open">
          Перейти в библиотеку
        </Button>
      </div>
      <div className="popup">
        <div className="popup__w">
          <h2 className="popup__title">Выбери свой путь</h2>
          <div className="popup__list">
            <div className="popup__card">
              <Image
                src="/src/assets/images/catalog-taro/taro-bg.png"
                className="popup__img"
              />
              <Button href="/catalog-taro" className="btn-primary popup__btn">
                Перейти в библиотеку Таро
              </Button>
            </div>
            <div className="popup__line"></div>
            <div className="popup__card">
              <Image
                src="/src/assets/images/catalog-mak/mak-bg.png"
                className="popup__img"
              />
              <Button href="/catalog-mak" className="btn-primary popup__btn">
                Перейти в библиотеку Мак
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
