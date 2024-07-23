<?php snippet('header') ?>


<main class="relative">

    <?php if ($header = $page->header()->toObject()) : ?>
        <?php snippet('components/header', compact('header')) ?>
    <?php endif ?>

    <section class="relative z-20 flex flex-col w-full bg-background <?= $hasPaddingBottom ? 'py-3xl' : 'pt-3xl' ?>" id="content">

        <?= $blocks ?>

    </section>

    <?php snippet('components/footer') ?>

</main>

<?php snippet('footer') ?>