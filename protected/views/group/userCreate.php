<?php
/* @var $this GroupController */
$this->breadcrumbs=array(
    array('name' => '首页', 'url' => array('site/index')),
    array('name' => '用户管理', 'url' => array('group/user')),
    array('name' => '创建用户'),
);
?>
<div class="page-content">
    <div class="page-header">
        <h1>
            编辑用户
            <small>
                <i class="icon-double-angle-right"></i>
                <?= $model->username?>
            </small>
        </h1>
    </div><!-- /.page-header -->
    <?php echo $this->renderPartial('_userForm', array('model'=>$model,'group'=>$group)); ?>
</div>


