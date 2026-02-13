import Card from '@/components/Card'
import SectionTop from '@/layouts/SectionTop'
import './Catalog.scss'

export default () => {
  return (
    <section className="catalog" aria-labelledby="catalog-title">
      <div className="container">
        <SectionTop className="popular-top" title="Миры EZOTOUCH"></SectionTop>
        <div className="catalog__w">
          <Card title="Таро уэйта" img="origin" origin>
            Универсальная колода, который поможет вам быстро освоить основы
            раскладов
          </Card>
          <Card title="Таро Эльфов" img="elf">
            Авторская колода интуитивной практики, раскладов на отношения,
            работу и личностное развитие
          </Card>
          <Card title="Вечная жизнь" img="infinity">
            Авторская колода, рассчитаная на самостоятельную интерпретацию без
            привязки к готовым трактовкам
          </Card>
          <Card title="Таро теней" img="shades">
            Колода, исследующая скрытые стороны личности и подсознательные
            процессы
          </Card>
          <Card title="Таро уэйта" img="origin" origin>
            Универсальная колода, который поможет вам быстро освоить основы
            раскладов
          </Card>
          <Card title="Таро Эльфов" img="elf">
            Авторская колода интуитивной практики, раскладов на отношения,
            работу и личностное развитие
          </Card>
          <Card title="Вечная жизнь" img="infinity">
            Авторская колода, рассчитаная на самостоятельную интерпретацию без
            привязки к готовым трактовкам
          </Card>
          <Card title="Таро теней" img="shades">
            Колода, исследующая скрытые стороны личности и подсознательные
            процессы
          </Card>
        </div>
      </div>
    </section>
  )
}
