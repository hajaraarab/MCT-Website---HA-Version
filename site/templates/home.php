<?php
    $heroImage = $page->hero()->toFile(); 

    $aboutPage = $site->find('about'); 
    $coursesPage = $site->find('courses'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 

    $profiles = $page->profileLinks()->toStructure();
    $courses = $page->yearOverview()->toStructure(); 
    $portfolios = $page->portfolioPreview()->toStructure(); 

    $schoolLogo = $page->schoolLogo()->toFile();
    
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

    <div class="courses-preview">
        <h1><?= $page->coursesOverviewTitle() ?></h1>

        <div class="courses-preview-card">
            <?php foreach($courses as $course): ?>

                <?php $coursePicture = $course->image()->toFile(); ?>
                <?php if($coursePicture): ?>
                    <img src="<?= $coursePicture->url() ?>">
                <?php endif ?>

                <div class="info">
                    <h3><?= $course->title() ?></h3>
                    <p><?= $course->text() ?></p>
                </div>
            
            <?php endforeach ?>
        </div>
    </div>

    <div class="enroll">
        <?php if($schoolLogo): ?>
            <img src="<?= $schoolLogo->url() ?>" >
        <?php endif ?>

        <div class="enroll-info">
            <h2><?= $page->enrollTitle() ?></h2>
            <p><?= $page->enrollText() ?></p>
            <button>Enroll</button>
        </div>
    </div>

    <div class="portfolios-preview">
        <h3><?= $page->portfolioTitle() ?></h3>
        <p><?= $page->portfolioIntro() ?></p>

        <?php foreach($portfolios as $portfolio): ?>
            <div class="portfolio-card">

                <?php $portfolioPicture = $portfolio->image()->toFile(); ?>
                <?php if($portfolioPicture): ?>
                    <img src="<?= $portfolioPicture->url() ?>">
                <?php endif; ?>

                <div class="porfolio-info">
                    <h4><?= $portfolio->portfolioName() ?></h4>
                    <p><?= $portfolio->portfolioInfo() ?></p>
                    <p><?= $portfolio->portfolioAuthor() ?></p>
                </div>
            </div>
        <?php endforeach ?>

        <button>See more</button>
    </div>
</div>

<?php snippet('footer') ?>