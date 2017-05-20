<?php

    class MediumSetupController extends Controller
    {
        public function actionIndex()
        {
            $Dose = new MedDose;
            $Form = new MedForm;
            $Frequency = new MedFrequency;
            $Route = new MedRoute;
            $Type = new MedType;

            $this->render('index',array(
                'Dose'=>$Dose,
                'Form'=>$Form,
                'Frequency'=>$Frequency,
                'Route'=>$Route,
                'Type'=>$Type,
            ));
        }

        // For creating new Setup
        public function actionCreateDose()
        {
            $Dose = new MedDose;

            if(isset($_POST['MedDose']))
            {
                $Dose->attributes=$_POST['MedDose'];
                if($Dose->save())
                {
                    $this->redirect(array('index'));
                }
            }
            $this->render('createDose',array(
                'Dose'=>$Dose,
            ));
        }

        public function actionCreateForm()
        {
            $Form = new MedForm;

            if(isset($_POST['MedForm']))
            {
                $Form->attributes=$_POST['MedForm'];
                if($Form->save())
                {
                    $this->redirect(array('index'));
                }
            }

            $this->render('createForm',array(
                'Form'=>$Form,
            ));
        }

        public function actionCreateFrequency()
        {
            $Frequency = new MedFrequency;

            if(isset($_POST['MedFrequency']))
            {
                $Frequency->attributes=$_POST['MedFrequency'];
                if($Frequency->save())
                {
                    $this->redirect(array('index'));
                }
            }

            $this->render('createFrequency',array(
                'Frequency'=>$Frequency,
            ));
        }

        public function actionCreateRoute()
        {
            $Route = new MedRoute;

            if(isset($_POST['MedRoute']))
            {
                $Route->attributes=$_POST['MedRoute'];
                if($Route->save())
                {
                    $this->redirect(array('index'));
                }
            }

            $this->render('createRoute',array(
                'Route'=>$Route,
            ));
        }

        public function actionCreateType()
        {
            $Type = new MedType;

            if(isset($_POST['MedType']))
            {
                $Type->attributes=$_POST['MedType'];
                if($Type->save())
                {
                    $this->redirect(array('index'));
                }
            }

            $this->render('createType',array(
                'Type'=>$Type,
            ));
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