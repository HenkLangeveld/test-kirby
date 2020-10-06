class GoBack {
  constructor() {
    this.button = document.querySelector('.button--back')
    this.events()
  }
  events() {
    if(this.button) {
      this.button.addEventListener("click", () => {history.back();});
    }
  }
}

export default GoBack;