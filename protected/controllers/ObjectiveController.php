<?php

class ObjectiveController extends RController
{
    public $breadcrumbs;
    public $menu;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
		);
	}

	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
        $session = Yii::app()->session;
        $PCID = $session['PCID'];
        $sid = $session['sid'];

        $current_user = Yii::app()->user->id;

        Yii::app()->session['userView'.$current_user.'returnURL']=Yii::app()->request->Url;

        $dataO = Objective::model()->findByAttributes(array('pid'=>$PCID));

        if($dataO == null)
        {
            $model=new Objective;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['Objective']))
            {
                $model->attributes=$_POST['Objective'];
                if($model->save())
                    $this->redirect(array('LabOrder/laborderr','id'=>$model->obid));
            }

            $this->render('create',array(
                'model'=>$model,
            ));
        }
        else
        {
            $this->redirect(array('update','id'=>$dataO->obid));
        }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

        $current_user = Yii::app()->user->id;
        Yii::app()->session['userView'.$current_user.'returnURL']=Yii::app()->request->Url;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Objective']))
		{
			$model->attributes=$_POST['Objective'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->obid));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new Objective('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Objective']))
		{
                        $model->attributes=$_GET['Objective'];
			
			
                   	
                       if (!empty($model->obid)) $criteria->addCondition('obid = "'.$model->obid.'"');
                     
                    	
                       if (!empty($model->clerk)) $criteria->addCondition('clerk = "'.$model->clerk.'"');
                     
                    	
                       if (!empty($model->pid)) $criteria->addCondition('pid = "'.$model->pid.'"');
                     
                    	
                       if (!empty($model->objective)) $criteria->addCondition('objective = "'.$model->objective.'"');
                     
                    	
                       if (!empty($model->datetime)) $criteria->addCondition('datetime = "'.$model->datetime.'"');
                     
                    			
		}
                 $session['Objective_records']=Objective::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Objective('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Objective']))
			$model->attributes=$_GET['Objective'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Objective::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='objective-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Objective_records']))
               {
                $model=$session['Objective_records'];
               }
               else
                 $model = Objective::model()->findAll();

		
		Yii::app()->request->sendFile(date('YmdHis').'.xls',
			$this->renderPartial('excelReport', array(
				'model'=>$model
			), true)
		);
	}
        public function actionGeneratePdf() 
	{
           $session=new CHttpSession;
           $session->open();
		Yii::import('application.modules.admin.extensions.giiplus.bootstrap.*');
		require_once('tcpdf/tcpdf.php');
		require_once('tcpdf/config/lang/eng.php');

             if(isset($session['Objective_records']))
               {
                $model=$session['Objective_records'];
               }
               else
                 $model = Objective::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Objective Report');
		$pdf->SetSubject('Objective Report');
		//$pdf->SetKeywords('example, text, report');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by ".Yii::app()->name, "");
		$pdf->setHeaderFont(Array('helvetica', '', 8));
		$pdf->setFooterFont(Array('helvetica', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
		$pdf->SetFont('dejavusans', '', 7);
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
		$pdf->Output("Objective_002.pdf", "I");
	}
}
