<?php 

    $coursesPage = $site->find('courses'); 
    $courses = $page->yearOverview()->toStructure(); 
    
?>

<div class="courses-preview">
    <p class="primary-title"><?= $page->coursesOverviewTitle() ?></p>

    <div class="courses-preview-cards">
        <?php foreach($courses as $course): ?>

            <div class="courses-preview-card">
                <?php $coursePicture = $course->image()->toFile(); ?>
                <?php if($coursePicture): ?>
                    <img class="profile-picture" src="<?= $coursePicture->url() ?>">
                <?php endif ?>

                <div class="info">
                    <p class="tertiary-title"><?= $course->title() ?></p>
                    <p class="main-text"><?= $course->text() ?></p>
                </div>
            </div>
        
        <?php endforeach ?>
    </div>
</div>