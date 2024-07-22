<?php snippet('header') ?>

<div class="grid items-center w-full h-screen max-w-screen-xl grid-cols-2 mx-auto text-h2">
    <a class="flex flex-col gap-3xs" href="<?= page('hsbi')->url() ?>">
        <span class="animate-bounce -mb-xs">
            <span class="self-start inline-block rotate-180"><?= svg('assets/icons/arrow_home.svg') ?></span>
        </span>
        HSBI
    </a>
    <a class="flex flex-col gap-3xs" href="<?= page('studieren')->url() ?>">
        Studieren
        <span class="animate-bounce mt-xs">
            <span class="inline-block">
                <?= svg('assets/icons/arrow_home.svg') ?>
            </span>
        </span>
    </a>
</div>

<?php snippet('footer') ?>