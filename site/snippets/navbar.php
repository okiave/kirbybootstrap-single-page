<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" data-toggle="collapse" data-target="#navbar"><?= $site->title()->html() ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav nav-justified">
                <? foreach($pages->visible() as $p): ?>
                    <li <? e($p->isOpen(), ' class="active"') ?>>
                        <a href="<?= $p->url() ?>">
                            <?= $p->title()->html() ?>
                        </a>
                    </li>
                <? endforeach ?>
            </ul>
        </div>
    </div>
</nav>
