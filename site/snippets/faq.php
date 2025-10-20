<div class="faq">
    <p class="primary-title"><?= $page->faqTitle() ?></p>

    <?php foreach($page->accordion()->toStructure() as $item): ?>
        <details>
            <summary>
                <p class="menu-text">
                    <?= $item->question() ?>
                </p>
            </summary>
            <p class="anwser-text"><?= $item->anwser() ?></p>
        </details>
    <?php endforeach ?>
</div>

