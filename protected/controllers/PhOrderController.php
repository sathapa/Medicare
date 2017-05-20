<?php

    class PhOrderController extends RController
    {
        public $menu;
        public $breadcrumbs;
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
            $model=new PhOrder;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['PhOrder']))
            {
                $model->attributes=$_POST['PhOrder'];
                if($model->save())
                    $this->redirect(array('view','id'=>$model->phoid));
            }

            $this->render('create',array(
                'model'=>$model,
            ));
        }

        /**
         * New create function for modal value insert from Plan/create. . .
         */
        public function actionModalCreate()
        {
            $model = array();
            $current_user = Yii::app()->user->id;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            for ($i=0; $i<=6; $i++)
            {
                $model[] = new PhOrder;
            }
            if(isset($_POST['PhOrder']))
            {
                $valid=true;
                foreach($model as $i=>$orders)
                {
                    if(isset($_POST['PhOrder'][$i]))
                        $orders->attributes=$_POST['PhOrder'][$i];
                    $valid = $orders->validate() && $valid;
                    if($valid)
                    {
                        $orders->save();
                    }
                }
                $user = Yii::app()->getComponent('user');
                $user->setFlash(
                    'success',
                    "<strong>Medicine Successfully Prescribed to the pharmacy</strong>"
                );
                $this->redirect(Yii::app()->session['userView'.$current_user.'returnURL']);
            }
            $this->render('_plan',array('model'=>$model));
        }

        /**
         * AutoComplete function for modalcreate
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

            if(isset($_POST['PhOrder']))
            {
                $model->attributes=$_POST['PhOrder'];
                if($model->save())
                    $this->redirect(array('view','id'=>$model->phoid));
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
            $model = PhOrder::model()->findByPk($id);

            if(Yii::app()->request->isPostRequest)
            {
                $model->status = 2;
                $model->save();

                if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }

            /*if(Yii::app()->request->isPostRequest)
            {
                // we only allow deletion via POST request
                $this->loadModel($id)->delete();

                // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
                if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }*/
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

            $model=new PhOrder('search');
            $model->unsetAttributes();  // clear any default values

            if(isset($_GET['PhOrder']))
            {
                $model->attributes=$_GET['PhOrder'];



                if (!empty($model->phoid)) $criteria->addCondition('phoid = "'.$model->phoid.'"');


                if (!empty($model->pid)) $criteria->addCondition('pid = "'.$model->pid.'"');


                if (!empty($model->did)) $criteria->addCondition('did = "'.$model->did.'"');


                if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');


                if (!empty($model->drug_id)) $criteria->addCondition('drug_id = "'.$model->drug_id.'"');


                if (!empty($model->sig)) $criteria->addCondition('sig = "'.$model->sig.'"');


                if (!empty($model->days)) $criteria->addCondition('days = "'.$model->days.'"');


                if (!empty($model->quantity)) $criteria->addCondition('quantity = "'.$model->quantity.'"');


                if (!empty($model->refill)) $criteria->addCondition('refill = "'.$model->refill.'"');


                if (!empty($model->status)) $criteria->addCondition('status = "'.$model->status.'"');


                if (!empty($model->billstatus)) $criteria->addCondition('billstatus = "'.$model->billstatus.'"');


            }
            $session['PhOrder_records']=PhOrder::model()->findAll($criteria);


            $this->render('index',array(
                'model'=>$model,
            ));

        }

        /**
         * Manages all models.
         */
        public function actionAdmin()
        {
            $model=new PhOrder('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['PhOrder']))
                $model->attributes=$_GET['PhOrder'];

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
            $model=PhOrder::model()->findByPk($id);
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
            if(isset($_POST['ajax']) && $_POST['ajax']==='ph-order-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }
        public function actionGenerateExcel()
        {
            $session=new CHttpSession;
            $session->open();

            if(isset($session['PhOrder_records']))
            {
                $model=$session['PhOrder_records'];
            }
            else
                $model = PhOrder::model()->findAll();


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

            if(isset($session['PhOrder_records']))
            {
                $model=$session['PhOrder_records'];
            }
            else
                $model = PhOrder::model()->findAll();



            $html = $this->renderPartial('expenseGridtoReport', array(
                'model'=>$model
            ), true);

            //die($html);

            $pdf = new TCPDF();
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor(Yii::app()->name);
            $pdf->SetTitle('PhOrder Report');
            $pdf->SetSubject('PhOrder Report');
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
            $pdf->Output("PhOrder_002.pdf", "I");
        }
    }
