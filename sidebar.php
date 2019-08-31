<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="mdui-col-md-3 mdui-hidden-sm-down">
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">分类</div>
        </div>
        <div class="mdui-divider"></div>
        <ul class="mdui-list mdui-list-dense">
            <?php $obj = $this->widget('Widget_Metas_Category_List'); $tot = 0?>
            <?php while($obj->next()) { $tot++; } ?>
            <?php while($obj->next()) { ?>
                <a href="<?php $obj->permalink ?>" title="<?php $obj->description?>" class="mdui-list-item mdui-ripple"><?php echo $obj->name?><span class="tag-right"><?php echo $obj->count?></span></a>
            <?php } ?>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">标签</div>
        </div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-content tag-list">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'name', 'ignoreZeroCount' => true, 'desc' => false))->to($tags); ?>
            <?php while($tags->next()) { ?>
                <?php if ($tags->count <= 3) { ?><a href="<?php $tags->permalink(); ?>"><span class="tag taga"><?php echo $tags->name ?></span></a>&nbsp;<?php }?>
                <?php if ($tags->count > 3 && $tags->count <= 5) { ?><a href="<?php $tags->permalink(); ?>"><span class="tagb"><?php echo $tags->name ?></span></a>&nbsp;<?php } ?>
                <?php if ($tags->count > 5 && $tags->count <= 8) { ?><a href="<?php $tags->permalink(); ?>"><span class="tagc"><?php echo $tags->name ?></span></a>&nbsp;<?php } ?>
                <?php if ($tags->count > 8) { ?><a href="<?php $tags->permalink(); ?>"><span class="tagd"><?php echo $tags->name ?></span></a>&nbsp;<?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">归档</div>
        </div>
        <div class="mdui-divider"></div>
        <ul class="mdui-list mdui-list-dense">
            <?php $typ = $this->widget('Widget_Contents_Post_Date', 'format=Y 年 m 月&type=month&limit=0');?>
            <?php while($typ->next()) { ?>
                <a href="<?php $typ->permalink ?>" class="mdui-list-item mdui-ripple"><?php echo $typ->date; ?><span class="tag-right"><?php echo $typ->count; ?></span></a>
            <?php } ?>
         </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary" style="display:flex">
            <div class="mdui-card-primary-title">友链</div>
        </div>
        <div class="mdui-divider"></div>
        <ul class="mdui-list mdui-list-dense">
            <a href="https://www.cnblogs.com/terrasse" target="_blank" class="mdui-list-item mdui-ripple">WZX<span class="tag-right">cnblogs.com/terrasse</span></a>
            <a href="https://alexanderchen.gitee.io/" target="_blank" class="mdui-list-item mdui-ripple">CYC<span class="tag-right">alexanderchen.gitee.io</span></a>
            <a href="https://llf0703.com" target = "_blank" class = "mdui-list-item mdui-ripple">LLF<span class="tag-right">llf0703.com</span></a>
        </ul>
    </div>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary" style="display:flex">
            <div class="mdui-card-primary-title">工具</div>
        </div>
        <div class="mdui-divider"></div>
        <ul class="mdui-list mdui-list-dense">
            <li class="mdui-list-item mdui-ripple">
                <a href="https://oeis.org" target="_blank" class="mdui-list-item-content">OEIS</a>
                <img src="https://oeis.org/favicon.ico">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a href="https://csacademy.com/app/graph_editor/" target="_blank" class="mdui-list-item-content">graph_editor</a>
                <img src="http://blackwhitetony.cf/usr/uploads/2019/08/227646295.png">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a href="https://oi-wiki.org/" target="_blank" class="mdui-list-item-content">OIwiki</a>
                <img src="http://blackwhitetony.cf/usr/uploads/2019/08/2309591418.png">
            </li>
            <li class="mdui-list-item mdui-ripple">
                <a href="http://bytew.net/OIer" target="_blank" class="mdui-list-item-content">OIerDb</a>
                <img src="http://blackwhitetony.cf/usr/uploads/2019/08/4061474708.png">
            </li>
        </ul>
    </div>
</div>