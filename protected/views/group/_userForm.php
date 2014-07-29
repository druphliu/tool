<div class="form">
    <div class="col-xs-12">

        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'group-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'focus' => array($model, 'name'),
            'htmlOptions' => array('class' => 'form-horizontal')
        )); ?>
        <?php echo $form->errorSummary($model, BootStrapUI::alertError, '', array('class' => BootStrapUI::alertErrorClass)); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => BootStrapUI::formLabelClass)); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'username', array('class' => 'col-xs-8 col-sm-2')); ?>
                <?php echo $form->error($model, 'username', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
            </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'nickname', array('class' => BootStrapUI::formLabelClass)); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'nickname', array('class' => 'col-xs-8 col-sm-2')); ?>
                <?php echo $form->error($model, 'nickname', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
            </div>
        </div>
        <div class="space-4"></div>
        <?php if (Yii::app()->getController()->getAction()->id == 'userUpdate') { ?>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'newPswd', array('class' => BootStrapUI::formLabelClass)); ?>
                <div class="col-sm-9">
                    <?php echo $form->textField($model, 'newPswd', array('class' => 'col-xs-8 col-sm-2')); ?>
                    <?php echo $form->error($model, 'newPswd', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
                </div>
            </div>
        <?php } else { ?>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'pswd', array('class' => BootStrapUI::formLabelClass)); ?>
                <div class="col-sm-9">
                    <?php echo $form->textField($model, 'pswd', array('class' => 'col-xs-8 col-sm-2')); ?>
                    <?php echo $form->error($model, 'pswd', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
                </div>
            </div>
        <?php } ?>
        <div class="space-4"></div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'repswd', array('class' => BootStrapUI::formLabelClass)); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'repswd', array('class' => 'col-xs-8 col-sm-2')); ?>
                <?php echo $form->error($model, 'repswd', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
            </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'group_id', array('class' => BootStrapUI::formLabelClass)); ?>
            <div class="col-sm-9">
                <?php echo $form->dropDownList($model, 'group_id', $group); ?>
                <?php echo $form->error($model, 'group_id', array('class' => 'help-block col-xs-12 col-sm-reset inline')); ?>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <?php echo BootStrapUI::saveButton(); ?>
                &nbsp; &nbsp; &nbsp;
                <?php echo BootStrapUI::resetButton(); ?>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>