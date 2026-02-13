import Button from '@/components/Button'
import { Image } from 'minista'
import './Open.scss'

export default () => {
  return (
    <section className="open" aria-labelledby="open-title">
      <div className="container">
        <div className="open__w">
          <div className="open__left">
            <div className="open__top">
              <h2 className="open__title">Откройте врата к&nbsp;истокам</h2>
              <div className="open__text text-2 opa-9">
                <p>
                  Таро Райдера-Уэйта&nbsp;&mdash; классика, прошедшая испытание
                  временем, раскрывающая скрытые силы вселенной через символы
                  и&nbsp;архетипы. Каждая карта&nbsp;&mdash; живая история,
                  полная мудрости, которая помогает найти ясность и&nbsp;ответы
                  на&nbsp;жизненные вопросы
                </p>
                <p>
                  Исследуйте мир Таро Райдера-Уэйта и&nbsp;откройте для себя
                  силу этой уникальной колоды. Откройте для себя карты,
                  с&nbsp;которых все началось
                </p>
              </div>
            </div>
            <Button className="btn-primary open__btn">
              Подробное описание колоды
            </Button>
          </div>
          <div className="open__right">
            <Image
              className="open__icon"
              src="/src/assets/images/main/star.png"
            />
            <Image
              className="open__icon"
              src="/src/assets/images/main/star.png"
            />
            <Image
              className="open__icon"
              src="/src/assets/images/main/star.png"
            />
            <Image
              className="open__icon"
              src="/src/assets/images/main/star.png"
            />

            <Image
              className="open__img"
              src="/src/assets/images/main/main-taro.png"
            />
          </div>
        </div>
      </div>
    </section>
  )
}
