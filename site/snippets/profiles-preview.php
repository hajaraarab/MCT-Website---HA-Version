<?php

    $profiles = $page->profileLinks()->toStructure();
    
?>

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