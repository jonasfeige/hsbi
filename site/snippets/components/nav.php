<?php

$hsbi = page('hsbi');
$programs = page('studieren');

?>

<nav x-data x-show="$store.page.visible">
    <div class="grid items-center w-full h-screen max-w-screen-xl grid-cols-2 mx-auto text-h2 bg-background text-foreground">
        <button class="flex flex-col gap-3xs" @click="$store.page.activeSubpage = '<?= $hsbi->slug() ?>'">
            <span class="inline-block rotate-180"><?= svg('assets/icons/arrow_home.svg') ?></span>
            HSBI
        </button>
        <button class="flex flex-col gap-3xs" @click="$store.page.activeSubpage = '<?= $programs->slug() ?>'">
            Studieren
            <?= svg('assets/icons/arrow_home.svg') ?>
        </button>
    </div>

    <?php snippet('components/wheel', ['parent' => $hsbi]) ?>
    <?php snippet('components/wheel', ['parent' => $programs]) ?>
</nav>