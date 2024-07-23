<?php

return function ($page) {

    $blocks = $page->blocks()->toBlocks();
    $hasPaddingBottom = !in_array($blocks->last()?->type(), ['gallery', 'video']);

    return compact('blocks', 'hasPaddingBottom');
};