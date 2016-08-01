<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 12:43 PM
 */
class T_LOGS_LOGIN
{
    private  $insertLogsLogin = "insert into T_LOGS_LOGIN(LOGIN_USERNAME,CID,LOG_LAST_LOGIN_DATE,LOG_LAST_LOGIN_TIME) values(?,?,GETDATE(),GETDATE())";
    /**
     * @return string
     */
    public function getInsertLogsLogin()
    {
        return $this->insertLogsLogin;
    }
}