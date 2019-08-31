<div class="mdui-card card-fixed mdui-hoverable">
    <div class="mdui-card-primary">
        <a href="<?php $this->permalink() ?>" class="title-fixed" style="font-size:24px; font-weight:500"><?php $this->title()?></a>
        <div class="mdui-card-primary-subtitle">
            <i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
        </div>
    </div>
    <?php if(isset($this->fields->summary)) { ?><div class="mdui-card-content katex"><?php echo $this->fields->summary ?></div><?php }?>
    <?php if(!isset($this->fields->summary)) { ?><div class="mdui-card-content"><?php $this->content(); ?></div><?php } ?>
    <div class="mdui-card-actions">
        <span class="more">
            <i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe866;</i> <?php $this->category(' | '); ?> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe867;</i> <?php $this->tags(' | ', true, 'none')?> &nbsp; &nbsp;
            <a class="mdui-float-right"><i class="mdui-icon material-icons index-icon">&#xe417;</i> <?php Views_Plugin::theViews(); ?></a>
        </span>
    </div>
</div>