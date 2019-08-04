<div class="mdui-card card-fixed mdui-hoverable">

    <div class="mdui-card-primary">
        <a class="mdui-card-primary-title title-fixed" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </div>
    <div class="mdui-card-content nokatex"><?php if (isset($this->fields->summary)) { echo $this->fields->summary; } else $this->excerpt(200, '...'); ?></div>
    <div class="mdui-card-actions">
        <span class="more">
            <i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe866;</i> <?php $this->category('  '); ?> &nbsp;&nbsp;
            <?php $this->tags(' | ', true, 'none')?>
        </span>
    </div>
</div>