<?php
    $heroImage = $page->hero()->toFile(); 

    $aboutPage = $site->find('about'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 

    $profiles = $page->profileLinks()->toStructure();
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

    <div class="profiles-preview">
        <div class="profile-links">
            
            <?php foreach($profiles as $profile): ?>
                <div class="profile-card">

                        <?php $icon = $profile->icon()->toFile(); ?>

                        <div class="icon-circle">
                            <?php if($icon): ?>
                                <img src="<?= $icon->url() ?>">
                            <?php endif ?>
                        </div>
                        <p class="title"><?= $profile->title() ?></p>
                        <a class="link" href="<?= $profile->link() ?>">See more</a>

                </div>

            <?php endforeach ?>

        </div>
        <div class="profiles-overview">
            <h1><?= $page->profileInfo() ?></h1>
            <p><?= $page->profileInfoText() ?></p>
        </div>
    </div>

</div>

<?php snippet('footer') ?>