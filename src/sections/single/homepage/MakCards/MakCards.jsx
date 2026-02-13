import Button from '@/components/Button'
import Card from '@/components/Card'
import SectionTop from '@/layouts/SectionTop'
import './MakCards.scss'

export default () => {
  return (
    <section className="list-cards" aria-labelledby="list-cards-title">
      <div className="container">
        <SectionTop
          className="mak-cards-top"
          title="Выберите колоду мак, которая вам откликнется"
          btn="Посмотреть другие колоды"
        >
          Метафорические карты используются для работы{' '}
          <span className="opa-6">
            с чувствами, мыслями и внутренними состояниями через образы
          </span>
        </SectionTop>
        <div className="list-cards__w">
          <div className="list-cards__arrow list-cards__arrow-prev">
            <svg
              width="8"
              height="14"
              viewBox="0 0 8 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438"
                stroke="currentColor"
                strokeWidth="2"
              />
            </svg>
          </div>
          <div className="list-cards__arrow list-cards__arrow-next">
            <svg
              width="8"
              height="14"
              viewBox="0 0 8 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438"
                stroke="black"
                strokeWidth="2"
              />
            </svg>
          </div>
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
        <Button className="btn-primary list-cards__btn">
          Посмотреть другие колоды
        </Button>
      </div>
    </section>
  )
}
