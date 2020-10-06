<?php

return function ($page) {
  $recipeMenuDishes = ['voorgerecht', 'hoofdgerecht', 'nagerecht', 'bijgerecht', 'overig'];
  
  $recipeMenuCategories = ['vlees', 'vis', 'vega', 'zoet', 'pittig', 'mexicaans', 'spaans', 'mediteraans', 'aziatisch'];

  return [
    'recipeMenuDishes' => $recipeMenuDishes,
    'recipeMenuCategories' => $recipeMenuCategories
  ];
}

?>