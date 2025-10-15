<?php
    $heroImage = $page->image($page->hero()); 
?>

<?php snippet('header') ?>

<div class="container">

    <div class="herosection">
        <?php if($heroImage): ?>
            <img src="<?= $heroImage->url() ?>" alt="<?= $heroImage->alt() ?>">
        <?php endif ?>
    </div>
</div>

<?php snippet('footer') ?>