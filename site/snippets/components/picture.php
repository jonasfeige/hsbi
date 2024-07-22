<?php 


$lazy = $lazy ?? false;

?>

<picture>
    <source srcset="<?= $image->srcset(buildSrcset(['preset' => $preset ?? $image->getOrientation(), 'format' => 'webp'])) ?>" type="image/webp">
    <source srcset="<?= $image->srcset(buildSrcset(['preset' => $preset ?? $image->getOrientation(), 'format' => 'jpeg'])) ?>" type="image/jpeg">
    <img class="<?= $styles ?? '' ?>" width="<?= $image->width() ?>" height="<?= $image->height() ?>" src="<?= $image->resize(960, null, 90)->url()?>" alt="<?= $image->alt()->or($image->parent()->title()) ?>"<?php if($lazy): ?> loading="lazy"<?php endif ?>>
</picture>