<?php snippet('header') ?>


<main class="relative">

    <?php if ($header = $page->header()->toObject()) : ?>
        <?php snippet('components/header', compact('header')) ?>
    <?php endif ?>

    <section class="relative z-20 flex flex-col w-full select-none bg-background" id="content">

        <?php foreach ($page->children()->listed() as $faculty) : ?>
            <article class="relative w-full h-screen overflow-x-hidden text-background snap-start" x-data="faculty()" id="<?= $faculty->slug() ?>">
                <div class="relative z-10 grid w-full h-full overflow-x-hidden place-items-center">
                    <a href="<?= $faculty->url() ?>" data-transition="toFaculty">
                        <h2 class="font-bold text-center text-h1"><?= $faculty->title() ?></h2>
                    </a>
                </div>
                <?php if ($background = $faculty->background()->toFile()) : ?>
                    <?php snippet('components/picture', ['image' => $background, 'styles' => 'absolute inset-0 w-full h-full object-cover']) ?>
                <?php endif ?>
                <div class="absolute top-0 right-0 z-30 h-full w-full translate-x-[90%] bg-black" data-faculty-trigger></div>
                <div class="absolute top-0 left-0 z-40 w-full h-full translate-x-full">
                    <div class="relative w-full h-full overflow-y-scroll bg-foreground px-arrow py-3xl" data-faculty-content>
                        <div class="opacity-50 pointer-events-none blur-lg">
                            <?= $faculty->text() ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
    </section>

    <?php snippet('components/footer') ?>

</main>

<?php snippet('footer') ?>