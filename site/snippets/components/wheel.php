<main class="relative w-full h-screen bg-background text-h2" x-data="wheel('<?= $page->slug() ?>')" style="--slide: 15%;">
    <div class="absolute top-0 left-0 z-30 w-full pointer-events-none h-6xl bg-gradient-to-b from-background to-transparent"></div>
    <div class="absolute bottom-0 left-0 z-30 w-full opacity-50 pointer-events-none h-6xl bg-gradient-to-t from-background to-transparent"></div>
    <a class="absolute left-0 z-10 flex justify-end w-full -translate-y-1/2 pointer-events-none px-xl top-1/2 h-slide <?= $mode == 'dark' ? 'bg-foreground' : 'bg-background' ?> mix-blend-difference">
        <div class="h-full aspect-square py-3xs" :class="scrolling ? 'opacity-50' : ''">
            <?= svg('assets/icons/arrow_nav.svg') ?>
        </div>
    </a>
    <div class="w-full h-full embla" :class="grabbing ? 'cursor-grabbing' : 'cursor-pointer'">
        <ul class="w-full h-full select-none embla__container">
            <?php $i = 0 ?>
            <?php foreach ($items as $item) : ?>
                <li class="embla__slide" data-title="<?= $item->title() ?>" data-url="<?= $item->url() ?>" @click="goToSlide(<?= $i ?>)">
                    <a href="<?= $item->url() ?>" class="block w-full h-full whitespace-nowrap py-s px-2xl" :class="activeSlideIndex == <?= $i ?> ? 'bg-[red]' : 'pointer-events-none'" data-transition="toSubpage">
                        <?= $item->title() ?>
                    </a>
                </li>
                <?php $i++ ?>
            <?php endforeach ?>
            <?php foreach ($items as $item) : ?>
                <li class="embla__slide" data-title="<?= $item->title() ?>" data-url="<?= $item->url() ?>" @click="goToSlide(<?= $i ?>)">
                    <a href="<?= $item->url() ?>" class="block w-full h-full whitespace-nowrap py-s px-2xl" :class="activeSlideIndex == <?= $i ?> ? 'bg-[red]' : 'pointer-events-none'" data-transition="toSubpage">
                        <?= $item->title() ?>
                    </a>
                </li>
                <?php $i++ ?>
            <?php endforeach ?>
        </ul>
    </div>
</main>