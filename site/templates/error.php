<?php snippet('layout.default', slots: true) ?>

    <?php slot('default') ?>
    <?= $page->text() ?>
    <?php endslot() ?>

<?php endsnippet() ?>