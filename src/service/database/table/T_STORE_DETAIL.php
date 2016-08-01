<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 08-Jul-16
 * Time: 4:52 PM
 */
class T_STORE_DETAIL
{
    private $insertNewGoodsDetail = "INSERT INTO dbo.T_STORE_DETAIL
        ( CID ,
          GOODS_ID ,
          GOODS_BRAND ,
          GOODS_SERIES ,
          GOODS_COLOR ,
          GOODS_SIZE ,
          GOODS_VOL ,
          GOODS_VOL_UNIT ,
          GOODS_PRODUCTION_DATE ,
          GOODS_EXPIRED_DATE ,
          GOODS_PRICE
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_BRAND - nvarchar(50)
          ? , -- GOODS_SERIES - nvarchar(50)
          ? , -- GOODS_COLOR - nvarchar(50)
          ? , -- GOODS_SIZE - nvarchar(50)
          ? , -- GOODS_VOL - decimal
          ? , -- GOODS_VOL_UNIT - nvarchar(50)
          ?, -- GOODS_PRODUCTION_DATE - date
          ? , -- GOODS_EXPIRED_DATE - date
          ?  -- GOODS_PRICE - decimal
        )";

    private $removeData = "DELETE FROM dbo.T_STORE_DETAIL WHERE CID =? AND GOODS_ID =?";
    private $getItemById ="SELECT * FROM  dbo.T_STORE_DETAIL WHERE CID = ? AND GOODS_ID =?";

    /**
     * @return string
     */
    public function getInsertNewGoodsDetail()
    {
        return $this->insertNewGoodsDetail;
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