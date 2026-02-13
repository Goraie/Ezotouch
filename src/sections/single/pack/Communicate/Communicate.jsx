import { Image } from 'minista'
import './Communicate.scss'

export default () => {
  return (
    <section className="comm" aria-labelledby="comm-title">
      <div className="container">
        <div className="comm__top">
          <h2 className="comm__title">Как общаться с&nbsp;картами</h2>
          <div className="comm__text">
            <p>
              Это универсальная колода Таро, созданная для работы
              с&nbsp;интуицией и&nbsp;внутренними образами.
            </p>
            <p>
              Она подходит для глубоких раскладов, медитативных практик
              и&nbsp;проективной работы&nbsp;&mdash; в&nbsp;метафорических,
              психологических и&nbsp;коучинговых сессиях.
            </p>
            <p>
              Колода идеальна для тех, кто мыслит визуально и&nbsp;ценит свободу
              личной интерпретации.
            </p>
          </div>
        </div>
        <Image className="comm__img" src="/src/assets/images/catalog/how.png" />
      </div>
    </section>
  )
}
