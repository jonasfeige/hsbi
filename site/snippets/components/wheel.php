<div class="fixed inset-0 transition-transform duration-300 opacity-0 pointer-events-none w-full h-screen text-h2 <?= $parent->mode() ?>-mode" x-data="wheel('<?= $parent->slug() ?>')" style="--slide: 15%;" :class="$store.page.activeSubpage == '<?= $parent->slug() ?>' ? '' : '<?= $parent->slug() == 'hsbi' ? '-translate-y-full' : 'translate-y-full' ?>'">
    <div class="relative w-full h-full bg-background text-foreground">
        <div class="absolute top-0 left-0 z-30 w-full pointer-events-none h-6xl bg-gradient-to-b from-background to-transparent"></div>
        <div class="absolute bottom-0 left-0 z-30 w-full opacity-50 pointer-events-none h-6xl bg-gradient-to-t from-background to-transparent"></div>
        <a class="absolute left-0 z-10 flex justify-end w-full -translate-y-1/2 pointer-events-none px-xl top-1/2 h-slide <?= $parent->mode() == 'dark' ? 'bg-foreground' : 'bg-background' ?> mix-blend-difference">
            <div class="h-full aspect-square py-3xs" :class="scrolling ? 'opacity-50' : ''">
                <?= svg('assets/icons/arrow_nav.svg') ?>
            </div>
        </a>
        <div class="w-full h-full embla" :class="grabbing ? 'cursor-grabbing' : 'cursor-pointer'">
            <ul class="w-full h-full select-none embla__container">
                <?php $i = 0 ?>
                <?php foreach ($parent->children()->listed() as $item) : ?>
                    <li class="embla__slide" data-title="<?= $item->title() ?>" data-url="<?= $item->url() ?>" @click="goToSlide(<?= $i ?>)">
                        <a href="<?= $item->url() ?>" class="block w-full h-full whitespace-nowrap py-s px-2xl" :class="activeSlideIndex == <?= $i ?> ? 'bg-[red]' : 'pointer-events-none'" data-transition="toSubpage">
                            <?= $item->title() ?>
                        </a>
                    </li>
                    <?php $i++ ?>
                <?php endforeach ?>
                <?php foreach ($parent->children()->listed() as $item) : ?>
                    <li class="embla__slide" data-title="<?= $item->title() ?>" data-url="<?= $item->url() ?>" @click="goToSlide(<?= $i ?>)">
                        <a href="<?= $item->url() ?>" class="block w-full h-full whitespace-nowrap py-s px-2xl" :class="activeSlideIndex == <?= $i ?> ? 'bg-[red]' : 'pointer-events-none'" data-transition="toSubpage">
                            <?= $item->title() ?>
                        </a>
                    </li>
                    <?php $i++ ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>