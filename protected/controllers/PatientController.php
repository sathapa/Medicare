<?php

class PatientController extends RController
{
        public $breadcrumbs;
    public $menu;
    public $cardID;
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
		$model=new Patient;
        $model1=new DataCard;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Patient']))
		{
			$model->attributes=$_POST['Patient'];
			if($model->save())
            {
                $model1->cardID=$model->cardID;
                $model1->pID=$model->id;
                $model1->stat=1;
                $model1->clerk=Yii::app()->user->id;

                if($model1->save())
                {
                    $this->redirect(array('selDoc','id'=>$model->id));
                }
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function actionSelDoc($id)
    {
        $model=Patient::model()->findByPk($id);
        $pid = $model->id;


        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Patient']))
        {
            $model->attributes=$_POST['Patient'];

            $session = Yii::app()->session;
            $session['pFName'] = $model->fName;
            $session['pMName'] = $model->mName;
            $session['pLName'] = $model->lName;
            $session['did'] = $model->dID;

            $this->redirect(array('/Calendar/create','id'=>$id));
        }
        $this->render('sel_doc',array(
            'model'=>$model,
            'pid' => $pid,
        ));
    }

    public function actionCreate1($aid)
    {
        $model=new Patient;
        $model1=new DataCard;

        $data = Appointment::model()->findByPk($aid);
        $did = $data->dID;

        // Uncomment the following line if AJAX validation is needed
         $this->performAjaxValidation($model);

        if(isset($_POST['Patient']))
        {
            $model->attributes=$_POST['Patient'];
            if($model->save())
            {
                $qry = "UPDATE data_appointment SET stat=0 WHERE id=".$aid;
                Yii::app()->db->createCommand($qry)->execute();

                $session = Yii::app()->session;
                $session['did'] = $did;
                $session['pFName'] = $model->fName;
                $session['pMName'] = $model->mName;
                $session['pLName'] = $model->lName;

                $model1->cardID=$model->cardID;
                $model1->pID=$model->id;
                $model1->stat=1;
                $model1->clerk=Yii::app()->user->id;

                if($model1->save())
                {
                    $this->redirect(array('/Calendar/create','id'=>$model->id));
                }
            }
        }

        $this->render('create1',array(
            'model'=>$model,
            'data'=>$data,
        ));
    }

    public function actionOldA()
    {
        $session=new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model=new Patient('search');
        $model->unsetAttributes();  // clear any default values

        if(isset($_GET['Patient']))
        {
            $model->attributes=$_GET['Patient'];



            if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');


            if (!empty($model->title)) $criteria->addCondition('title = "'.$model->title.'"');


            if (!empty($model->fName)) $criteria->addCondition('fName = "'.$model->fName.'"');


            if (!empty($model->mName)) $criteria->addCondition('mName = "'.$model->mName.'"');


            if (!empty($model->lName)) $criteria->addCondition('lName = "'.$model->lName.'"');


            if (!empty($model->dob)) $criteria->addCondition('dob = "'.$model->dob.'"');


            if (!empty($model->gender)) $criteria->addCondition('gender = "'.$model->gender.'"');


            if (!empty($model->marital_status)) $criteria->addCondition('marital_status = "'.$model->marital_status.'"');


            if (!empty($model->sStreet)) $criteria->addCondition('sStreet = "'.$model->sStreet.'"');


            if (!empty($model->sWardNo)) $criteria->addCondition('sWardNo = "'.$model->sWardNo.'"');


            if (!empty($model->sCity)) $criteria->addCondition('sCity = "'.$model->sCity.'"');


            if (!empty($model->sDistrict)) $criteria->addCondition('sDistrict = "'.$model->sDistrict.'"');


            if (!empty($model->sZone)) $criteria->addCondition('sZone = "'.$model->sZone.'"');


            if (!empty($model->pStreet)) $criteria->addCondition('pStreet = "'.$model->pStreet.'"');


            if (!empty($model->pWardNo)) $criteria->addCondition('pWardNo = "'.$model->pWardNo.'"');


            if (!empty($model->pCity)) $criteria->addCondition('pCity = "'.$model->pCity.'"');


            if (!empty($model->pDistrict)) $criteria->addCondition('pDistrict = "'.$model->pDistrict.'"');


            if (!empty($model->pZone)) $criteria->addCondition('pZone = "'.$model->pZone.'"');


            if (!empty($model->country)) $criteria->addCondition('country = "'.$model->country.'"');


            if (!empty($model->motherName)) $criteria->addCondition('motherName = "'.$model->motherName.'"');


            if (!empty($model->guardianName)) $criteria->addCondition('guardianName = "'.$model->guardianName.'"');


            if (!empty($model->relation)) $criteria->addCondition('relation = "'.$model->relation.'"');


            if (!empty($model->eContact)) $criteria->addCondition('eContact = "'.$model->eContact.'"');


            if (!empty($model->ePhone)) $criteria->addCondition('ePhone = "'.$model->ePhone.'"');


            if (!empty($model->homePhone)) $criteria->addCondition('homePhone = "'.$model->homePhone.'"');


            if (!empty($model->workPhone)) $criteria->addCondition('workPhone = "'.$model->workPhone.'"');


            if (!empty($model->mobilePhone)) $criteria->addCondition('mobilePhone = "'.$model->mobilePhone.'"');


            if (!empty($model->email)) $criteria->addCondition('email = "'.$model->email.'"');


            if (!empty($model->stat)) $criteria->addCondition('stat = "'.$model->stat.'"');


            if (!empty($model->dID)) $criteria->addCondition('dID = "'.$model->dID.'"');


            if (!empty($model->clerk)) $criteria->addCondition('clerk = "'.$model->clerk.'"');


            if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');


            if (!empty($model->time)) $criteria->addCondition('time = "'.$model->time.'"');


            if (!empty($model->card_id)) $criteria->addCondition('card_id = "'.$model->card_id.'"');


        }
        $session['Patient_records']=Patient::model()->findAll($criteria);


        $this->render('old_a',array(
            'model'=>$model,
        ));

    }

    public function actionOld()
    {
        $session=new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model=new Patient('search');
        $model->unsetAttributes();  // clear any default values

        if(isset($_GET['Patient']))
        {
            $model->attributes=$_GET['Patient'];



            if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');


            if (!empty($model->title)) $criteria->addCondition('title = "'.$model->title.'"');


            if (!empty($model->fName)) $criteria->addCondition('fName = "'.$model->fName.'"');


            if (!empty($model->mName)) $criteria->addCondition('mName = "'.$model->mName.'"');


            if (!empty($model->lName)) $criteria->addCondition('lName = "'.$model->lName.'"');


            if (!empty($model->dob)) $criteria->addCondition('dob = "'.$model->dob.'"');


            if (!empty($model->gender)) $criteria->addCondition('gender = "'.$model->gender.'"');


            if (!empty($model->marital_status)) $criteria->addCondition('marital_status = "'.$model->marital_status.'"');


            if (!empty($model->sStreet)) $criteria->addCondition('sStreet = "'.$model->sStreet.'"');


            if (!empty($model->sWardNo)) $criteria->addCondition('sWardNo = "'.$model->sWardNo.'"');


            if (!empty($model->sCity)) $criteria->addCondition('sCity = "'.$model->sCity.'"');


            if (!empty($model->sDistrict)) $criteria->addCondition('sDistrict = "'.$model->sDistrict.'"');


            if (!empty($model->sZone)) $criteria->addCondition('sZone = "'.$model->sZone.'"');


            if (!empty($model->pStreet)) $criteria->addCondition('pStreet = "'.$model->pStreet.'"');


            if (!empty($model->pWardNo)) $criteria->addCondition('pWardNo = "'.$model->pWardNo.'"');


            if (!empty($model->pCity)) $criteria->addCondition('pCity = "'.$model->pCity.'"');


            if (!empty($model->pDistrict)) $criteria->addCondition('pDistrict = "'.$model->pDistrict.'"');


            if (!empty($model->pZone)) $criteria->addCondition('pZone = "'.$model->pZone.'"');


            if (!empty($model->country)) $criteria->addCondition('country = "'.$model->country.'"');


            if (!empty($model->motherName)) $criteria->addCondition('motherName = "'.$model->motherName.'"');


            if (!empty($model->guardianName)) $criteria->addCondition('guardianName = "'.$model->guardianName.'"');


            if (!empty($model->relation)) $criteria->addCondition('relation = "'.$model->relation.'"');


            if (!empty($model->eContact)) $criteria->addCondition('eContact = "'.$model->eContact.'"');


            if (!empty($model->ePhone)) $criteria->addCondition('ePhone = "'.$model->ePhone.'"');


            if (!empty($model->homePhone)) $criteria->addCondition('homePhone = "'.$model->homePhone.'"');


            if (!empty($model->workPhone)) $criteria->addCondition('workPhone = "'.$model->workPhone.'"');


            if (!empty($model->mobilePhone)) $criteria->addCondition('mobilePhone = "'.$model->mobilePhone.'"');


            if (!empty($model->email)) $criteria->addCondition('email = "'.$model->email.'"');


            if (!empty($model->stat)) $criteria->addCondition('stat = "'.$model->stat.'"');


            if (!empty($model->dID)) $criteria->addCondition('dID = "'.$model->dID.'"');


            if (!empty($model->clerk)) $criteria->addCondition('clerk = "'.$model->clerk.'"');


            if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');


            if (!empty($model->time)) $criteria->addCondition('time = "'.$model->time.'"');


            if (!empty($model->card_id)) $criteria->addCondition('card_id = "'.$model->card_id.'"');


        }
        $session['Patient_records']=Patient::model()->findAll($criteria);


        $this->render('old_r',array(
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

		if(isset($_POST['Patient']))
		{
			$model->attributes=$_POST['Patient'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

    public function actionLoadZone()
    {
        $data=Listaddress::model()->findAll('id=:id',array(':id'=>(int) $_POST['id']));

        $data=CHtml::listData($data,'zone','zone');
        foreach($data as $value=>$zone)
        {
            echo CHtml::tag('option', array('value'=>$value),CHtml::encode($zone),true);
        }
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

                $model=new Patient('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Patient']))
		{
                        $model->attributes=$_GET['Patient'];
			
			
                   	
                       if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                     
                    	
                       if (!empty($model->title)) $criteria->addCondition('title = "'.$model->title.'"');
                     
                    	
                       if (!empty($model->fName)) $criteria->addCondition('fName = "'.$model->fName.'"');
                     
                    	
                       if (!empty($model->mName)) $criteria->addCondition('mName = "'.$model->mName.'"');
                     
                    	
                       if (!empty($model->lName)) $criteria->addCondition('lName = "'.$model->lName.'"');
                     
                    	
                       if (!empty($model->dob)) $criteria->addCondition('dob = "'.$model->dob.'"');
                     
                    	
                       if (!empty($model->gender)) $criteria->addCondition('gender = "'.$model->gender.'"');
                     
                    	
                       if (!empty($model->marital_status)) $criteria->addCondition('marital_status = "'.$model->marital_status.'"');
                     
                    	
                       if (!empty($model->sStreet)) $criteria->addCondition('sStreet = "'.$model->sStreet.'"');
                     
                    	
                       if (!empty($model->sWardNo)) $criteria->addCondition('sWardNo = "'.$model->sWardNo.'"');
                     
                    	
                       if (!empty($model->sCity)) $criteria->addCondition('sCity = "'.$model->sCity.'"');
                     
                    	
                       if (!empty($model->sDistrict)) $criteria->addCondition('sDistrict = "'.$model->sDistrict.'"');
                     
                    	
                       if (!empty($model->sZone)) $criteria->addCondition('sZone = "'.$model->sZone.'"');
                     
                    	
                       if (!empty($model->pStreet)) $criteria->addCondition('pStreet = "'.$model->pStreet.'"');
                     
                    	
                       if (!empty($model->pWardNo)) $criteria->addCondition('pWardNo = "'.$model->pWardNo.'"');
                     
                    	
                       if (!empty($model->pCity)) $criteria->addCondition('pCity = "'.$model->pCity.'"');
                     
                    	
                       if (!empty($model->pDistrict)) $criteria->addCondition('pDistrict = "'.$model->pDistrict.'"');
                     
                    	
                       if (!empty($model->pZone)) $criteria->addCondition('pZone = "'.$model->pZone.'"');
                     
                    	
                       if (!empty($model->country)) $criteria->addCondition('country = "'.$model->country.'"');
                     
                    	
                       if (!empty($model->motherName)) $criteria->addCondition('motherName = "'.$model->motherName.'"');
                     
                    	
                       if (!empty($model->guardianName)) $criteria->addCondition('guardianName = "'.$model->guardianName.'"');
                     
                    	
                       if (!empty($model->relation)) $criteria->addCondition('relation = "'.$model->relation.'"');
                     
                    	
                       if (!empty($model->eContact)) $criteria->addCondition('eContact = "'.$model->eContact.'"');
                     
                    	
                       if (!empty($model->ePhone)) $criteria->addCondition('ePhone = "'.$model->ePhone.'"');
                     
                    	
                       if (!empty($model->homePhone)) $criteria->addCondition('homePhone = "'.$model->homePhone.'"');
                     
                    	
                       if (!empty($model->workPhone)) $criteria->addCondition('workPhone = "'.$model->workPhone.'"');
                     
                    	
                       if (!empty($model->mobilePhone)) $criteria->addCondition('mobilePhone = "'.$model->mobilePhone.'"');
                     
                    	
                       if (!empty($model->email)) $criteria->addCondition('email = "'.$model->email.'"');
                     
                    	
                       if (!empty($model->stat)) $criteria->addCondition('stat = "'.$model->stat.'"');
                     
                    	
                       if (!empty($model->dID)) $criteria->addCondition('dID = "'.$model->dID.'"');
                     
                    	
                       if (!empty($model->clerk)) $criteria->addCondition('clerk = "'.$model->clerk.'"');
                     
                    	
                       if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');
                     
                    	
                       if (!empty($model->time)) $criteria->addCondition('time = "'.$model->time.'"');
                     
                    	
                       if (!empty($model->card_id)) $criteria->addCondition('card_id = "'.$model->card_id.'"');
                     
                    			
		}
                 $session['Patient_records']=Patient::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Patient('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Patient']))
			$model->attributes=$_GET['Patient'];

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
		$model=Patient::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='patient-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Patient_records']))
               {
                $model=$session['Patient_records'];
               }
               else
                 $model = Patient::model()->findAll();

		
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

             if(isset($session['Patient_records']))
               {
                $model=$session['Patient_records'];
               }
               else
                 $model = Patient::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Patient Report');
		$pdf->SetSubject('Patient Report');
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
		$pdf->Output("Patient_002.pdf", "I");
	}
}
