<?php snippet('header') ?>


<main class="relative">

    <?php if ($header = $page->header()->toObject()) : ?>
        <header class="sticky top-0 w-full h-screen overflow-x-hidden bg-background" x-data="header()">
            <div class="relative w-full h-full p-s pb-l">
                <div class="grid w-full h-full place-items-center">
                    <h1 class="relative z-10 flex flex-col items-center font-semibold text-center text-h1">
                        <div data-header-to-left><?= $header->headlineLeft() ?></div>
                        <div data-header-to-right><?= $header->headlineRight() ?></div>
                    </h1>
                </div>
                <?php if ($background = $header->background()->toFile()) : ?>
                    <?php snippet('components/picture', ['image' => $background, 'styles' => 'absolute inset-0 w-full h-full object-cover opacity-85']) ?>
                <?php endif ?>
                <a class="absolute -translate-x-1/2 bottom-s left-1/2 animate-bounce" href="#content">
                    <?= svg('assets/icons/arrow_down.svg') ?>
                </a>
            </div>
        </header>
    <?php endif ?>

    <section class="sticky top-0 z-20 w-full bg-background" id="content">

        <?php if ($info = $page->info()->toObject()) : ?>
            <section class="grid items-end grid-cols-3 px-3xl pt-4xl" x-data="info()">
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

        <section class="py-5xl px-3xl">
            <div class="list">
                <?= $page->texts() ?>
            </div>
        </section>

        <?php if (($images = $page->gallery()->toFiles())->count()) : ?>
            <section x-data="gallery()">
                <?php foreach ($images as $image) : ?>
                    <figure class="sticky top-0 z-20 w-full h-screen origin-top" <?php e($image === $images->first(), 'data-gallery-first') ?>>
                        <div class="relative w-full h-full"></div>
                        <?php snippet('components/picture', ['image' => $image, 'styles' => 'absolute inset-0 w-full h-full object-cover']) ?>
                    </figure>
                <?php endforeach ?>
            </section>
        <?php endif ?>

        <?php if (($jobs = $page->jobs())->isNotEmpty()) : ?>
            <section class="sticky top-0 min-h-screen py-5xl px-3xl">
                <div class="max-w-screen-xl mx-auto" data-fade-in>
                    <div class="text-h3 mb-m">Hier kann ich arbeiten:</div>
                    <div><?= $jobs ?></div>
                </div>
            </section>
        <?php endif ?>

        <section class="sticky top-0 flex flex-col justify-between min-h-screen text-black bg-beige">
            <div class="flex flex-col items-center text-center py-4xl gap-4xl" data-fade-in>
                <div class="max-w-screen-xl mx-auto">
                    Für mehr Informationen besuche <span class="text-h1">hsbi.de</span>
                    oder nimm dir einen Flyer mit. #studiumjetzt
                </div>
                <div>
                    <?= svg('assets/icons/qr_code.svg') ?>
                </div>
            </div>
            <nav class="flex justify-between w-full pb-m px-s">
                <a class="flex items-center gap-s" href="<?= $page->backLinkUrl() ?>" data-transition="fromSubpage">
                    <?= svg('assets/icons/arrow_page_nav.svg') ?>
                    Startseite
                </a>
                <a class="flex items-center gap-s" href="<?= $page->hasNextListed() ? $page->nextListed()->url() : $page->siblings()->first()->url() ?>" data-transition="subpageToSubpage">
                    Weiter
                    <div class="rotate-180"><?= svg('assets/icons/arrow_page_nav.svg') ?></div>
                </a>
            </nav>
        </section>

    </section>

</main>

<?php snippet('footer') ?>