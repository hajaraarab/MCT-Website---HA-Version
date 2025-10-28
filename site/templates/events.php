<?php

    $infoDays = $page->infodays()->toStructure();
    $events = $page->events()->toStructure(); 

    $infodayIcon = $page->infoDaysIcon()->toFile();
    
?>

<?php snippet('header') ?>

<div class="events">
    <div class="margin">
        <div class="banner">
            <p class="primary-title"><?= $page->pageTitle() ?></p>
            <p class="primary-text"><?= $page->pageText() ?></p>
        </div>
    </div>
</div>

<div class="container">
    <p><?= $page->infoDaysTitle() ?></p>

    <div class="infodays-cards">
        <?php foreach($infoDays as $infoday): ?>
            <div class="profile-card">

                <div class="icon-circle">
                    <?php if($infodayIcon): ?>
                        <img src="<?= $infodayIcon->url() ?>">
                    <?php endif ?>
                </div>
                
                <p class="title"><?= $infoday->infoday()->toDate('d M Y') ?></p>
                <p class="location"><?= $infoday->infodayLocation() ?></p>

            </div>
        <?php endforeach ?>
    </div>
</div>  

<div class="line"></div>

<div class="container">
    <div class="infodays-image">
        <img src="<?= $page->infodaysImage()->toFile()->url() ?>" alt="<?= $page->infodaysImage()->toFile()->alt() ?>">
    </div>
</div>

<div class="line"></div>

    <div class="events">
        <div class="banner">
            <p class="primary-title"><?= $page->eventsTitle() ?></p>
            <p class="primary-text"><?= $page->eventsText() ?></p>
        </div>
    </div>

<div class="container">
    <p><?= $page->eventsSubtitle() ?></p>
    
    <div class="infodays-cards">
        <?php foreach($events as $event): ?>
            <div class="profile-card">

            <?php $eventIcon = $event->eventImage()->toFile(); ?>

                <div class="icon-circle">
                    <?php if($eventIcon): ?>
                        <img src="<?= $eventIcon->url() ?>">
                    <?php endif ?>
                </div>
                
                <p class="title"><?= $event->eventName() ?></p>
                <p class="location"><?= $event->eventDate()->toDate('d M Y') ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="line"></div>

<div class="container">
    <div class="infodays-image">
        <img src="<?= $page->eventsHeaderImage()->toFile()->url() ?>" alt="<?= $page->eventsHeaderImage()->toFile()->alt() ?>">
    </div>
</div>

<?php snippet('footer') ?>