import Button from '@/components/Button'
import Field from '@/components/Field'
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
              <a href="/" className="footer__link">
                Политика конфиденциальности
              </a>
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
                className="btn btn-marketplace white btn-marketplace-wb header__btn"
                name="wb"
              >
                Купить на
              </Button>
              <Button
                className="btn btn-marketplace white btn-marketplace-ozon header__btn"
                name="ozon"
              >
                Купить на
              </Button>
            </div>
          </div>
        </div>
        <div className="footer__right">
          <form className="footer__form" data-js-telegram-form>
            <div className="footer__fields">
              <Field
                className="footer__input"
                name="firstName"
                type="input"
                placeholder="Анастасия"
                isRequired
                inputMode="text"
              ></Field>
              <Field
                className="footer__input"
                name="phoneNumber"
                placeholder="+7 (999) 999-99-99"
                inputMode="tel"
                mask="+7 (000) 000-00-00"
                isRequired
              ></Field>
              <Field
                className="footer__input"
                name="textArea"
                placeholder="Напишите послание"
                inputMode="text"
                type="textarea"
                isRequired
              ></Field>
            </div>
            <Button
              type="submit"
              className="btn-primary btn-submit footer__submit"
            >
              Отправить послание
            </Button>
          </form>
        </div>
      </div>
    </footer>
  )
}
