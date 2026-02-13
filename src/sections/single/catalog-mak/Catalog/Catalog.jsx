import Card from '@/components/Card'
import SectionTop from '@/layouts/SectionTop'
import './Catalog.scss'

export default () => {
  return (
    <section className="catalog" aria-labelledby="catalog-title">
      <div className="container">
        <SectionTop className="popular-top" title="Миры EZOTOUCH"></SectionTop>
        <div className="catalog__w">
          <Card title="МАК универсальные" img="moon" origin>
            Универсальная колода без слов для самопомощи, глубинной терапии и
            интуитивной практики
          </Card>
          <Card title="МАК Штрихи Вселенной" img="space">
            Универсальный набор для интуитивной практики, работы с чувствами и
            внутренними состояниями.
          </Card>
          <Card title="МАК Твоя интуиция" img="you">
            Универсальная колода для самопомощи, диагностики эмоций, и глубокого
            диалога с собой.
          </Card>
          <Card title="МАК Пять измерений" img="five">
            Колода созданная для интуитивной самодиагностики, психологических
            практик и вдохновляющей работы с cобой
          </Card>
          <Card title="МАК универсальные" img="moon" origin>
            Универсальная колода без слов для самопомощи, глубинной терапии и
            интуитивной практики
          </Card>
          <Card title="МАК Штрихи Вселенной" img="space">
            Универсальный набор для интуитивной практики, работы с чувствами и
            внутренними состояниями.
          </Card>
          <Card title="МАК Твоя интуиция" img="you">
            Универсальная колода для самопомощи, диагностики эмоций, и глубокого
            диалога с собой.
          </Card>
          <Card title="МАК Пять измерений" img="five">
            Колода созданная для интуитивной самодиагностики, психологических
            практик и вдохновляющей работы с cобой
          </Card>
        </div>
      </div>
    </section>
  )
}
