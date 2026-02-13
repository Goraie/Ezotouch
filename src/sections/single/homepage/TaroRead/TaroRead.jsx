import { Image } from 'minista'
import './TaroRead.scss'

export default () => {
  return (
    <section
      className="taro-read gsap-smooth"
      aria-labelledby="taro-read-title"
    >
      <div className="container">
        <h2 className="taro-read__title">Как читать и понимать карты ТАРО?</h2>
        <div className="taro-read__w">
          {/* content */}
          <div className="taro-read__card">
            <div className="taro-read__image">
              <Image
                src="/src/assets/images/homepage/taro-read-1.png"
                className="taro-read__img"
              />
              <p className="taro-read__descr big-text-m">
                С чего начинается диалог с картами?
              </p>
            </div>
            <div className="taro-read__content">
              <h4 className="taro-read__heading">Настрой перед раскладом</h4>
              <div className="taro-read__bottom">
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Выбор колоды</h5>
                  <p className="text-2 opa-5">
                    Для начала рекомендуется выбрать классическую колоду,
                    например, Таро Райдера-Уэйта, так как большинство учебных
                    материалов и значений карт основаны именно на ней.
                  </p>
                </div>
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Выбор колоды</h5>
                  <p className="text-2 opa-5">
                    Для начала рекомендуется выбрать классическую колоду,
                    например, Таро Райдера-Уэйта, так как большинство учебных
                    материалов и значений карт основаны именно на ней.
                  </p>
                </div>
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Выбор колоды</h5>
                  <p className="text-2 opa-5">
                    Для начала рекомендуется выбрать классическую колоду,
                    например, Таро Райдера-Уэйта, так как большинство учебных
                    материалов и значений карт основаны именно на ней.
                  </p>
                </div>
              </div>
              <div className="taro-read__point">
                <h5 className="text-2 opa-8">Выбор колоды</h5>
                <p className="text-2 opa-5">
                  Для начала рекомендуется выбрать классическую колоду,
                  например, Таро Райдера-Уэйта, так как большинство учебных
                  материалов и значений карт основаны именно на ней.
                </p>
              </div>
            </div>
          </div>
          <div className="taro-read__card">
            <div className="taro-read__image">
              <Image
                src="/src/assets/images/homepage/taro-read-2.png"
                className="taro-read__img"
              />
              <p className="taro-read__descr big-text-m">
                Дальше переходим к магии
              </p>
            </div>
            <div className="taro-read__content">
              <h4 className="taro-read__heading">Техники расклада</h4>
              <div className="taro-read__bottom">
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Выбор колоды</h5>
                  <p className="text-2 opa-5">
                    ДДля новичков отлично подходят простые расклады, например,
                    на трех картах (прошлое/настоящее/будущее,
                    ситуация/действие/результат).
                  </p>
                </div>
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Формулировка вопроса</h5>
                  <p className="text-2 opa-5">
                    Четко и ясно сформулируйте вопрос, на который вы хотите
                    получить ответ. От этого зависит точность толкования.
                  </p>
                </div>
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Перемешивание карт</h5>
                  <p className="text-2 opa-5">
                    Тщательно перемешайте колоду, держа в уме свой вопрос. Затем
                    вытащите карты в соответствии с выбранной схемой расклада.
                  </p>
                </div>
                <div className="taro-read__point">
                  <h5 className="text-2 opa-8">Толкование</h5>
                  <p className="text-2 opa-5">
                    Разложите карты (обычно рубашкой вверх, затем переворачивая)
                    и интерпретируйте их значения в контексте заданного вопроса
                    и позиций в раскладе. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          {/* /content */}
        </div>
      </div>
    </section>
  )
}
