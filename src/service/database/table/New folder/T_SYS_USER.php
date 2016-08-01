<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 9:24 AM
 */
class T_SYS_USER
{
    private $insertNewUser = "INSERT INTO [dbo].[T_SYS_USER]
           ([LOGIN_USERNAME]
           ,[LOGIN_PASSWORD]
           ,[FULLNAME]
           ,[USER_TYPE_CODE]
           ,[CID])
     VALUES
          (?,?,?,?,?)";

    private $activeUser = "UPDATE [dbo].[T_SYS_USER]
   SET [USER_STATUS] = 1
 WHERE RUNNO=? and LOGIN_USERNAME = ?  and CID = ? and [USER_STATUS] = 0";

    private $deActiveUser = "UPDATE [dbo].[T_SYS_USER]
   SET [USER_STATUS] = 0
 WHERE RUNNO=? and LOGIN_USERNAME = ?  and CID = ? and [USER_STATUS] = 1";

    private $updateUser = "UPDATE [dbo].[T_SYS_USER]
   SET [LOGIN_PASSWORD] = ?
      ,[FULLNAME] = ?
      ,[USER_TYPE_CODE] = ?
      ,[CID] = ?
 WHERE RUNNO = ? and LOGIN_USERNAME =?";

    private $getLogin = "SELECT * FROM T_SYS_USER u WHERE u.LOGIN_USERNAME =? AND u.LOGIN_PASSWORD=? and u.USER_STATUS =1";

    private $updateLastLogin = "UPDATE  T_SYS_USER u SET u.LAST_LOGIN = GETDATE() WHERE  u.LOGIN_USERNAME =? AND u.LOGIN_PASSWORD=?";

    private $getDataLoginCust ="SELECT LOGIN_USERNAME,LOGIN_PASSWORD FROM dbo.T_SYS_USER WHERE CID =? ";

    private $updatePassword = "UPDATE dbo.T_SYS_USER SET
LOGIN_PASSWORD = ? 
WHERE LOGIN_USERNAME= ? AND CID =?";

    private $getAllUser = "SELECT u.*,c.CUST_SHOPNAME FROM dbo.T_SYS_USER u LEFT JOIN dbo.T_CUSTOMER c ON c.CID = u.CID ";

    private $gstCheckUser = "SELECT COUNT(LOGIN_USERNAME) AS C FROM dbo.T_SYS_USER WHERE LOGIN_USERNAME =?";

    private $getCid = "SELECT  CID  FROM dbo.T_SYS_USER WHERE LOGIN_USERNAME= ? ";

    private $updateUserEdit = "UPDATE [dbo].[T_SYS_USER]
   SET [LOGIN_USERNAME] = ?
 WHERE  LOGIN_USERNAME =? ";

    private $getUseradmin = "SELECT  FULLNAME  FROM dbo.T_SYS_USER WHERE LOGIN_USERNAME= ?";

    private $activeCust = "UPDATE [dbo].[T_SYS_USER]
   SET [USER_STATUS] = 1
 WHERE CID = ? ";

    private $deActiveCust = "UPDATE [dbo].[T_SYS_USER]
   SET [USER_STATUS] = 0
 WHERE CID = ? ";
    /**
     * @return string
     */
    public function getInsertNewUser()
    {
        return $this->insertNewUser;
    }
    public function getActiveUser()
    {
        return $this->activeUser;
    }
    public function getDeActiveUser()
    {
        return $this->deActiveUser;
    }
    public function getUpdateUser()
    {
        return $this->updateUser;
    }
    public function getGetLogin()
    {
        return $this->getLogin;
    }
    public function getUpdateLastLogin()
    {
        return $this->updateLastLogin;
    }
    public function getGetDataLoginCust()
    {
        return $this->getDataLoginCust;
    }
    public function getUpdatePassword()
    {
        return $this->updatePassword;
    }
    public function getGetAllUser()
    {
        return $this->getAllUser;
    }
    public function getGstCheckUser()
    {
        return $this->gstCheckUser;
    }
    public function getGetCid()
    {
        return $this->getCid;
    }
    public function getUpdateUserEdit()
    {
        return $this->updateUserEdit;
    }
    public function getGetUseradmin()
    {
        return $this->getUseradmin;
    }
    public function getActiveCust()
    {
        return $this->activeCust;
    }
    public function getDeActiveCust()
    {
        return $this->deActiveCust;
    }
}