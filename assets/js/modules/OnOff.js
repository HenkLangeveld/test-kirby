class OnOffButton {
  constructor() {
    this.buttons = document.querySelectorAll('.cook-mode__button')
    this.on = document.querySelector('.cook-mode__button--on')
    this.off = document.querySelector('.cook-mode__button--off')
    this.events()
  }
  events() {
    this.buttons.forEach(el => el.addEventListener("click", () => this.toggleButton()))
  }

  toggleButton() {
    this.on.classList.toggle("cook-mode__button--on-is-active");
    this.off.classList.toggle("cook-mode__button--off-is-active");
  }
}

export default OnOffButton;