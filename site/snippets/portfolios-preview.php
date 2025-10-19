<?php 

     $portfolios = $page->portfolioPreview()->toStructure(); 
     
?>

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