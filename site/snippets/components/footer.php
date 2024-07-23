<section class="sticky top-0 flex flex-col justify-between min-h-screen text-background bg-foreground">
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
        <a class="flex items-center gap-s" href="<?= $site->url() ?>" data-transition="fromSubpage">
            <?= svg('assets/icons/arrow_page_nav.svg') ?>
            Startseite
        </a>
        <a class="flex items-center gap-s" href="<?= $page->hasNextListed() ? $page->nextListed()->url() : $page->siblings()->first()->url() ?>" data-transition="subpageToSubpage">
            Weiter
            <div class="rotate-180"><?= svg('assets/icons/arrow_page_nav.svg') ?></div>
        </a>
    </nav>
</section>