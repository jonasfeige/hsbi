<?php snippet('header') ?>

<div class="grid items-center w-full h-screen max-w-screen-xl grid-cols-2 mx-auto text-h2">
    <a class="flex flex-col gap-3xs" href="<?= page('hsbi')->url() ?>">
        <div>
            <span class="inline-block rotate-180"><?= svg('assets/icons/arrow_home.svg') ?></span>
        </div>
        HSBI
    </a>
    <a class="flex flex-col gap-3xs" href="<?= page('studieren')->url() ?>">
        Studieren
        <?= svg('assets/icons/arrow_home.svg') ?>
    </a>
</div>

<?php snippet('footer') ?>