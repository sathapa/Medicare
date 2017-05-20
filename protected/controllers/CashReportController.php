<?php

 class CashReportController extends Controller{
 
        public function actionCashBook(){

            if(isset($_POST['cashBook'])){
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];      
                $model=new PhBill();
                $ph = $model->ph($fromDate,$toDate);
                   $this->render('cashBook',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate));
            }
            else{
          //      $ph='';
            //    $fromDate='';
              //  $toDate='';
                 $this->render('cashBook');
            }
         
        }
        
         public function actionGenerate(){
         
                
            
          # mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf();
 
        # You can easily override default constructor's params
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');
 
        # render (full page)
        $mPDF1->WriteHTML($this->render('report',array(), true));
 
        # Load a stylesheet
//        $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/main.css');
//        $mPDF1->WriteHTML($stylesheet, 1);
// 
//        # renderPartial (only 'view' of current controller)
//        $mPDF1->WriteHTML($this->renderPartial('index', array(), true));
 
        # Renders image
//        $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
 
        ////////////////////////////////////////////////////////////////////////////////////
 
        # HTML2PDF has very similar syntax
     //  $html2pdf = Yii::app()->ePdf->HTML2PDF();
      //  $html2pdf->WriteHTML($this->renderPartial('index', array(), true));
      //  $html2pdf->Output();
 
        ////////////////////////////////////////////////////////////////////////////////////
 
        # Example from HTML2PDF wiki: Send PDF by email
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');
        $mail = new PJmail();
        $mail->setAllFrom('webmaster@my_site.net', "My personal site");
        $mail->addrecipient('mail_user@my_site.net');
        $mail->addsubject("Example sending PDF");
        $mail->text = "This is an example of sending a PDF file";
        $mail->addbinattachement("my_document.pdf", $content_PDF);
        $res = $mail->sendmail();
    }
     
     
     
 }