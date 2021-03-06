<?php

    class ReportController extends RController{
        public function filters()
        {
            return array(
                        'rights',
                );
        }        


        public function actionListPatient(){

            if(isset($_POST['listPatient'])){
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];
                $Gender = $_POST['gender'];

                $model = new Patient();
                $patients = $model->listPatient($fromDate,$toDate,$Gender);

                $this->render('report',array('patient'=>$patients,'fromDate'=>$fromDate,'toDate'=>$toDate,'gender'=>$Gender));
            }
            else{
                $this->render('report');
            }
        }


        public function actionMenu(){
            $this->render('menu');
        }



        public function actionCashBook(){

            if(isset($_POST['cashBook'])){
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];      
                $model=new PhBill();
                $ph = $model->ph($fromDate,$toDate);
                   $this->render('cashBook',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate));
            }
            else
            {
                $this->render('cashBook');
            }
         
        }


        public function actionDoctorReport(){
            
                $model = new DoctorCharge();
                $doctorName = '';
            if(isset($_POST['doctorReport'])){
                
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];                
                $a = $_POST['doctor'];
               
                $dReport = $model ->doctorReport($a,$fromDate,$toDate);
                
                $datass = User::model()->findByPk($a);
            $doctorName = $datass->uName;

            }
            else{
                $dReport='';
                $employeeId ='';
                $fromDate='';
                $toDate='';
            }
            $dropDown = $model->selectEmployeeId();
//            $docotrName = $model->doctorName($a);
            if(!isset($a))
                $a=0;
            $this->render('doctor',array('docId'=>$a,'doctorReport'=>$dReport,'var'=>$dropDown,'fromDate'=>$fromDate,'toDate'=>$toDate,'doctorName'=>$doctorName));
        }
   

    public function actiondoctorName()
        {
            $docId=$_POST['docId'];
     
           $dataD = User::model()->findByPk($docId);
           if(!empty($dataD))
           echo ucfirst($dataD->uName);      }
    
    
    
    
     public function actionGeneratePatientPdf(){
       
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];
        $Gender = $_POST['gend'];
        $model = new Patient();
        $patients = $model->listPatient($fromDate,$toDate,$Gender);

        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');
        $mPDF1->WriteHTML($this->renderPartial('pdfReport',array('patient'=>$patients,'fromDate'=>$fromDate,'toDate'=>$toDate,'gender'=>$Gender), true));
        $mPDF1->Output();
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');
    }
    
     public function actionGenerateCashBookPdf(){
         
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];
        $model=new PhBill();
        $ph = $model->ph($fromDate,$toDate);
        
        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');
        $mPDF1->WriteHTML( $this->renderPartial('pdfCashBook',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate), true));
        $mPDF1->Output();
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');
    }
    
     public function actionGenerateDoctorPdf(){
     
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];
        
        $model = new DoctorCharge();
        $a = $_POST['doctor'];
        $dReport = $model ->doctorReport($a,$fromDate,$toDate);
        $dropDown = $model->selectEmployeeId();

        $datass = User::model()->findByPk($a);
        $doctorName = $datass->uName;
        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');
        $mPDF1->WriteHTML($this->renderPartial('pdfDoctor',array('doctorReport'=>$dReport,'var'=>$dropDown,'fromDate'=>$fromDate,'toDate'=>$toDate,'doctorName'=>$doctorName), true));
        $mPDF1->Output();
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');
    }
    
     public function actionGeneratePatientExcel(){
       
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];
        $Gender = $_POST['gend'];
        $model = new Patient();
        $patients = $model->listPatient($fromDate,$toDate,$Gender);

        $this->renderPartial('patientExcel',array('patients'=>$patients,'Gender'=>$Gender,'fromDate'=>$fromDate,'toDate'=>$toDate));
}
     
     public function actionGenerateDoctorExcel(){
         
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];        
        $model = new DoctorCharge();
        $a = $_POST['doctor'];
        $dReport = $model ->doctorReport($a,$fromDate,$toDate);
        $dropDown = $model->selectEmployeeId();
        $datass = User::model()->findByPk($a);
        $doctorName = $datass->uName;

        $this->renderPartial('doctorExcel',array('doctorReport'=>$dReport,'var'=>$dropDown,'fromDate'=>$fromDate,'toDate'=>$toDate,'doctorName'=>$doctorName));

     }
     
     public function actionGenerateCashBookExcel(){         
               
        $fromDate = $_POST['fdate'];
        $toDate = $_POST['tdate'];
        $model=new PhBill();
        $ph = $model->ph($fromDate,$toDate);
        
        $this->renderPartial('cashBookExcel',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate));
     }     
     }
   