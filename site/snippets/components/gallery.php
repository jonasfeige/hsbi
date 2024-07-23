<section <?php if($scale ?? true): ?>x-data="gallery()"<?php endif ?>>
    <?php foreach ($images as $image) : ?>
        <figure class="sticky top-0 z-20 w-full h-screen origin-top" <?php e($image === $images->first(), 'data-gallery-first') ?>>
            <div class="relative w-full h-full"></div>
            <?php snippet('components/picture', ['image' => $image, 'styles' => 'absolute inset-0 w-full h-full object-cover']) ?>
        </figure>
    <?php endforeach ?>
</section>