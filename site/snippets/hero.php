<?php 

$heroImage = $page->hero()->toFile(); 

?>

<div class="hero-section">
    <?php if($heroImage): ?>
        <img src="<?= $heroImage->url() ?>" alt="<?= $heroImage->alt() ?>">
    <?php endif ?>

    <h1 class="heroTitle"><?= $page->heroTitle() ?></h1>
</div>