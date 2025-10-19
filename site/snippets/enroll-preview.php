<?php

     $schoolLogo = $page->schoolLogo()->toFile();

?>

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