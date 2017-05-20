<?php

class DischargeController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}


    public function actionListPatient()
    {

        $model = new Patient();
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Discharge']))
            $model->attributes=$_GET['Discharge'];

        $this->render('listPatient',array(
            'model'=>$model,
        ));
    }

    public function actionReport($pid)
   {
       $model = new Discharge();

       $this->render('report', array('model' => $model,
           'pid'=>$pid));
    }

    public function actionDischarge($pid)
    {
        $model = new Discharge();
        $dis = Discharge::model()->findByAttributes(array('pid'=>$pid));
        var_dump();exit();
        if(isset($_POST['dir']))
        {
            $model->attributes=$_POST['dir'];
            var_dump($model); exit();
            if($model->save())
            {
                var_dump($dis);exit();
            }
        }
        $this->render('discharge', array('model' => $model,
                                        'pid'=>$pid));
    }

    public function actionPdf($pid)
    {
        $val=Patient::model()->findByAttributes(array('id'=>$pid));
        $val1=Subjective::model()->findByAttributes(array('pid'=>$pid));
        $val2=LabResult::model()->findByAttributes(array('pid'=>$pid));

        Yii::app()->session['pid'] = $pid;
        $session = Yii::app()->session;
        $pid     = $session['pid'];

        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');
        $mPDF1->WriteHTML($this->renderPartial('pdf',array('pat'=>$val,'sub'=>$val1,'lab'=>$val2), true));
        $mPDF1->Output();
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');

        unset (Yii::app()->session['pid']);

    }

}