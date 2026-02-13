import SectionTop from '@/layouts/SectionTop'
import { Image } from 'minista'
import './MakRead.scss'

export default () => {
  return (
    <section className="mak-read gsap-smooth" aria-labelledby="mak-read-title">
      <div className="container">
        <SectionTop
          className="mak-read-top"
          title="Как работать с метафорическими картами"
        >
          <span className="opa-6">(инструкция)</span>
        </SectionTop>
        <div className="mak-read__w">
          <div className="mak-read-card">
            <div className="mak-read-card__top">
              <span className="mak-read-card__count">01</span>
              <Image
                className="mak-read-card__icon"
                src="/src/assets/images/main/star.png"
              />
            </div>
            <div className="mak-read-card__bottom">
              <h3 className="mak-read-card__title">Сформулируйте вопрос</h3>
              <div className="mak-read-card__cont">
                <div className="mak-read-card__w">
                  <p>
                    Он должен касаться вас лично и ваших внутренних процессов.
                  </p>
                  <p>Он не должен запрашивать конкретные даты или сроки.</p>
                </div>
                <div className="mak-read-card__w">
                  <h5>Примеры</h5>
                  <p>
                    "Что мешает мне принять решение?", "Какой ресурс поможет мне
                    в текущей ситуации?", "Что я чувствую по отношению к этой
                    проблеме?"
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div className="mak-read-card">
            <div className="mak-read-card__top">
              <span className="mak-read-card__count">02</span>
              <Image
                src="/src/assets/images/main/star.png"
                className="mak-read-card__icon"
              />
            </div>
            <div className="mak-read-card__bottom">
              <h3 className="mak-read-card__title">Сформулируйте вопрос</h3>
              <div className="mak-read-card__cont">
                <div className="mak-read-card__w">
                  <p>
                    Он должен касаться вас лично и ваших внутренних процессов.
                  </p>
                  <p>Он не должен запрашивать конкретные даты или сроки.</p>
                </div>
                <div className="mak-read-card__w">
                  <h5>Примеры</h5>
                  <p>
                    "Что мешает мне принять решение?", "Какой ресурс поможет мне
                    в текущей ситуации?", "Что я чувствую по отношению к этой
                    проблеме?"
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div className="mak-read-card">
            <div className="mak-read-card__top">
              <span className="mak-read-card__count">03</span>
              <Image
                src="/src/assets/images/main/star.png"
                className="mak-read-card__icon"
              />
            </div>
            <div className="mak-read-card__bottom">
              <h3 className="mak-read-card__title">Сформулируйте вопрос</h3>
              <div className="mak-read-card__cont">
                <div className="mak-read-card__w">
                  <p>
                    Он должен касаться вас лично и ваших внутренних процессов.
                  </p>
                  <p>Он не должен запрашивать конкретные даты или сроки.</p>
                </div>
                <div className="mak-read-card__w">
                  <h5>Примеры</h5>
                  <p>
                    "Что мешает мне принять решение?", "Какой ресурс поможет мне
                    в текущей ситуации?", "Что я чувствую по отношению к этой
                    проблеме?"
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div className="mak-read-card">
            <div className="mak-read-card__top">
              <span className="mak-read-card__count">04</span>
              <Image
                src="/src/assets/images/main/star.png"
                className="mak-read-card__icon"
              />
            </div>
            <div className="mak-read-card__bottom">
              <h3 className="mak-read-card__title">Сформулируйте вопрос</h3>
              <div className="mak-read-card__cont">
                <div className="mak-read-card__w">
                  <p>
                    Он должен касаться вас лично и ваших внутренних процессов.
                  </p>
                  <p>Он не должен запрашивать конкретные даты или сроки.</p>
                </div>
                <div className="mak-read-card__w">
                  <h5>Примеры</h5>
                  <p>
                    "Что мешает мне принять решение?", "Какой ресурс поможет мне
                    в текущей ситуации?", "Что я чувствую по отношению к этой
                    проблеме?"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
