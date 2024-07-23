<section data-block-type="<?= $block->type() ?>">
    <?php snippet('components/gallery', ['images' => $block->gallery()->toFiles(), 'scale' => $block->scale()->toBool()]) ?>
</section>