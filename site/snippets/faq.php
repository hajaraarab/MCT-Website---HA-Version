<?php

    $homePage = page('home'); 
?>

<div class="faq">
    <p class="primary-title"><?= $homePage->faqTitle() ?></p>

    <?php foreach($homePage->accordion()->toStructure() as $item): ?>
        <details>
            <summary>
                <p class="main-text">
                    <?= $item->question() ?>
                </p>
            </summary>
            <p class="answer-text"><?= $item->anwser() ?></p>
        </details>
    <?php endforeach ?>
</div>

