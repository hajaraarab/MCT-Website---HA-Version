<?php 

    $aboutPage = $site->find('about'); 

    $latestPostsTitle = $page->latestPostsTitle(); 
    $latestPostsText = $page->latestPostsText(); 
    
?>

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