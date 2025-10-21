<?php 

    $aboutPage = $site->find('about'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 
    
?>

<div class="about-preview">
    <div class="about-preview-image">
        <img class="about-image" src="<?= $page->image('about-image.jpg')->url() ?>" alt="">
    </div>
    <div class="about-preview-information">
        <p class="primary-title"><?= $aboutPage->title() ?></p>
        <p class="primary-text"><?= $aboutPage->previewText() ?></p>

        <div class="readmore-btn-container">
            <a class="readmore-btn" href="">Read More</a>
        </div>
    </div>
</div>
