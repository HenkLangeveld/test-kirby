class MobileMenu {
  constructor() {
    this.menuIcon = document.querySelector(".mobile-menu-icon")
    this.menuContent = document.querySelector(".main-menu")
    this.events()
  }

  events() {
    this.menuIcon.addEventListener("click", () => this.toggleTheMenu())
  }

  toggleTheMenu() {
    this.menuContent.classList.toggle("main-menu--is-visible")
    this.menuIcon.classList.toggle("mobile-menu-icon--close-x")
  }
}

export default MobileMenu