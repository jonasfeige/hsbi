<?php snippet('header') ?>

<?php snippet('components/wheel', ['items' => $page->children()->listed(), 'mode' => $page->mode()]) ?>

<?php snippet('footer') ?>