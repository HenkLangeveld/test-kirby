<?php

return function ($site, $page, $kirby) {

  $shared = $kirby->controller('site' , compact('page', 'kirby'));
  $query   = get('q');
  $results = $site->search($query, 'title|ingredients');
  if($query == '') {
      $query = false;
  }

  $recipes = $page->children()->listed()->flip();
  if($type = param('gerecht')) {
      $recipes = $recipes->filterBy('dish', $type, ',');
  }
  if($cat = param('categorie')) {
      $recipes = $recipes->filterBy('categories', $cat, ',');
  }
  if($query) {
    $recipes = $results;
  }
  
  $pageHeading = $page->heading()->or($page->title());
  if($type = param('gerecht')) {
      $pageHeading = ucwords($type);
  }
  if($cat = param('categorie')) {
      $pageHeading = ucwords($cat);
  }
  if($search = param('?soort')) {
      $pageHeading = ucwords($search);
  }
  if($query) {
      $pageHeading = ucfirst(strtolower($query));
  }

  return a::merge($shared, compact('recipes', 'pageHeading', 'query', 'results'));

}

?>