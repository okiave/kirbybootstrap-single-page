<?php snippet('header') ?>

<main class="home row">
    <div class="col-md-12">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
    </div>
</main>

<?php snippet('footer') ?>
