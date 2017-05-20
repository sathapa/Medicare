<?php

class DoctortimeController extends RController
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
        $data=Doctortime::model()->findByAttributes(array('dtid'=>$id));
        $uid = $data->uid;

        $data1=User::model()->findByPk($uid);

		$this->render('_view',array(
			'model'=>$this->loadModel($id),
            'uid'=>$data1,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Doctortime;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Doctortime']))
		{
			$model->attributes=$_POST['Doctortime'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->dtid));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Doctortime']))
		{
			$model->attributes=$_POST['Doctortime'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->dtid));
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

                $model=new Doctortime('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Doctortime']))
		{
                        $model->attributes=$_GET['Doctortime'];
			
			
                   	
                       if (!empty($model->dtid)) $criteria->addCondition('dtid = "'.$model->dtid.'"');
                     
                    	
                       if (!empty($model->uid)) $criteria->addCondition('uid = "'.$model->uid.'"');
                     
                    	
                       if (!empty($model->sunM)) $criteria->addCondition('sunM = "'.$model->sunM.'"');
                     
                    	
                       if (!empty($model->sunD)) $criteria->addCondition('sunD = "'.$model->sunD.'"');
                     
                    	
                       if (!empty($model->sunE)) $criteria->addCondition('sunE = "'.$model->sunE.'"');
                     
                    	
                       if (!empty($model->sunN)) $criteria->addCondition('sunN = "'.$model->sunN.'"');
                     
                    	
                       if (!empty($model->monM)) $criteria->addCondition('monM = "'.$model->monM.'"');
                     
                    	
                       if (!empty($model->monD)) $criteria->addCondition('monD = "'.$model->monD.'"');
                     
                    	
                       if (!empty($model->monE)) $criteria->addCondition('monE = "'.$model->monE.'"');
                     
                    	
                       if (!empty($model->monN)) $criteria->addCondition('monN = "'.$model->monN.'"');
                     
                    	
                       if (!empty($model->tueM)) $criteria->addCondition('tueM = "'.$model->tueM.'"');
                     
                    	
                       if (!empty($model->tueD)) $criteria->addCondition('tueD = "'.$model->tueD.'"');
                     
                    	
                       if (!empty($model->tueE)) $criteria->addCondition('tueE = "'.$model->tueE.'"');
                     
                    	
                       if (!empty($model->tueN)) $criteria->addCondition('tueN = "'.$model->tueN.'"');
                     
                    	
                       if (!empty($model->wedM)) $criteria->addCondition('wedM = "'.$model->wedM.'"');
                     
                    	
                       if (!empty($model->wedD)) $criteria->addCondition('wedD = "'.$model->wedD.'"');
                     
                    	
                       if (!empty($model->wedE)) $criteria->addCondition('wedE = "'.$model->wedE.'"');
                     
                    	
                       if (!empty($model->wedN)) $criteria->addCondition('wedN = "'.$model->wedN.'"');
                     
                    	
                       if (!empty($model->thrM)) $criteria->addCondition('thrM = "'.$model->thrM.'"');
                     
                    	
                       if (!empty($model->thrD)) $criteria->addCondition('thrD = "'.$model->thrD.'"');
                     
                    	
                       if (!empty($model->thrE)) $criteria->addCondition('thrE = "'.$model->thrE.'"');
                     
                    	
                       if (!empty($model->thrN)) $criteria->addCondition('thrN = "'.$model->thrN.'"');
                     
                    	
                       if (!empty($model->friM)) $criteria->addCondition('friM = "'.$model->friM.'"');
                     
                    	
                       if (!empty($model->friD)) $criteria->addCondition('friD = "'.$model->friD.'"');
                     
                    	
                       if (!empty($model->friE)) $criteria->addCondition('friE = "'.$model->friE.'"');
                     
                    	
                       if (!empty($model->friN)) $criteria->addCondition('friN = "'.$model->friN.'"');
                     
                    	
                       if (!empty($model->satM)) $criteria->addCondition('satM = "'.$model->satM.'"');
                     
                    	
                       if (!empty($model->satD)) $criteria->addCondition('satD = "'.$model->satD.'"');
                     
                    	
                       if (!empty($model->satE)) $criteria->addCondition('satE = "'.$model->satE.'"');
                     
                    	
                       if (!empty($model->satN)) $criteria->addCondition('satN = "'.$model->satN.'"');
                     
                    			
		}
                 $session['Doctortime_records']=Doctortime::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Doctortime('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Doctortime']))
			$model->attributes=$_GET['Doctortime'];

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
		$model=Doctortime::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='doctortime-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Doctortime_records']))
               {
                $model=$session['Doctortime_records'];
               }
               else
                 $model = Doctortime::model()->findAll();

		
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

             if(isset($session['Doctortime_records']))
               {
                $model=$session['Doctortime_records'];
               }
               else
                 $model = Doctortime::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Doctortime Report');
		$pdf->SetSubject('Doctortime Report');
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
		$pdf->Output("Doctortime_002.pdf", "I");
	}
}
