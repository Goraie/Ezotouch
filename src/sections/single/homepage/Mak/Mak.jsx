import { Image } from 'minista'
import './Mak.scss'

export default () => {
  return (
    <section className="mak gsap-smooth" aria-labelledby="mak-title">
      <div className="container">
        <div className="mak__top">
          <h2 className="mak__title">
            Метафорические ассоциативные&nbsp;карты
          </h2>
          <p className="mak__text opa-8 big-text-l">
            Вытяните карту — и пусть её образ станет зеркалом для ваших мыслей и
            чувств
          </p>
          <p className="mak__text opa-8 big-text-l">
            Простой способ увидеть своё состояние со стороны, найти ясность и
            внутреннюю опору
          </p>
        </div>
        <Image className="mak__img" src="/src/assets/images/homepage/mak.png" />
      </div>
    </section>
  )
}
