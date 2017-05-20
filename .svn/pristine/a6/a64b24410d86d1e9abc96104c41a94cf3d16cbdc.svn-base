<?php

class LabResultController extends RController
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
	public function actionCreate($id)
	{
        $data = LabOrder::model()->findAllByAttributes(array('sid'=>$id,'status'=>1));
        $count = count($data);
        $model1 = array();

//        if(!empty($count))
//        {
            for ($i=0; $i<$count; $i++)
            {
                $model1[]=new LabResult;
            }

            if(isset($_POST['LabResult']))
            {
                $valid=true;
                foreach($model1 as $i=>$model)
                {
                    if(isset($_POST['LabResult'][$i]))
                        $model->attributes=$_POST['LabResult'][$i];
                    $valid=$model->validate() && $valid;
                    if($valid)
                    {
                        $model->save();
                        $qry = "UPDATE lab_order SET status=0 WHERE loid=".$data[$i]->loid."";
                        Yii::app()->db->createCommand($qry)->execute();
                    }
//                            $qry = "UPDATE lab_order set status=0 WHERE loid=$id";
//                            Yii::app()->db->createCommand($qry)->execute();
//                            $this->redirect(array('Laborder/index'));
//                    }
                }
                $this->redirect(array('Laborder/index'));
            }
//        }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);



		$this->render('create',array(
			'model1'=>$model1,'id'=>$id
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

		if(isset($_POST['LabResult']))
		{
			$model->attributes=$_POST['LabResult'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->lrid));
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

                $model=new LabResult('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['LabResult']))
		{
                        $model->attributes=$_GET['LabResult'];
			
			
                   	
                       if (!empty($model->lrid)) $criteria->addCondition('lrid = "'.$model->lrid.'"');
                     
                    	
                       if (!empty($model->pid)) $criteria->addCondition('pid = "'.$model->pid.'"');
                     
                    	
                       if (!empty($model->eid)) $criteria->addCondition('eid = "'.$model->eid.'"');
                     
                    	
                       if (!empty($model->loid)) $criteria->addCondition('loid = "'.$model->loid.'"');
                     
                    	
                       if (!empty($model->result)) $criteria->addCondition('result = "'.$model->result.'"');
                     
                    	
                       if (!empty($model->datetime)) $criteria->addCondition('datetime = "'.$model->datetime.'"');
                     
                    	
                       if (!empty($model->suggestion)) $criteria->addCondition('suggestion = "'.$model->suggestion.'"');
                     
                    			
		}
                 $session['LabResult_records']=LabResult::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new LabResult('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['LabResult']))
			$model->attributes=$_GET['LabResult'];

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
		$model=LabResult::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='lab-result-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['LabResult_records']))
               {
                $model=$session['LabResult_records'];
               }
               else
                 $model = LabResult::model()->findAll();

		
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

             if(isset($session['LabResult_records']))
               {
                $model=$session['LabResult_records'];
               }
               else
                 $model = LabResult::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('LabResult Report');
		$pdf->SetSubject('LabResult Report');
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
		$pdf->Output("LabResult_002.pdf", "I");
	}
}
