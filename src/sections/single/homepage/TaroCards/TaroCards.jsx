import Button from '@/components/Button'
import Card from '@/components/Card'
import SectionTop from '@/layouts/SectionTop'
import './TaroCards.scss'

export default () => {
  return (
    <section
      className="list-cards gsap-smooth"
      aria-labelledby="list-cards-title"
    >
      <div className="container">
        <SectionTop
          className="taro-cards-top"
          title="Выберите колоду таро, которая вам откликнется"
          btn="Посмотреть другие колоды"
        >
          Каждая колода состоит из 78 карт —{' '}
          <span className="opa-5">
            классический формат, принятый в системе Таро Райдера-Уэйта
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
          <Card title="Таро уэйта" img="origin" origin>
            Универсальная колода, который поможет вам быстро
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
        <Button className="btn-primary list-cards__btn">
          Посмотреть другие колоды
        </Button>
      </div>
    </section>
  )
}
