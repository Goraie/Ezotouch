import { Image } from 'minista'
import './First.scss'

export default () => {
  return (
    <section className="first-card container" aria-labelledby="first-title">
      <div className="breadcrumbs">
        <a href="/"> Главная</a>
        <a href="/catalog-taro">Библиотека Таро</a>
        <span className="active">Таро Хроноса</span>
      </div>
      <div className="first-card__w">
        <div className="first-card__left">
          <div className="first-card__top">
            <h1 className="first-card__title">Маг</h1>
            <p className="first-card__descr opa-7">
              Старший Аркан, символизирующий силу, волю, мастерство, инициативу
              и начало нового цикла
            </p>
          </div>
          <div className="first-card__bottom">
            <h4 className="first-card__heading">Характер и энергия карты</h4>
            <div className="first-card__table text-2">
              <div className="first-card__row">
                <span className="first-card__name">Оригинальное название</span>
                <span className="first-card__val">The Magician</span>
              </div>
              <div className="first-card__row">
                <span className="first-card__name">Как еще называют</span>
                <span className="first-card__val">
                  Волшебник, Фокусник, Фигляр
                </span>
              </div>
              <div className="first-card__row">
                <span className="first-card__name">Аркан</span>
                <span className="first-card__val">Старший Аркан</span>
              </div>
              <div className="first-card__row">
                <span className="first-card__name">Номер карты</span>
                <span className="first-card__val">1</span>
              </div>
            </div>
          </div>
        </div>
        <div className="first-card__right">
          <svg
            width="25"
            height="37"
            viewBox="0 0 25 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12.75 0.75V35.8599M0.75 16.75H23.75"
              stroke="white"
              strokeWidth="1.5"
              strokeLinecap="round"
            />
          </svg>
          <svg
            width="25"
            height="37"
            viewBox="0 0 25 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12.75 0.75V35.8599M0.75 16.75H23.75"
              stroke="white"
              strokeWidth="1.5"
              strokeLinecap="round"
            />
          </svg>
          <svg
            width="25"
            height="37"
            viewBox="0 0 25 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12.75 0.75V35.8599M0.75 16.75H23.75"
              stroke="white"
              strokeWidth="1.5"
              strokeLinecap="round"
            />
          </svg>
          <svg
            width="25"
            height="37"
            viewBox="0 0 25 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12.75 0.75V35.8599M0.75 16.75H23.75"
              stroke="white"
              strokeWidth="1.5"
              strokeLinecap="round"
            />
          </svg>

          <Image src="/src/assets/images/card/first-card.png" />
        </div>
      </div>
    </section>
  )
}
