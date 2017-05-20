<?php

    class PhDrugController extends RController
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
            $model=new PhDrug;
            $model1=new PhStock;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['PhDrug'],$_POST['PhStock']))
            {
                $model->attributes=$_POST['PhDrug'];
                $model1->attributes=$_POST['PhStock'];
                $model1->mfd_data=strtotime($model1->mfd_data);
                $model1->exp_data=strtotime($model1->exp_data);
                $model1->SKU = $model->SKU;

                $valid = $model->validate();
                $valid = $model1->validate() && $valid;

                if($valid)
                {
                    $model1->save();
                    $model->stock_id = $model1->stock_id;
                    $model->save();
                    $this->redirect(array('view','id'=>$model->drug_id));
                }

            }


            $this->render('create',array(
                'model'=>$model,
                'model1'=>$model1,
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
            $model1=PhStock::model()->findAllByAttributes(array('stock_id'=>$id));
                /*loadModel(array('stock_id'=>$id));*/

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if(isset($_POST['PhDrug'],$_POST['PhStock']))
            {
                $model->attributes=$_POST['PhDrug'];
                $model1->attributes=$_POST['PhStock'];
                $model1->SKU = $model->SKU;

                $valid = $model->validate();
                $valid = $model1->validate() && $valid;

                if($valid)
                {
                    $model1->save();
                    $model->stock_id = $model1->stock_id;
                    $model->save();
                    $this->redirect(array('view','id'=>$model->drug_id));
                }
                /*if($model->save())
                    $this->redirect(array('view','id'=>$model->drug_id));*/
            }

            $this->render('update',array(
                'model'=>$model,
                'model1'=>$model1,
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

            $model=new PhDrug('search');
            $model->unsetAttributes();  // clear any default values

            if(isset($_GET['PhDrug']))
            {
                $model->attributes=$_GET['PhDrug'];



                if (!empty($model->drug_id)) $criteria->addCondition('drug_id = "'.$model->drug_id.'"');


                if (!empty($model->stock_id)) $criteria->addCondition('stock_id = "'.$model->stock_id.'"');


                if (!empty($model->SKU)) $criteria->addCondition('SKU = "'.$model->SKU.'"');


                if (!empty($model->drug_cat)) $criteria->addCondition('drug_cat = "'.$model->drug_cat.'"');


                if (!empty($model->drug_root)) $criteria->addCondition('drug_root = "'.$model->drug_root.'"');


                if (!empty($model->brand_name)) $criteria->addCondition('brand_name = "'.$model->brand_name.'"');


                if (!empty($model->generic_name)) $criteria->addCondition('generic_name = "'.$model->generic_name.'"');


                if (!empty($model->unit_value)) $criteria->addCondition('unit_value = "'.$model->unit_value.'"');


                if (!empty($model->unit_measurement)) $criteria->addCondition('unit_measurement = "'.$model->unit_measurement.'"');


                if (!empty($model->unit_price)) $criteria->addCondition('unit_price = "'.$model->unit_price.'"');


                if (!empty($model->stat)) $criteria->addCondition('stat = "'.$model->stat.'"');


            }
            $session['PhDrug_records']=PhDrug::model()->findAll($criteria);


            $this->render('index',array(
                'model'=>$model,
            ));

        }

        /**
         * Manages all models.
         */
        public function actionAdmin()
        {
            $model=new PhDrug('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['PhDrug']))
                $model->attributes=$_GET['PhDrug'];

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
            $model=PhDrug::model()->findByPk($id);
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
            if(isset($_POST['ajax']) && $_POST['ajax']==='ph-drug-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }
        public function actionGenerateExcel()
        {
            $session=new CHttpSession;
            $session->open();

            if(isset($session['PhDrug_records']))
            {
                $model=$session['PhDrug_records'];
            }
            else
                $model = PhDrug::model()->findAll();


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

            if(isset($session['PhDrug_records']))
            {
                $model=$session['PhDrug_records'];
            }
            else
                $model = PhDrug::model()->findAll();



            $html = $this->renderPartial('expenseGridtoReport', array(
                'model'=>$model
            ), true);

            //die($html);

            $pdf = new TCPDF();
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor(Yii::app()->name);
            $pdf->SetTitle('PhDrug Report');
            $pdf->SetSubject('PhDrug Report');
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
            $pdf->Output("PhDrug_002.pdf", "I");
        }
    }
