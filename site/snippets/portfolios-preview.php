<?php 

     $portfolios = $page->portfolioPreview()->toStructure(); 
     
?>

<div class="portfolios-preview">
    <p class="primary-title"><?= $page->portfolioTitle() ?></p>
    <p class="primary-text"><?= $page->portfolioIntro() ?></p>

    <div class="portfolio-cards">
        <?php foreach($portfolios as $portfolio): ?>
            <div class="portfolio-card">

                <?php $portfolioPicture = $portfolio->image()->toFile(); ?>
                <?php if($portfolioPicture): ?>
                    <img src="<?= $portfolioPicture->url() ?>">
                <?php endif; ?>

                <div class="porfolio-info">
                    <p class="tertiary-title"><?= $portfolio->portfolioName() ?></p>
                    <p class="main-text"><?= $portfolio->portfolioInfo() ?></p>
                    <p class="name"><?= $portfolio->portfolioAuthor() ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <button class="primary-btn">See more</button>
</div>