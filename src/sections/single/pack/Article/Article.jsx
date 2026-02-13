import { Image } from 'minista'
import './Article.scss'

export default () => {
  return (
    <section className="article" aria-labelledby="article-title">
      <div className="container">
        <div className="article__sidebar sidebar">
          <h4 className="sidebar__title">Содержание</h4>
          <ul className="sidebar__list">
            <li>
              <span>01</span>
              <a className="text-2" href="/#n1">
                Заголовок 1
              </a>
            </li>
            <li>
              <span>02</span>
              <a className="text-2" href="/#n1">
                Заголовок 2
              </a>
            </li>
            <li>
              <span>03</span>
              <a className="text-2" href="/#n1">
                Заголовок 3
              </a>
            </li>
            <li>
              <span>04</span>
              <a className="text-2" href="/#n1">
                Заголовок 4
              </a>
            </li>
          </ul>
        </div>
        <div className="article__main">
          <div className="article__w">
            <h3 className="article__title">Легенда</h3>
            <div className="article__text big-text-m opa-8">
              <p>
                В&nbsp;последние годы спрос на&nbsp;карты Таро резко возрос.
                В&nbsp;условиях кризисов и&nbsp;неопределённости люди хотят
                получить совет, как правильно поступить и&nbsp;какое решение
                принять, чтобы улучшить свою жизнь. В&nbsp;сложном,
                быстроменяющемся мире хочется обрести какой‑то островок
                стабильности, и&nbsp;карты Таро могут им&nbsp;стать.
                Гадание&nbsp;&mdash; отличный способ замедлиться, подумать
                о&nbsp;себе и&nbsp;способах решения накопившихся проблем.
              </p>
              <p>
                Причин популярности Таро очень много, но&nbsp;самая основная
                в&nbsp;том, что карты помогают разобраться в&nbsp;себе.
                С&nbsp;помощью таролога человек задаётся сложными вопросами
                и&nbsp;находит &laquo;корни&raquo; своих проблем, начинает лучше
                понимать близких людей и&nbsp;мотивы их&nbsp;поступков.
              </p>
              <p>
                В&nbsp;этом материале расскажем о&nbsp;значении
                и&nbsp;толковании всех 78&nbsp;карт.
              </p>
            </div>
          </div>
          <div className="article__w">
            <h3 className="article__title h2">старшие арканы</h3>
            <table className="article__table">
              <thead>
                <tr>
                  <th>Порядковый номер карты в&nbsp;колоде</th>
                  <th>Название карты</th>
                  <th>Оригинальное название</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>
                    <a href="/card">Шут</a>
                  </td>
                  <td>The FooL</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div className="article__w">
            <h3 className="article__title h2">Что такое карты Таро</h3>
            <div className="article__text big-text-m opa-8">
              <p>
                Доподлинно неизвестно, когда возникла первая колода карт Таро.
                Упоминания появились в&nbsp;начале XV&nbsp;века.
                Но&nbsp;существует версия, что карты были придуманы
                в&nbsp;Древнем Египте. В&nbsp;настоящее&nbsp;же время это
                система карт, с&nbsp;помощью которых можно получить ответы
                на&nbsp;интересующие вопросы и&nbsp;заглянуть в&nbsp;будущее.
              </p>
            </div>
          </div>
          <div className="article__w">
            <h3 className="article__title h2">
              Положение карты Король Пентаклей
            </h3>
            <div className="article__text big-text-m opa-8">
              <p>
                В&nbsp;Таро очень важное значение имеет не&nbsp;только сама
                карта, но&nbsp;и&nbsp;ее&nbsp;положение
                в&nbsp;раскладе&nbsp;&mdash; прямое или перевернутое.
              </p>
            </div>
          </div>
          <div className="article__w">
            <h3 className="article__title h2">
              Расклад карты Король Пентаклей на отношения и&nbsp;любовь
            </h3>
            <div className="article__text big-text-m opa-8">
              <p>
                Король Пентаклей Таро в&nbsp;отношениях чаще всего обозначает
                мужчину. Это пресловутый принц на&nbsp;белом коне, но&nbsp;уже
                остепенившийся, знающий, чего он&nbsp;хочет от&nbsp;жизни
                и&nbsp;от&nbsp;партнерши.
              </p>
            </div>
          </div>
          <div className="article__w">
            <h3 className="article__title">Прямое положение</h3>
            <div className="article__text big-text-m opa-8">
              <p>
                В&nbsp;прямом положении Король Пентаклей означает скорое
                появление в&nbsp;жизни вопрошающей мужчины-покровителя. Это
                будет заботливый, серьезный, страстный, но&nbsp;сдержанный
                в&nbsp;повседневном общении человек. Такой мужчина ценит
                стабильность и&nbsp;будет требовать от&nbsp;своей избранницы
                верности. При этом властность его натуры может давать
                &laquo;побочный эффект&raquo; в&nbsp;виде проявлений ревности.
              </p>
              <p>
                Для сложившихся пар Король Пентаклей&nbsp;&mdash; признак
                крепких и&nbsp;долгосрочных отношений, когда никто никуда
                не&nbsp;уходит и&nbsp;вряд&nbsp;ли просто так отпустит свою
                половинку. Это налаженный совместный быт, мужчина здесь
                &laquo;голова&raquo; и&nbsp;&laquo;добытчик&raquo;,
                с&nbsp;хорошей потенцией и&nbsp;желанием иметь потомство.
                Он&nbsp;рачительный хозяин и&nbsp;планирует отпуск за&nbsp;пол
                года вперед, содержит семью и&nbsp;ему можно доверить свое
                будущее.
              </p>
              <p>
                Единственный минус такого союза&nbsp;&mdash; недостаток
                романтики.
              </p>
            </div>
          </div>
          <div className="article__w">
            <Image src="/src/assets/images/catalog/Frame 2136140491.png" />
          </div>
          <div className="article__w">
            <h4 className="article__title">Пример карточки</h4>
            <div className="article__card">
              <h4 className="article__heading">
                <span>01</span>Настрой перед раскладом
              </h4>
              <div className="article__cit">
                <p>
                  &mdash;&nbsp;Если мы&nbsp;говорим о&nbsp;запросах
                  к&nbsp;картам Таро, то&nbsp;существуют этические правила
                  тарологов, которыми они руководствуются. Не&nbsp;делать
                  расклады на&nbsp;здоровье человека, мы&nbsp;не&nbsp;врачи,
                  а&nbsp;наоборот, часто настоятельно рекомендуем обратится
                  к&nbsp;доктору, а&nbsp;не&nbsp;искать в&nbsp;картах ответы.
                  Обычно тарологи не&nbsp;делают расклады на&nbsp;вопросы жизни
                  и&nbsp;смерти. Не&nbsp;отвечают на&nbsp;вопросы, связанные
                  со&nbsp;случайностью, такие, как &laquo;выиграю&nbsp;ли
                  я&nbsp;в&nbsp;лотерею&raquo; и&nbsp;так далее.
                </p>
                <p>
                  Если вопрос о&nbsp;том, в&nbsp;каких случаях не&nbsp;стоит
                  садится за&nbsp;карты, то, конечно, если вы&nbsp;устали,
                  болеете или находитесь в&nbsp;негативных эмоциях, в&nbsp;такие
                  периоды гадание лучше отложить.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
