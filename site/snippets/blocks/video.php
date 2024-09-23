<?php

use Kirby\Cms\Html;

if (
    $video = $block->video()->toFile()
) {
    $url   = $video->url();
    $attrs = array_filter([
        'class' => 'w-full',
        // 'autoplay' => $block->autoplay()->toBool(),
        'controls' => $block->controls()->toBool(),
        'loop'     => $block->loop()->toBool(),
        'muted'    => $block->muted()->toBool(),
        'x-ref'    => 'video',
        'poster'   => $block->poster()->toFile()?->resize(1920)->url(),
        // 'preload'  => $block->preload()->value(),
    ]);
}
?>
<?php if ($video = Html::video($url, [], $attrs ?? [])) : ?>
    <section>
        <figure class="relative w-full" x-data="video()">
            <div class="pointer-events-none">
                <span :class="isPaused ? 'opacity-50' : 'opacity-0'" class="absolute inset-0 w-full h-full bg-black"></span>
                <span :class="isPaused ? '' : 'opacity-0'" class="absolute inset-0 z-10 grid w-full h-full place-items-center">
                    <span class="w-3xl"><?= svg('assets/icons/play.svg') ?></span>
                </span>
            </div>
            <?= $video ?>
        </figure>
    </section>
<?php endif ?>