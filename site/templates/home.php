<?php
    $heroImage = $page->hero()->toFile(); 

    $aboutPage = $site->find('about'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 
?>

<?php snippet('header') ?>

<div class="container">

    <div class="hero-section">
        <?php if($heroImage): ?>
            <img src="<?= $heroImage->url() ?>" alt="<?= $heroImage->alt() ?>">
        <?php endif ?>

        <h1 class="heroTitle"><?= $page->heroTitle() ?></h1>
    </div>

    <div class="about-and-posts">
        <div class="about-preview">
            <h1><?= $aboutPage->title() ?></h1>
            <p><?= $aboutPage->previewText() ?></p>
        </div>
        <div class="lates-posts-preview">
            <h1><?= $latestPostsTitle ?></h1>
            <p><?= $latestPostsText ?></p>

            <button>Follow us</button>

            <div class="instagram-post"></div>
        </div>
    </div>
</div>

<?php snippet('footer') ?>