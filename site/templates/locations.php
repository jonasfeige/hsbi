<?php snippet('header') ?>


<main class="relative">

    <?php if ($header = $page->header()->toObject()) : ?>
        <?php snippet('components/header', compact('header')) ?>
    <?php endif ?>

    <section class="relative z-20 flex flex-col w-full bg-background gap-6xl pt-5xl pb-6xl" id="content">

        <?php foreach ($page->children()->listed() as $location) : ?>
            <?php $entries = $location->entries()->toStructure() ?>
            <section class="grid grid-cols-10 px-arrow gap-xl" x-data="location()">
                <div class="sticky top-0 self-start col-span-4">
                    <h2>
                        <div class="text-h1"><?= $location->title() ?></div>
                        &nbsp;
                    </h2>
                    <div class="relative mt-3xl">
                        <?php $i = 1 ?>
                        <?php foreach ($entries as $entry) : ?>
                            <?php if ($image = $entry->image()->toFile()) : ?>
                                <figure class="transition-opacity duration-500 ease-in-out" :class="activeEntry == <?= $i ?> ? '' : 'opacity-0'">
                                    <?php if ($entry == $entries->first()) : ?>
                                        <?php snippet('components/picture', ['image' => $image, 'preset' => 'thumbnail']) ?>
                                    <?php else : ?>
                                        <?php snippet('components/picture', ['image' => $image, 'preset' => 'thumbnail', 'styles' => 'absolute top-0 left-0']) ?>
                                    <?php endif ?>
                                </figure>
                            <?php endif ?>
                            <?php $i++ ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="text-right" x-data="numbers()">
                        <div data-counter data-count="<?= $location->students() ?>" class="text-h1"><?= $location->students() ?>&nbsp;</div>
                        <div>Studierende</div>
                    </div>
                    <div class="mt-3xl">
                        <?php $i = 1 ?>
                        <?php foreach ($location->entries()->toStructure() as $entry) : ?>
                            <div data-location-entry="<?= $i ?>">
                                <h2 class="text-h3 mb-l"><?= $entry->headline() ?></h2>
                                <div class="prose">
                                    <?= $entry->texts() ?>
                                </div>
                            </div>
                            <?php $i++ ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
        <?php endforeach ?>

    </section>

    <?php snippet('components/footer') ?>

</main>

<?php snippet('footer') ?>