class OverlayMenu {
  selectors = {
    root: '[data-js-overlay-menu]',
    dialog: '[data-js-overlay-menu-dialog]',
    burgerButton: '[data-js-overlay-menu-burger-button]',
  }

  stateClasses = {
    isActive: 'is-active',
    isLock: 'is-lock',
  }

  constructor() {
    this.rootElement = document.querySelector(this.selectors.root)
    if (!this.rootElement) {
      return
    }
    this.dialogElement = this.rootElement.querySelector(this.selectors.dialog)
    this.burgerButtonElement = this.rootElement.querySelectorAll(
      this.selectors.burgerButton
    )

    this.burgerButtonElement.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        this.dialogElement.classList.toggle(this.stateClasses.isActive)

        document.documentElement.classList.toggle(this.stateClasses.isLock)
      })
    })

    this.dialogElement.addEventListener('click', (e) => {
      if (e.target === this.dialogElement) {
        this.dialogElement.classList.remove(this.stateClasses.isActive)

        document.documentElement.classList.remove(this.stateClasses.isLock)
      }
    })
  }
}

export default OverlayMenu
