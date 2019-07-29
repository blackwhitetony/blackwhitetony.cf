<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="mdui-col-md-3 mdui-hidden-sm-down">
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-chip">
                <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">bookmark</i></span>
                <span class="mdui-chip-title">分类</span>
            </div> 
        </div>
        <ul class="mdui-list mdui-list-dense">
            <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}" title="{description}" class="mdui-list-item mdui-ripple">{name}<span class="tag-right">{count}</span></a>'); ?>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-chip">
                <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">bookmark_border</i></span>
                <span class="mdui-chip-title">标签</span>
            </div> 
        </div>
        <div class="mdui-card-content tag-list">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'name', 'ignoreZeroCount' => true, 'desc' => false))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a class="tags" href="<?php $tags->permalink(); ?>"><span class="tag name"><?php $tags->name(); ?></span><span class="tag num"><?php $tags->count();?></span></a>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-chip">
                <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">inbox</i></span>
                <span class="mdui-chip-title">归档</span>
            </div> 
        </div>
        <ul class="mdui-list mdui-list-dense">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年 m月')->parse('<a href="{permalink}" class="mdui-list-item mdui-ripple">{date}<span class="tag-right">{count}</span></a>'); ?>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary" style="display:flex">
            <div class="mdui-chip">
                <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">link</i></span>
                <span class="mdui-chip-title">友链</span>
            </div> 
        </div>
        <ul class="mdui-list mdui-list-dense">
            <a href="https://www.cnblogs.com/terrasse" target="_blank" class="mdui-list-item mdui-ripple">WZX<span class="tag-right">cnblogs.com/terrasse</span></a>
            <a href="https://alexanderchen.gitee.io/" target="_blank" class="mdui-list-item mdui-ripple">CYC<span class="tag-right">alexanderchen.gitee.io</span></a>
            <a href="http://47.103.106.225/" target = "_blank" class = "mdui-list-item mdui-ripple">LLF<span class="tag-right">llf0703.com</span></a>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary" style="display:flex">
            <div class="mdui-chip">
                <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">link</i></span>
                <span class="mdui-chip-title">工具</span>
            </div> 
        </div>
        <ul class="mdui-list mdui-list-dense">
            <li class="mdui-list-item mdui-ripple">
                <a herf="https://oeis.org" class="mdui-list-item-content">OEIS</a>
                <img src="https://oeis.org/favicon.ico">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a herf="https://https://csacademy.com/app/graph_editor/" class="mdui-list-item-content">graph_editor</a>
                <img src="https://www.easyicon.net/download/png/1194072/16/">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a herf="https://oi-wiki.org/" class="mdui-list-item-content">OIwiki</a>
                <img src="https://www.easyicon.net/download/png/568162/16/">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a herf="http://bytew.net/OIer" class="mdui-list-item-content">OIerDb</a>
                <img src="https://www.easyicon.net/download/png/1177191/16/">
            </li>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6222039443661594"
            data-ad-slot="2249781672"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>