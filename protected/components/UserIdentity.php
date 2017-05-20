<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	public $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$data = User::model()->findByAttributes(array('uName'=>$this->username));

        if($data === null)
        {
            $this->_id = 'user Null';
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }

        else if(sha1(md5($this->password)) != $data->uPass)
        {
            $this->_id = $this->id;
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }

        else
        {
            $this->_id = $data->id;
            $this->setState('eid',$data->emp_id);
            $this->setState('role',$data->role);
            $this->errorCode=self::ERROR_NONE;
        }

        return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
}