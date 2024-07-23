<?php

$i = 1;

?>

<section class="grid grid-cols-3 px-arrow py-xl" x-data="numbers()" data-block-type="<?= $block->type() ?>">
    <?php foreach ($block->numbers()->toStructure() as $entry) : ?>
        <?php if ($number = $entry->number()->toObject()) : ?>
            <article class="<?php e($i === 2, 'text-center') ?><?php e($i === 3, 'text-right') ?>">
                <div class="text-h1" data-counter data-count="<?= $number->number()->value() ?>">&nbsp;</div>
                <?= $number->label() ?>
            </article>
        <?php endif ?>
        <?php $i++ ?>
    <?php endforeach ?>
</section>