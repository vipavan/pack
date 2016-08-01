<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 27-Jul-16
 * Time: 1:37 PM
 */
class G_PREFIX
{
    private $getLastCode = 'SELECT TOP 1 PREFIX_CODE FROM dbo.G_PREFIX ORDER BY PREFIX_CODE DESC';

    private $insertNewPrefix ='INSERT INTO dbo.G_PREFIX
        ( PREFIX_CODE, PREFIX_DESC )
VALUES  ( ?, -- PREFIX_CODE - nvarchar(50)
          ?  -- PREFIX_DESC - nvarchar(50)
          )';
    private $getAllPrefix ='SELECT * FROM dbo.G_PREFIX';
    private $getPrefixByname ='SELECT * FROM dbo.G_PREFIX WHERE PREFIX_DESC =?';
    private $updatePrefix ='UPDATE dbo.G_PREFIX SET PREFIX_DESC =? WHERE PREFIX_CODE =? ';

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
    public function getInsertNewPrefix()
    {
        return $this->insertNewPrefix;
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

    /**
     * @return string
     */
    public function getGetLastCode()
    {
        return $this->getLastCode;
    }
}