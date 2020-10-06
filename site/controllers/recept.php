<?php

return function ($page, $site, $kirby) {

    $shared = $kirby->controller('site' , compact('page', 'kirby'));
    if($page->image()) {
        $image = $page->image();
    } else {
        $image = $site->image();
    }

  return a::merge($shared, compact('image'));
}

?>