<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<div id="pjax">
    <?php $this->header(); ?>
    <header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage(); ?>');">
        <div class="mdui-container">
            <div class="site-heading">
                <h1 class="header-title"><?php $this->options->backgroundText(); ?></h1>
            </div>
        </div>
    </header>
    <div class="mdui-container">
        <div class="mdui-row card-first">
            <div class="mdui-col-md-9 mdui-col-sm-12">
                <?php while($this->next()): ?>
                    <?php $this->need('post-list.php'); ?>
                <?php endwhile; ?>
                <div id="ad" class="mdui-card card-fixed mdui-hoverable">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6222039443661594"
                        data-ad-slot="3168698407" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="page-nav">
                    <div class="prev-page mdui-col-xs-6">
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c4;</i></button>'); ?>
                    </div>
                    <div class="next-page mdui-col-xs-6">
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c8;</i></button>', 'next'); ?>
                    </div>
                </div>
            </div>
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>