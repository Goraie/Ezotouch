import Button from '@/components/Button'
import { Image } from 'minista'
import './First.scss'

export default () => {
  return (
    <section className="first container" aria-labelledby="first-title">
      <div className="breadcrumbs">
        <a href="/"> Главная</a>
        <a href="/catalog-taro">Библиотека Таро</a>
        <span className="active">Таро Хроноса</span>
      </div>
      <div className="first__w">
        <div className="first__left">
          <h1 className="first__title">Колода хроноса</h1>
        </div>
        <div className="first__main">
          <Image
            className="first__img"
            src="/src/assets/images/catalog/offer.png"
          />
          <span></span>
        </div>
        <div className="first__right">
          <p className="first__descr text-2 opa-7">
            Карты Таро «Хроноса» - авторская колода на 78 карт, выполненная по
            системе Райдера–Уэйта. Колода создана специально для тех, кто
            предпочитает глубокую визуальную работу с архетипами, интуицией и
            символами
          </p>
          <div className="first__action">
            <Button
              className="btn-marketplace btn-marketplace-wb"
              name="wb"
            ></Button>
            <Button
              className="btn-marketplace btn-marketplace-ozon"
              name="ozon"
            ></Button>
          </div>
        </div>
      </div>
    </section>
  )
}
