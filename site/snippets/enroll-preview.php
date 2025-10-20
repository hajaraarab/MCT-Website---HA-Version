<?php

     $schoolLogo = $page->schoolLogo()->toFile();

?>

<div class="enroll">
    <?php if($schoolLogo): ?>
        <img src="<?= $schoolLogo->url() ?>" >
    <?php endif ?>

    <div class="enroll-info">
        <p class="secondary-title"><?= $page->enrollTitle() ?></p>
        <p class="main-text"><?= $page->enrollText() ?></p>
    </div>

    <button class="secondary-btn">Enroll</button>
</div>