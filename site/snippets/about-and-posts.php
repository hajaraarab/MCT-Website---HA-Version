<?php 

    $aboutPage = $site->find('about'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 
    
?>

<div class="about-and-posts">
    <div class="about-preview">
        <p class="primary-title"><?= $aboutPage->title() ?></p>
        <p class="primary-text"><?= $aboutPage->previewText() ?></p>
    </div>
    <div class="lates-posts-preview">
        <p class="primary-title"><?= $latestPostsTitle ?></p>
        <p class="primary-text" ><?= $latestPostsText ?></p>

        <button class="primary-btn">Follow us</button>
    </div>
</div>