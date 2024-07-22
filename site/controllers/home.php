<?php

return function ($page, $pages, $site, $kirby) {

    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));

    // return A::merge($shared, compact(''));
    return;
};