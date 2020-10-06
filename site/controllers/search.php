<?php

return function ($site) {

  $query   = get('q');
  $results = $site->search($query, 'title|ingredients');

  return [
    'query'   => $query,
    'results' => $results,
  ];

};