<?php snippet('header') ?>

<main class="relative" x-data="faculties()" @closefaculty.window="openFaculty = null">

    <?php if ($header = $page->header()->toObject()) : ?>
        <?php snippet('components/header', compact('header')) ?>
    <?php endif ?>

    <section class="relative flex flex-col w-full select-none bg-background" id="content">

        <?php foreach ($page->children()->listed() as $faculty) : ?>
            <article class="sticky top-0 w-full h-screen overflow-x-hidden text-background snap-start" x-data="faculty('<?= $faculty->slug() ?>')" id="<?= $faculty->slug() ?>">
                <div class="relative z-10 grid w-full h-full overflow-x-hidden place-items-center">
                    <h2 class="font-bold text-center text-h1"><?= $faculty->title() ?></h2>
                </div>
                <?php if ($background = $faculty->background()->toFile()) : ?>
                    <?php snippet('components/picture', ['image' => $background, 'styles' => 'absolute inset-0 w-full h-full object-cover']) ?>
                <?php endif ?>
                <div class="absolute top-0 left-0 z-10 w-full h-full translate-x-full">
                    <div class="relative w-full h-full transition-transform duration-500 ease-in-out bg-foreground" data-faculty-content :class="openFaculty == '<?= $faculty->slug() ?>' ? '-translate-x-full' : ''">
                        <button class="absolute top-0 left-0 z-10 h-full -translate-x-faculty w-xl">
                            <div class="relative w-full h-full bg-foreground">
                                <div class="absolute top-0 left-0 h-full -translate-x-faculty text-foreground"><?= svg('assets/icons/triangle.svg') ?></div>
                                <div class="absolute top-0 left-0 grid w-full h-full place-items-center">
                                    <div class="rotate-180 -translate-x-l" style="writing-mode: tb-rl;">Mehr lesen</div>
                                </div>
                            </div>
                        </button>
                        <div class="relative w-full h-full overflow-y-scroll transition py-3xl scrollbar-hide" :class="openFaculty == '<?= $faculty->slug() ?>' ? '' : 'opacity-50 blur-sm'">
                            <div class="fixed -translate-y-1/2 right-xs whitespace-nowrap top-1/2" style="writing-mode: tb-rl;"><?= $faculty->title() ?></div>
                            <div class="prose px-arrow">
                                <?= $faculty->text() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
    </section>

    <?php snippet('components/footer') ?>

</main>

<?php snippet('footer') ?>