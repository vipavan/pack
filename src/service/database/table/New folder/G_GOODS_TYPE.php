<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 24-Jul-16
 * Time: 7:01 AM
 */
class G_GOODS_TYPE
{
    private $insertNewType ="INSERT INTO dbo.G_GOODS_TYPE
        ( GOODS_TYPE_ID, GOODS_TYPE_DESC )
VALUES  ( ?, -- GOODS_TYPE_ID - nvarchar(50)
          ?  -- GOODS_TYPE_DESC - nvarchar(50)
          )";
    private $chkName ="SELECT COUNT(GOODS_TYPE_ID) AS C FROM dbo.G_GOODS_TYPE WHERE GOODS_TYPE_DESC = ?";
    private $updateType ="UPDATE dbo.G_GOODS_TYPE SET GOODS_TYPE_DESC=? WHERE GOODS_TYPE_ID =?";
    private $getNewType ="SELECT TOP 1 GOODS_TYPE_ID FROM dbo.G_GOODS_TYPE ORDER BY GOODS_TYPE_ID DESC";
    private $getAllTpye ="SELECT GOODS_TYPE_ID,GOODS_TYPE_DESC FROM dbo.G_GOODS_TYPE ORDER BY GOODS_TYPE_DESC ASC ";

    /**
     * @return string
     */
    public function getGetNewType()
    {
        return $this->getNewType;
    }
    public function getInsertNewType()
    {
        return $this->insertNewType;
    }
    public function getChkName()
    {
        return $this->chkName;
    }
    public function getGetAllTpye()
    {
        return $this->getAllTpye;
    }
    public function getUpdateType()
    {
        return $this->updateType;
    }
}