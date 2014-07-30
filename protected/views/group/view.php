<?php
/* @var $this GroupController */

$this->breadcrumbs=array(
    array('name' => '首页', 'url' => array('site/index')),
    array('name' => '用户组','url'=>array('group/index')),
    array('name'=>'详情')
);
?>
<div class="page-header">
    <h1>
        管理组
        <small>
            <i class="icon-double-angle-right"></i>
           <?=$data->name?>
        </small>
    </h1>
</div>
<div class="row">
    <h4><?= $data->name?></h4>
    <?php foreach(AdminMenu::GetUserMenu() as $name=>$Main){?>
        <?= $name?>
        <?php foreach($Main['action'] as $sub){?>
            <?=$sub['name']?>
        <?php }?>
    <?php }?>
</div>
