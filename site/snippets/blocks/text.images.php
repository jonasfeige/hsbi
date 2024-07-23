<section class="px-arrow" data-block-type="<?= $block->type() ?>">
    <?php foreach ($block->entries()->toStructure() as $entry) : ?>
        <div class="grid grid-cols-3 gap-xl">
            <?php if ($image = $entry->image()->toFile()) : ?>
                <?php snippet('components/picture', ['image' => $image]) ?>
            <?php endif ?>
            <article class="col-span-2 prose">
                <?= $entry->text() ?>
            </article>
        </div>
    <?php endforeach ?>
</section>