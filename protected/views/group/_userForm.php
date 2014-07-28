
<div class="form">


    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'group-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'focus' => array($model, 'name'),
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'nickname'); ?>
        <?php echo $form->textField($model, 'nickname'); ?>
        <?php echo $form->error($model, 'nickname'); ?>
    </div>
    <?php if(Yii::app()->getController()->getAction()->id=='userUpdate'){?>
        <div class="row">
            <?php echo $form->labelEx($model, 'newPswd'); ?>
            <?php echo $form->passwordField($model, 'newPswd'); ?>
            <?php echo $form->error($model, 'newPswd'); ?>
        </div>
    <?php }else{?>
        <div class="row">
            <?php echo $form->labelEx($model, 'pswd'); ?>
            <?php echo $form->passwordField($model, 'pswd'); ?>
            <?php echo $form->error($model, 'pswd'); ?>
        </div>
    <?php }?>
    <div class="row">
        <?php echo $form->labelEx($model, 'repswd'); ?>
        <?php echo $form->passwordField($model, 'repswd'); ?>
        <?php echo $form->error($model, 'repswd'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'group_id'); ?>
        <?php echo $form->dropDownList($model, 'group_id',$group); ?>
        <?php echo $form->error($model, 'group_id'); ?>
    </div>
    <div class="row submit">
        <?php echo CHtml::submitButton('保存'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>