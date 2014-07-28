<?php
/* @var $this GroupController */
$this->breadcrumbs=array(
    array('name' => '首页', 'url' => array('site/index')),
    array('name' => '用户管理', 'url' => array('group/user')),
    array('name' => '创建用户'),
);
?>
<?php echo $this->renderPartial('_userForm', array('model'=>$model,'group'=>$group)); ?>
<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>
