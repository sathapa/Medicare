<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    public $logMessage = NULL;

    public $writeLog = true;

   /* protected function afterAction($action)
    {
        if($this->writeLog)
        {
            $sql = 'INSERT INTO tbl_logs(username, logtime, controller, action, details) VALUES (\''.Yii::app()->user->id.'\',\''.date("Y-m-d H:i:s").'\',\''.$this->getId().'\',\''.$this->action->getId().'\',\''.$this->logMessage.'\')';
            $command = Yii::app()->db->createCommand($sql);
            $command->execute();
        }
    }*/

    protected function afterSave()
    {
        if($this->isNewRecord)
        {
            $sql = 'INSERT INTO tbl_logs(username, logtime, controller, action, details) VALUES (\''.Yii::app()->user->id.'\',\''.date("Y-m-d H:i:s").'\',\''.'hh'.'\',\''.'ygh'.'\',\''.'fgdfh'.'\')';
            $command = Yii::app()->db->createCommand($sql);
            $command->execute();
        }
    }
}