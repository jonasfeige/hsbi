<a href="<?= $url ?>" class="fixed top-0 left-0 z-40 p-s opacity-0 mix-blend-difference <?php e($page->isHomePage(), '-translate-y-full') ?>" x-data id="back-link">
    <?= svg('assets/icons/arrow_back.svg') ?>
    <div class="sr-only">Zurück</div>
</a>

<button class="fixed top-0 left-0 z-40 hidden p-s mix-blend-difference" x-data @click="$dispatch('closefaculty')" id="faculties-back-link">
    <?= svg('assets/icons/arrow_back.svg') ?>
    <div class="sr-only">Zurück</div>
</button>