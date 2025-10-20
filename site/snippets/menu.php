<nav class="menu">
    <ul>
        <?php foreach($site->children()->listed() as $item): ?>
            <li>
                <a class="menu-text <?= $item->isOpen() ? 'active' : '' ?>" href="<?= $item->url() ?>">
                    <?= $item->title() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>