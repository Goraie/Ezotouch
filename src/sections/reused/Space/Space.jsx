import Button from '@/components/Button'
import { Image } from 'minista'
import './Space.scss'

export default () => {
  return (
    <section className="space">
      <div className="space__w">
        <div className="container">
          <div className="space__path"></div>

          <div className="space__list">
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-1.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-2.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-3.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-4.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-5.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-6.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-7.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-8.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-9.png" />
            </div>
            <div className="space__card">
              <Image src="/src/assets/images/homepage/space-card-10.png" />
            </div>
          </div>

          <div className="space__cont">
            <div className="space__cont-circ"></div>
            <h2>Найдите свой мир во&nbsp;вселенной EZOTOUCH</h2>
            <div className="space__mid">
              <div className="space__text big-text-m">
                <p>
                  Ezotouch — это команда людей, которые создают визуальные
                  вселенные.
                </p>
                <p>
                  Мы работаем с Таро и метафорическими картами, как с живым
                  языком образов и смыслов. Каждая колода для нас — это
                  отдельная реальность, собранная с вниманием к мельчайшим
                  деталям: свету, символам, композиции, настроению.
                </p>
              </div>
              <div className="space__text opa-7 text-1">
                <p>
                  Мы продумываем не только внешний образ карт, но и их
                  внутреннюю логику, создаём легенды и трактовки.
                </p>
                <p>
                  Наши колоды остаются с человеком надолго: к ним возвращаются,
                  их перечитывают, с ними работают в моменты тревоги, поиска и
                  тишины. Они помогают упорядочить мысли, услышать себя,
                  успокоиться и найти ответы внутри, а не снаружи
                </p>
              </div>
            </div>
            <div className="space__action">
              <Button className="btn-primary space__btn">
                Перейти в Библиотеку Таро
              </Button>
              <Button className="space__btn">Перейти в библиотеку МАК</Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
