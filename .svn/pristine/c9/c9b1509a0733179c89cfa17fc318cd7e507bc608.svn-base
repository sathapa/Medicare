<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 

	/*protected function loadUser($id=null)
	{
		if($this->_model === null)
		{
			if($id!==null)
				$this->_model=Users::model()->findByPk($id);
		}
		return $this->_model;
	}*/
	
	function isAdmin()
	{
		$user = Yii::app()->user->name;
		$role = Yii::app()->user->getState('role');

		if($user == null)
        {
            return $this->_model;
        }
        else
        {
            if($role == 'admin')
            {
                return $user;
            }
            else
            {
                return $this->_model;
            }
        }
	}
	
	function isStudent()
	{
		$user = Yii::app()->user->name;
		$role = Yii::app()->user->getState('role');

		if($user == null)
        {
            return $this->_model;
        }
        else
        {
            if($role == 'student')
            {
                return $user;
            }
            else
            {
                return $this->_model;
            }
        }
	}

    function empID()
    {
        $eid = Yii::app()->user->getState('eid');
        return $eid;
    }
}
?>

