<?php 

    $blocks = $page->yearSummary()->toBlocks(); 

    $programDetailsImage = $page->programImage()->toFile(); 

?>

<?php snippet('header') ?>

<?php snippet('hero') ?>

<div class="container">

    <?php snippet('about-this-course') ?>

</div>

<?php snippet('about-banner') ?>

<div class="container">
    <div class="program-details">
        <div class="info">
            <?php foreach($page->yearSummary()->toBlocks() as $block): ?>
                <div class="block" data-type="<?= $block->type() ?>">
                    <?php if ($block->type() === 'heading' || $block->type() === 'text'): ?>
                        <?php if ($block->text()->isNotEmpty()): ?>
                            <?php if ($block->type() === 'heading'): ?>

                                <p class="primary-title"><?= $block->text() ?></p>

                            <?php else: ?>

                                <p class="primary-text"><?= $block->text() ?></p>

                            <?php endif ?>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="image">

            <?php if($programDetailsImage): ?>
                <img src="<?= $programDetailsImage->url() ?>" alt="<?= $programDetailsImage->alt() ?>">
            <?php endif ?>

        </div>
    </div>
</div>

<?php snippet('faq') ?>
<?php snippet('footer') ?>