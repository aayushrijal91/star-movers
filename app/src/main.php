<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="text-center">
                <?= renderImg("logo.png", "logo") ?>
                <h1 class="heading fs-1">Five start treatment for</h1>
                <div class="flipping-heading">
                    <div class="fs-1 text">interstate removal</div>
                    <div class="fs-1 text">waste removal</div>
                    <div class="fs-1 text">boxes &amp; wrapping</div>
                    <div class="fs-1 text">storage services</div>
                    <div class="fs-1 text">furniture removal</div>
                    <div class="fs-1 text">office moves</div>
                </div>
                <div class="py-5">
                    <?= renderImg("planned-prepared.png", "lib", "px-4") ?>
                    <?= renderImg("15-years.png", "lib", "px-4") ?>
                    <?= renderImg("safety-first.png", "lib", "px-4") ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?php include __DIR__ . '/footer.php'; ?>