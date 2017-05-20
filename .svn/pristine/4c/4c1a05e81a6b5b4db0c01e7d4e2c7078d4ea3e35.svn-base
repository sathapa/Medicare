<?php

class CalendarController extends RController
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
			'rights',
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
	public function actionCreate($id)
	{
		$model=new Calendar;

        $session = Yii::app()->session;
        $did = $session['did'];
        $dataU = User::model()->findByPk($did);
        $did = $dataU->emp_id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Calendar']))
		{
			$model->attributes=$_POST['Calendar'];
            $model->stat=1;
			if($model->save())
                $this->redirect(array('RegBill/create','pid'=>$id,'did'=>$did));
		}

		$this->render('create',array(
			'model'=>$model,
            'pid' => $id,
		));
	}

    public function actionCreate1($id)
    {
        $model=new Calendar;

        $dataP = Patient::model()->findByPk($id);

        $session = Yii::app()->session;
        $did = $session['did'];
        $dataU = User::model()->findByPk($did);

        $dataD = Employee::model()->findByPk(array('id'=>$dataU->emp_id));

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Calendar']))
        {
            $model->attributes=$_POST['Calendar'];
            if($model->save())
                $this->redirect(array('RegBill/create',array('dataP'=>$dataP,'dataD'=>$dataD)));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionCreate2($id,$did,$aid)
    {
        $dataP = Patient::model()->findByPk($id);
        $session = Yii::app()->session;
        $session['did'] = $did;
        $session['pFName'] = $dataP->fName;
        $session['pMName'] = $dataP->mName;
        $session['pLName'] = $dataP->lName;
        $dataU = User::model()->findByPk($did);

        $model=new Calendar;

//        $dataD = Employee::model()->findByPk(array('id'=>$dataU->emp_id));

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Calendar']))
        {
            $model->attributes=$_POST['Calendar'];
            if($model->save())
            {
                $qry = "UPDATE data_appointment SET stat='0' WHERE id=$aid";
                Yii::app()->db->createCommand($qry)->execute();
                $this->redirect(array('RegBill/create','pid'=>$id,'did'=>$dataU->emp_id));
            }
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

		if(isset($_POST['Calendar']))
		{
			$model->attributes=$_POST['Calendar'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id));
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

                $model=new Calendar('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Calendar']))
		{
                        $model->attributes=$_GET['Calendar'];
			
			
                   	
                       if (!empty($model->Id)) $criteria->addCondition('Id = "'.$model->Id.'"');
                     
                    	
                       if (!empty($model->Subject)) $criteria->addCondition('Subject = "'.$model->Subject.'"');
                     
                    	
                       if (!empty($model->Location)) $criteria->addCondition('Location = "'.$model->Location.'"');
                     
                    	
                       if (!empty($model->Description)) $criteria->addCondition('Description = "'.$model->Description.'"');
                     
                    	
                       if (!empty($model->StartTime)) $criteria->addCondition('StartTime = "'.$model->StartTime.'"');
                     
                    	
                       if (!empty($model->EndTime)) $criteria->addCondition('EndTime = "'.$model->EndTime.'"');
                     
                    	
                       if (!empty($model->IsAllDayEvent)) $criteria->addCondition('IsAllDayEvent = "'.$model->IsAllDayEvent.'"');
                     
                    	
                       if (!empty($model->Color)) $criteria->addCondition('Color = "'.$model->Color.'"');
                     
                    	
                       if (!empty($model->RecurringRule)) $criteria->addCondition('RecurringRule = "'.$model->RecurringRule.'"');
                     
                    			
		}
                 $session['Calendar_records']=Calendar::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Calendar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Calendar']))
			$model->attributes=$_GET['Calendar'];

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
		$model=Calendar::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='calendar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Calendar_records']))
               {
                $model=$session['Calendar_records'];
               }
               else
                 $model = Calendar::model()->findAll();

		
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

             if(isset($session['Calendar_records']))
               {
                $model=$session['Calendar_records'];
               }
               else
                 $model = Calendar::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Calendar Report');
		$pdf->SetSubject('Calendar Report');
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
		$pdf->Output("Calendar_002.pdf", "I");
	}
}
