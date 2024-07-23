<header class="sticky top-0 w-full h-screen overflow-x-hidden text-white bg-black" x-data="header()">
    <div class="relative w-full h-full p-s pb-l">
        <div class="grid w-full h-full place-items-center">
            <h1 class="relative z-10 flex flex-col items-center font-semibold text-center text-h1">
                <div class="opacity-0" data-header-to-left><?= $header->headlineLeft()->or($page->title()) ?></div>
                <div class="opacity-0" data-header-to-right><?= $header->headlineRight() ?></div>
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