<?php 

    $coursesPage = $site->find('courses'); 
    $courses = $page->yearOverview()->toStructure(); 
    
?>

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