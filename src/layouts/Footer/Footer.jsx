import Button from '@/components/Button'
import Logo from '@/components/Logo'
import './Footer.scss'

export default () => {
  return (
    <footer className="footer">
      <div className="container">
        <div className="footer__left">
          <Logo />
          <div className="footer__bottom">
            <div className="footer__col">
              {/* <a href="/" className="footer__link">
                Политика конфиденциальности
              </a> */}
              <span>Все права защищены</span>
            </div>
            <span>2026</span>
          </div>
        </div>
        <div className="footer__center">
          <h5 className="footer__title opa-5">Связаться с нами</h5>
          <div className="footer__menu">
            <ul className="footer__list">
              <li>
                <a href="/" className="footer__contacts">
                  telegram
                </a>
              </li>
              <li>
                <a href="/" className="footer__contacts">
                  whatsapp
                </a>
              </li>
              <li>
                <a href="/" className="footer__contacts">
                  example@gmail.com
                </a>
              </li>
            </ul>
            <div className="footer__action">
              <Button
                href="https://www.wildberries.ru/brands/312174691-ezotouch"
                className="btn btn-marketplace white btn-marketplace-wb header__btn"
                name="wb"
              >
                Купить на
              </Button>
              <Button
                href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1"
                className="btn btn-marketplace white btn-marketplace-ozon header__btn"
                name="ozon"
              >
                Купить на
              </Button>
            </div>
          </div>
        </div>
        <div className="footer__right">
          <h5 className="footer__title opa-5">Навигация</h5>
          <nav className="footer__nav">
            <ul className="footer__list">
              <li className="footer__item">
                <a href="/" className="footer__link">
                  ТАРО
                </a>
              </li>
              <li className="footer__item">
                <a href="/" className="footer__link">
                  МАК
                </a>
              </li>
              <li className="footer__item">
                <a href="/" className="footer__link">
                  О нас
                </a>
              </li>
              <li className="footer__item">
                <a href="/" className="footer__link">
                  Карта дня
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
  )
}
