<?php snippet('header') ?>


<main class="relative">

    <?php if ($header = $page->header()->toObject()) : ?>
        <?php snippet('components/header', compact('header')) ?>
    <?php endif ?>

    <section class="sticky top-0 z-20 w-full bg-background" id="content">

        <?php if ($info = $page->info()->toObject()) : ?>
            <section class="grid items-end grid-cols-3 px-arrow pt-4xl" x-data="numbers()">
                <div>
                    <div class="text-h1" data-counter data-count="<?= $info->programs() ?>">&nbsp;</div>
                    Studiengänge
                </div>
                <div class="text-center"><?= $info->type() ?></div>
                <ul class="text-right">
                    <?php foreach ($info->locations()->toPages() as $location) : ?>
                        <li>
                            <a href="<?= $location->url() ?>">
                                <?= $location->title() ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endif ?>

        <section class="py-5xl px-arrow">
            <div class="prose">
                <?= $page->texts() ?>
            </div>
        </section>

        <?php if (($images = $page->gallery()->toFiles())->count()) : ?>
            <?php snippet('components/gallery', compact('images')) ?>
        <?php endif ?>

        <?php if (($jobs = $page->jobs())->isNotEmpty()) : ?>
            <section class="sticky top-0 min-h-screen py-5xl px-arrow">
                <div class="max-w-screen-xl mx-auto" data-fade-in>
                    <div class="text-h3 mb-m">Hier kann ich arbeiten:</div>
                    <div><?= $jobs ?></div>
                </div>
            </section>
        <?php endif ?>

        <?php snippet('components/footer') ?>

    </section>

</main>

<?php snippet('footer') ?>