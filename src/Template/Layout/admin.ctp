<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery-1.11.2.min.js') ?>
    <?= $this->Html->script('scripts.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?php // echo $this->fetch('script') ?>
</head>
<body>
<header>
    <div class="header-title">
        <span><?= $this->fetch('title') ?></span>
    </div>
    <div class="header-help">
        <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
        <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
    </div>
</header>
<div id="container">
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="general.html">General</a></li>
                        <li><a  href="buttons.html">Buttons</a></li>
                        <li><a  href="panels.html">Panels</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div id="content">
        <section id="main-content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </section>
    </div>
    <footer>
    </footer>
</div>
</body>
</html>