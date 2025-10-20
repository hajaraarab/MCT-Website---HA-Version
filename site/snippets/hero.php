<?php 

$heroImage = $page->hero()->toFile(); 

?>

<div class="hero-section">
    <?php if($heroImage): ?>
        <img class="hero-image" src="<?= $heroImage->url() ?>" alt="<?= $heroImage->alt() ?>">
    <?php endif ?>

    <p class="primary-title"><?= $page->heroTitle() ?></p>
</div>