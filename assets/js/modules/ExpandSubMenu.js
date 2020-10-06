class ExpandSubMenu {
  constructor() {
    this.recipeButton = document.querySelector('.expand-recipe-icon')
    this.writingsButton = document.querySelector('.expand-writings-icon')
    this.events()
  }
  events() {
    if(this.recipeButton) {
      this.recipeButton.addEventListener("click", () => this.toggleRecipeSubMenu())
    }
    if(this.writingsButton) {
      this.writingsButton.addEventListener("click", () => this.toggleWritingSubMenu())
    }
  }

  toggleRecipeSubMenu() {
    this.recipeButton.parentNode.nextElementSibling.classList.toggle("show-recipe-submenu-container");
    let children = this.recipeButton.parentNode.nextElementSibling.children;
    for (let i = 0; i < children.length; i++) {
      children[i].classList.toggle("show-submenu")
    }
  }

  toggleWritingSubMenu() {
    this.writingsButton.parentNode.nextElementSibling.classList.toggle("show-submenu")
  }

}

export default ExpandSubMenu;