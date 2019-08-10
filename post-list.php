<div class="mdui-card card-fixed mdui-hoverable">

    <div class="mdui-card-primary">
        <div class="mdui-chip">
            <span class="mdui-chip-icon mdui-color-blue"><i class="mdui-icon material-icons">&#xe7f9;</i></span>
            <a href="<?php $this->permalink() ?>"class="mdui-chip-title mytitle"><?php $this->title() ?></a>
        </div> 
    </div>
    <div class="mdui-card-content nokatex"><?php if (isset($this->fields->summary)) { echo $this->fields->summary; } else $this->excerpt(200, '...'); ?></div>
    <div class="mdui-card-actions">
        <span class="more">
            <i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe866;</i> <?php $this->category(' | '); ?> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe867;</i> <?php $this->tags(' | ', true, 'none')?> &nbsp; &nbsp;
            <a class="mdui-float-right"><i class="mdui-icon material-icons index-icon">&#xe417;</i> <?php Views_Plugin::theViews(); ?></a>
        </span>
    </div>
</div>