<?php snippet('header') ?>

<main class="contact row">
    <div class="col-md-12">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
        <hr>
        <?php snippet('contactform') ?>
    </div>
</main>

<?php snippet('footer') ?>
