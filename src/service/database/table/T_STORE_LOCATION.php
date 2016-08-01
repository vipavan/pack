<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 25-Jul-16
 * Time: 12:13 AM
 */
class T_STORE_LOCATION
{
    private $insertNewGoodsLocation = "INSERT INTO  dbo.T_STORE_LOCATION
        ( CID, GOODS_ID, WH_ID, LOCATION_ID )
VALUES  ( ?, -- CID - nvarchar(50)
          ?, -- GOODS_ID - nvarchar(50)
          ?, -- WH_ID - nvarchar(50)
          ?  -- LOCATION_ID - nvarchar(50)
          )";
    private $removeData = "DELETE FROM dbo.T_STORE_LOCATION WHERE CID =? AND GOODS_ID =?";
    private $getItemById ="SELECT * FROM  dbo.T_STORE_LOCATION WHERE CID = ? AND GOODS_ID =?";
    /**
     * @return string
     */
    public function getInsertNewGoodsLocation()
    {
        return $this->insertNewGoodsLocation;
    }
    public function getRemoveData()
    {
        return $this->removeData;
    }
    public function getGetItemById()
    {
        return $this->getItemById;
    }
}