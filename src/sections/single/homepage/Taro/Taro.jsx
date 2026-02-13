import Button from '@/components/Button'
import SectionTop from '@/layouts/SectionTop'
import { Image } from 'minista'
import './Taro.scss'

export default () => {
  return (
    <section className="taro gsap-smooth" aria-labelledby="offer-title">
      <div className="container">
        <SectionTop className="taro-top" title="Карты таро EZOTOUCH">
          Наши колоды разработаны на основе{' '}
          <span className="opa-5">классической системы Таро Райдера-Уэйта</span>
        </SectionTop>
        <div className="taro__w">
          <div className="taro__left">
            <div className="taro__list">
              <div className="taro-card">
                <Image
                  className="taro-card__img"
                  src="/src/assets/images/main/star.png"
                />
                <p className="taro-card__text">
                  Это диалог с собой через визуальные образы.
                  <span className="opa-6">
                    Карты помогают найти ответы на вопросы, которые вас так
                    волнуют
                  </span>
                </p>
              </div>
              <div className="taro-card">
                <Image
                  className="taro-card__img"
                  src="/src/assets/images/main/star.png"
                />
                <p className="taro-card__text">
                  Это диалог с собой через визуальные образы.
                  <span className="opa-6">
                    Карты помогают найти ответы на вопросы, которые вас так
                    волнуют
                  </span>
                </p>
              </div>
              <div className="taro-card">
                <Image
                  className="taro-card__img"
                  src="/src/assets/images/main/star.png"
                />
                <p className="taro-card__text">
                  Это диалог с собой через визуальные образы.
                  <span className="opa-6">
                    Карты помогают найти ответы на вопросы, которые вас так
                    волнуют
                  </span>
                </p>
              </div>
            </div>
            <Button className="btn btn-primary taro__btn">
              Перейти в Библиотеку Таро
            </Button>
          </div>
          <Image
            className="taro__right"
            src="/src/assets/images/homepage/card-taro.png"
          />
        </div>
      </div>
    </section>
  )
}
