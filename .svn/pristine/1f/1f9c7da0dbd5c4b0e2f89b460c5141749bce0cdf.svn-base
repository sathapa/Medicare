<?php

    class PlanController extends CController
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
                'accessControl', // perform access control for CRUD operations
            );
        }

        /**
         * Specifies the access control rules.
         * This method is used by the 'accessControl' filter.
         * @return array access control rules
         */
        public function accessRules()
        {
            return array(
                array('allow',  // allow all users to perform 'index' and 'view' actions
                    'actions'=>array('index','view','dynamicDrug1','dynamicDrug2','autoComplete'),
                    'users'=>array('*'),
                ),
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                    'actions'=>array('create','update','GeneratePdf','GenerateExcel'),
                    'users'=>array('*'),
                ),
                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                    'actions'=>array('admin','delete'),
                    'users'=>array('*'),
                ),
                array('deny',  // deny all users
                    'users'=>array('*'),
                ),
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
            $model=new Plan;
            $model1=new PhOrder;
            $drugs = array();

            $session = Yii::app()->session;
            $pid = $session['PCID'];
            $sid = $session['sid'];

            $current_user = Yii::app()->user->id;
            Yii::app()->session['userView'.$current_user.'returnURL']=Yii::app()->request->Url;

            $dataPL = Plan::model()->findByAttributes(array('sid'=>$sid));

            if($dataPL == null)
            {
                for ($i=0; $i<=25; $i++)
                {
                    $drugs[] = new PhOrder;
                }

                if(isset($_POST['Plan'],$_POST['PhOrder']))
                {
                    $model->attributes=$_POST['Plan'];
                    $model->sid=$sid;
                    $valid=$model->validate();

                    foreach($drugs as $i=>$model1)
                    {
                        if(isset($_POST['PhOrder'][$i]))
                            $model1->attributes=$_POST['PhOrder'][$i];
                        $model1->sid = $sid;
                        $model1->pid =$pid;
                        $model1->did = Yii::app()->user->id;
                        $model1->date = date('Y-m-d');
                        $model1->status = 1;
                        $model1->billstatus = 1;
                        $valid = $model->validate() && $valid;
                        if($valid)
                        {
                            if($model->save())
                            {
                                $user = Yii::app()->getComponent('user');
                                $user->setFlash(
                                    'success1',
                                    "<strong>Plan Successfull Saved.</strong>"
                                );
                            }
                            if($model1->save())
                            {
                                $user = Yii::app()->getComponent('user');
                                $user->setFlash(
                                    'success2',
                                    "<strong>Medicine Prescribed to the pharmacy</strong>"
                                );
                            }
                        }
                    }
                }

                $this->render('create',array(
                    'model'=>$model,
                    'model1'=>$model1,
                    'pid'=>$pid,
                    'drugs'=>$drugs,
                ));
            }
            else $this->redirect(array('update','id'=>$sid));
        }

        /*
         * Auto complete for drug prescription
         */
        public function actionAutoComplete()
        {
            $res = array();
            if (isset($_GET['term']))
            {
                $qry = "SELECT * from ph_drug WHERE generic_name LIKE :generic_name AND stat=1";
//                $qry .= 'ORDER BY icd10no ASC';
                $data = Yii::app()->db->createCommand($qry);
//                $qterm = $_GET['term'].'%';
//                $data->bindValue(":icd10no", $qterm, PDO::PARAM_STR);
                $data->bindValue(":generic_name", '%'.$_GET['term'].'%', PDO::PARAM_STR);
                $res = $data->queryAll();
            }
            echo CJSON::encode($res);
            Yii::app()->end();
        }

        public function actionDynamicDrug1()
        {
            $data=PhDrug::model()->findAll('generic_name=:generic_name',array(':generic_name'=>$_POST['generic_name']));

            //die($_POST['drug_id']);

            $data=CHtml::listData($data,'brand_name','brand_name');
            echo CHtml::tag('option',array('value'=>0),CHtml::encode('Select Brand'),true);
            foreach($data as $value=>$brand)
            {
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($brand),true);
            }
        }

        public function actionDynamicDrug2()
        {
            $data=PhDrug::model()->findAll('brand_name=:brand_name',array(':brand_name'=>$_POST['brand_name']));

            //die($_POST['drug_id']);

            $data=CHtml::listData($data,'drug_id','unit_value');
            echo CHtml::tag('option',array('value'=>0),CHtml::encode('Unit Value'),true);
            foreach($data as $value=>$brand)
            {
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($brand),true);
            }
        }

        /**
         * Updates a particular model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id the ID of the model to be updated
         */
        public function actionUpdate($id)
        {
            $model1=new PhOrder;
            $drugs = array();

            $session = Yii::app()->session;
            $pid = $session['PCID'];
            $sid = $session['sid'];

            $current_user = Yii::app()->user->id;
            Yii::app()->session['userView'.$current_user.'returnURL']=Yii::app()->request->Url;

            $data = Plan::model()->findByAttributes(array('sid'=>$id,'pid'=>$pid));
            $model=$this->loadModel($data->plid);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            for ($i=0; $i<=25; $i++)
            {
                $drugs[] = new PhOrder;
            }

            if(isset($_POST['Plan'],$_POST['PhOrder']))
            {
                $model->attributes=$_POST['Plan'];

                $valid = $model->validate();

                foreach($drugs as $i=>$model1)
                {
                    if(isset($_POST['PhOrder'][$i]))
                        $model1->attributes=$_POST['PhOrder'][$i];
                    $model1->sid = $sid;
                    $model1->pid =$pid;
                    $model1->did = Yii::app()->user->id;
                    $model1->date = date('Y-m-d');
                    $model1->status = 1;
                    $model1->billstatus = 1;
                    $valid = $model->validate() && $valid;
                    if($valid)
                    {
                        if($model->save())
                        {
                            $user = Yii::app()->getComponent('user');
                            $user->setFlash(
                                'success1',
                                "<strong>Plan Successfull Saved.</strong>"
                            );
                        }
                        if($model1->save())
                        {
                            $user = Yii::app()->getComponent('user');
                            $user->setFlash(
                                'success2',
                                "<strong>Medicine Successfully Prescribed to the pharmacy</strong>"
                            );
//                            $this->redirect(array('view','id'=>$model->plid));
                        }
                    }
                }
//                if($model->save())
//                    $this->redirect(array('view','id'=>$model->plid));
            }

            $this->render('update',array(
                'model'=>$model,
                'model1'=>$model1,
                'pid'=>$pid,
                'drugs'=>$drugs,
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

            $model=new Plan('search');
            $model->unsetAttributes();  // clear any default values

            if(isset($_GET['Plan']))
            {
                $model->attributes=$_GET['Plan'];



                if (!empty($model->plid)) $criteria->addCondition('plid = "'.$model->plid.'"');


                if (!empty($model->pid)) $criteria->addCondition('pid = "'.$model->pid.'"');


                if (!empty($model->clerk)) $criteria->addCondition('clerk = "'.$model->clerk.'"');


                if (!empty($model->plan)) $criteria->addCondition('plan = "'.$model->plan.'"');


                if (!empty($model->datetime)) $criteria->addCondition('datetime = "'.$model->datetime.'"');


            }
            $session['Plan_records']=Plan::model()->findAll($criteria);


            $this->render('index',array(
                'model'=>$model,
            ));

        }

        /**
         * Manages all models.
         */
        public function actionAdmin()
        {
            $model=new Plan('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Plan']))
                $model->attributes=$_GET['Plan'];

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
            $model=Plan::model()->findByPk($id);
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
            if(isset($_POST['ajax']) && $_POST['ajax']==='plan-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }
        public function actionGenerateExcel()
        {
            $session=new CHttpSession;
            $session->open();

            if(isset($session['Plan_records']))
            {
                $model=$session['Plan_records'];
            }
            else
                $model = Plan::model()->findAll();


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

            if(isset($session['Plan_records']))
            {
                $model=$session['Plan_records'];
            }
            else
                $model = Plan::model()->findAll();



            $html = $this->renderPartial('expenseGridtoReport', array(
                'model'=>$model
            ), true);

            //die($html);

            $pdf = new TCPDF();
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor(Yii::app()->name);
            $pdf->SetTitle('Plan Report');
            $pdf->SetSubject('Plan Report');
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
            $pdf->Output("Plan_002.pdf", "I");
        }
    }
