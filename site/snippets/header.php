<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if($page->isHomePage()): ?>
        <title><?= $site->title() ?></title>
    <?php else: ?>
        <title><?= $site->seoTitle()->or($page->title()) ?> / <?= $site->title() ?></title>
    <?php endif ?>

    <?= css('@auto') ?>
    <?= css('assets/css/templates/index.css') ?>
</head>
<body>

    <header class="header">
        <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

        <button class="menu-toggle" aria-label="Open menu">
            ☰
        </button>

        <?php snippet('menu') ?>
    </header>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    let isClosing = false;

    toggle.addEventListener("click", function() {
        if (menu.classList.contains("active")) {
            // Sluit menu met animatie
            menu.classList.add("closing");
            isClosing = true;

            setTimeout(() => {
                menu.classList.remove("active", "closing");
                isClosing = false;
            }, 300); // Moet overeenkomen met CSS transition-duration
        } else {
            // Open menu
            menu.classList.add("active");
        }

        toggle.classList.toggle("open");
    });
});
</script>
