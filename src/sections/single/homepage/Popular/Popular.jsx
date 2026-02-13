import Card from '@/components/Card'
import SectionTop from '@/layouts/SectionTop'
import './Popular.scss'

export default () => {
  return (
    <section className="list-cards" aria-labelledby="list-cards-title">
      <div className="container">
        <SectionTop className="popular-top" title="Хиты продаж">
          Колоды, которые чаще всего выбирают и к которым возвращаются —
          проверенные интуицией и опытом.
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
            Универсальная колода, которая <br />
            поможет вам быстро освоить основы раскладов
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
            Колода, исследующая скрытые <br />
            стороны личности и подсознательные процессы
          </Card>
        </div>
      </div>
    </section>
  )
}
