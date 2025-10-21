<?php

     $schoolLogo = $page->schoolLogo()->toFile();

?>

<div class="enroll">
    <div class="banner">
        <?php if($schoolLogo): ?>
            <img src="<?= $schoolLogo->url() ?>" >
        <?php endif ?>

        <div class="banner-info">
            <p class="secondary-title"><?= $page->enrollTitle() ?></p>
            <p class="main-text"><?= $page->enrollText() ?></p>
        </div>

        <button class="secondary-btn">Enroll</button>
    </div>
</div>