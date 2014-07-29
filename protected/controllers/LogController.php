<?php

class LogController extends Controller
{
	public function actionIndex()
	{
        $this->layout = "//layouts/list";
        $dataProvider = new CActiveDataProvider('ActiveRecordLog', array(
            'criteria' => array(
                'order' => 'created_at desc',
            ),
            //'pagination' => false,
            'pagination' => array(
                'pageSize' => Page::SIZE,
            ),
        ));
        $this->render('index', array('data' => $dataProvider->getData(), 'pages' => $dataProvider->getPagination()));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}