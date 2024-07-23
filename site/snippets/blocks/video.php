<?php

use Kirby\Cms\Html;

if (
    $video = $block->video()->toFile()
) {
    $url   = $video->url();
    $attrs = array_filter([
        'class' => 'w-full',
        'autoplay' => $block->autoplay()->toBool(),
        'controls' => $block->controls()->toBool(),
        'loop'     => $block->loop()->toBool(),
        'muted'    => $block->muted()->toBool(),
        'poster'   => $block->poster()->toFile()?->url(),
        'preload'  => $block->preload()->value(),
    ]);
}
?>
<?php if ($video = Html::video($url, [], $attrs ?? [])) : ?>
    <section data-block-type="<?= $block->type() ?>">
        <figure class="w-full">
            <?= $video ?>
        </figure>
    </section>
<?php endif ?>