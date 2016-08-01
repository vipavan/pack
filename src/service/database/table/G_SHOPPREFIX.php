<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 27-Jul-16
 * Time: 1:37 PM
 */
class G_SHOPPREFIX
{
    private $getLastCode = 'SELECT TOP 1 SHOPPREFIX_CODE FROM dbo.G_SHOPPREFIX ORDER BY SHOPPREFIX_CODE DESC';
    private $insertNewPrefix ='INSERT INTO dbo.G_SHOPPREFIX
        ( SHOPPREFIX_CODE ,
          SHOPPREFIX_DESC
        )
VALUES  ( ? , -- SHOPPREFIX_CODE - nvarchar(50)
          ?  -- SHOPPREFIX_DESC - nvarchar(50)
        )';
    private $getAllPrefix ='SELECT * FROM dbo.G_SHOPPREFIX';
    private $getPrefixByname ='SELECT * FROM dbo.G_SHOPPREFIX WHERE SHOPPREFIX_DESC =?';
    private $updatePrefix ='UPDATE dbo.G_SHOPPREFIX SET SHOPPREFIX_DESC =? WHERE SHOPPREFIX_CODE =? ';

    /**
     * @return string
     */
    public function getGetLastCode()
    {
        return $this->getLastCode;
    }

    /**
     * @return string
     */
    public function getInsertNewPrefix()
    {
        return $this->insertNewPrefix;
    }

    /**
     * @return string
     */
    public function getGetAllPrefix()
    {
        return $this->getAllPrefix;
    }

    /**
     * @return string
     */
    public function getGetPrefixByname()
    {
        return $this->getPrefixByname;
    }

    /**
     * @return string
     */
    public function getUpdatePrefix()
    {
        return $this->updatePrefix;
    }
}