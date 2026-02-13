import BurgerButton from '@/components/BurgerButton'
import Button from '@/components/Button'
import Logo from '@/components/Logo'
import clsx from 'clsx'
import './Header.scss'

export default (props) => {
  const { url } = props

  const menuItems = [
    {
      label: 'ТАРО',
      href: '/catalog-taro',
    },
    {
      label: 'МАК',
      href: '/catalog-mak',
    },
    {
      label: 'О нас',
      href: '/',
    },
    {
      label: 'Карта дня',
      href: '/',
    },
  ]

  return (
    <header className="header" data-js-overlay-menu="">
      <div className="header__container container">
        <nav className="header__menu">
          <ul className="header__menu-list">
            {menuItems.map(({ label, href }, index) => (
              <li className="header__menu-item" key={index}>
                <a
                  className={clsx(
                    'header__menu-link',
                    href === url && 'is-active'
                  )}
                  href={href}
                >
                  {label}
                </a>
              </li>
            ))}
          </ul>
        </nav>

        <Logo className="header__logo" loading="eager" />

        <div className="header__action">
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

        <BurgerButton
          className="header__burger"
          extraAttrs={{
            'data-js-overlay-menu-burger-button': '',
          }}
        />
      </div>
      <div className="header-menu" data-js-overlay-menu-dialog>
        <div className="header-menu__popup">
          <BurgerButton
            className="header-menu__burger is-active"
            extraAttrs={{
              'data-js-overlay-menu-burger-button': '',
            }}
          />
          <ul className="header-menu__list">
            {menuItems.map(({ label, href }, index) => (
              <li className="header-menu__item" key={index}>
                <a
                  className={clsx(
                    'header-menu__link big-text-m',
                    href === url && 'is-active'
                  )}
                  href={href}
                >
                  {label}
                </a>
              </li>
            ))}
          </ul>
          <div className="header-menu__action">
            <Button
              className="btn btn-marketplace white btn-marketplace-wb header-menu__btn header__btn"
              name="wb"
            >
              Купить на
            </Button>
            <Button
              className="btn btn-marketplace white btn-marketplace-ozon header-menu__btn header__btn"
              name="ozon"
            >
              Купить на
            </Button>
          </div>
        </div>
      </div>
    </header>
  )
}
