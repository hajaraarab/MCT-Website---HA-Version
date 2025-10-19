<h1><?= $page->faqTitle() ?></h1>

<?php foreach($page->accordion()->toStructure() as $item): ?>
    <details>
        <summary><?= $item->question() ?></summary>
        <?= $item->anwser() ?>
    </details>
<?php endforeach ?>

