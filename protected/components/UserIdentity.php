<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
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
        $user = Users::model()->getUser($this->username, $this->password);

        if ($user == null)
        {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
            return false;
        }
        else
        {
            Yii::app()->session['id'] = $user->usId;
            Yii::app()->session['level'] = $user->privilegeLevel;
            Yii::app()->session['fullname'] = $user->realName + " " + $user->realSurname;

            Config::model()->setLoginedByUserId($user->usId);

            $this->errorCode = self::ERROR_NONE;
            return true;
        }
	}
}