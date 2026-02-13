import SectionTop from '@/layouts/SectionTop'
import './Another.scss'

export default () => {
  return (
    <section className="another" aria-labelledby="article-title">
      <div className="container">
        <SectionTop
          title="Следуй за энергией колоды"
          btn="Вернутся в колоду"
          className="another-top"
        >
          <span className="opa-6">
            Погрузись в мир, где каждая карта хранит свои тайны
          </span>
        </SectionTop>
        <div className="another__w">
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
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
              <tr>
                <td>0</td>
                <td>
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
              <tr>
                <td>0</td>
                <td>
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
              <tr>
                <td>0</td>
                <td>
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
              <tr>
                <td>0</td>
                <td>
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
              <tr>
                <td>0</td>
                <td>
                  <a href="/">Шут</a>
                </td>
                <td>The FooL</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  )
}
