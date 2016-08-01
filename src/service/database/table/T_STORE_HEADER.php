<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 08-Jul-16
 * Time: 4:52 PM
 */
class T_STORE_HEADER
{
    private $insertNewGoods = "
    INSERT INTO dbo.T_STORE_HEADER
        ( CID ,
          GOODS_ID ,
          GOODS_SKU ,
          GOODS_NAME ,
          GOODS_DESC ,
          GOODS_TYPE ,
          GOODS_QTY ,
          GOODS_QTY_UNIT ,
          GOODS_STATUS ,
          GOODS_REMARK ,
          GOODS_MIN ,
          GOODS_TEMP ,
          GOODS_BARCODE ,
          GOODS_PIC_URL
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_SKU - nvarchar(50)
          ? , -- GOODS_NAME - nvarchar(50)
          ? , -- GOODS_DESC - nvarchar(50)
          ? , -- GOODS_TYPE - nvarchar(50)
          ? , -- GOODS_QTY - decimal
          ? , -- GOODS_QTY_UNIT - nvarchar(50)
          1 , -- GOODS_STATUS - int
          ? , -- GOODS_REMARK - nvarchar(50)
          ? , -- GOODS_MIN - nvarchar(50)
          ? , -- GOODS_TEMP - decimal
          ? , -- GOODS_BARCODE - nvarchar(50)
          ?  -- GOODS_PIC_URL - nvarchar(50)
        )";

    private $updateGoods = "";

    private $getDataInCome = "";

    private $getChkItemInStore = "SELECT COUNT(T_STORE_HEADER.GOODS_ID) AS C ,T_STORE_HEADER.GOODS_ID
FROM dbo.T_STORE_HEADER  INNER JOIN  dbo.T_STORE_DETAIL ON T_STORE_DETAIL.CID = T_STORE_HEADER.CID AND T_STORE_DETAIL.GOODS_ID = T_STORE_HEADER.GOODS_ID
WHERE 
   GOODS_SKU  = ? AND
   GOODS_NAME = ? AND
   GOODS_DESC = ? AND
   GOODS_TYPE = ? AND
   GOODS_BARCODE =? AND
   GOODS_BRAND  = ? AND
   GOODS_SERIES = ? AND
   GOODS_COLOR = ? AND
   GOODS_SIZE = ? AND
   GOODS_VOL = ? AND
   GOODS_VOL_UNIT = ? AND
   GOODS_PRODUCTION_DATE = ? AND
   GOODS_EXPIRED_DATE = ? AND
   T_STORE_HEADER.CID=?
   GROUP BY T_STORE_HEADER.GOODS_ID";

    private $getChkItemInStoreN = "SELECT T_STORE_HEADER.GOODS_ID 
FROM dbo.T_STORE_HEADER  INNER JOIN  dbo.T_STORE_DETAIL ON T_STORE_DETAIL.CID = T_STORE_HEADER.CID AND T_STORE_DETAIL.GOODS_ID = T_STORE_HEADER.GOODS_ID
WHERE 
   GOODS_SKU  = ? AND
   GOODS_NAME = ? AND
   GOODS_DESC = ? AND
   GOODS_TYPE = ? AND
   GOODS_BARCODE =? AND
   GOODS_BRAND  = ? AND
   GOODS_SERIES = ? AND
   GOODS_COLOR = ? AND
   GOODS_SIZE = ? AND
   GOODS_VOL = ? AND
   GOODS_VOL_UNIT = ? AND
   GOODS_PRODUCTION_DATE = ? AND
   GOODS_EXPIRED_DATE = ? ";

    private $updateTempQty='UPDATE  dbo.T_STORE_HEADER SET GOODS_TEMP = GOODS_TEMP - ? WHERE CID =? AND GOODS_ID =?';

    private $updateFromPicklotCreate = "UPDATE dbo.T_STORE_HEADER SET GOODS_QTY = GOODS_QTY - ? , GOODS_TEMP = GOODS_QTY - ? WHERE CID =? AND GOODS_ID =?";

    private $removeData = "DELETE FROM dbo.T_STORE_HEADER WHERE CID =? AND GOODS_ID =?";
    private $updateQty = 'UPDATE  dbo.T_STORE_HEADER SET GOODS_QTY = GOODS_QTY + ? , GOODS_TEMP = GOODS_TEMP + ? WHERE CID =? AND GOODS_ID =?';

    private $getItemById ="SELECT * FROM  dbo.T_STORE_HEADER WHERE CID = ? AND GOODS_ID =?";


    /**
     * @return string
     */
    public function getInsertNewGoods()
    {
        return $this->insertNewGoods;
    }

    public function getUpdateGoods()
    {
        return $this->updateGoods;
    }

    public function getGetDataInCome()
    {
        return $this->getDataInCome;
    }

    public function getGetChkItemInStore()
    {
        return $this->getChkItemInStore;
    }
    public function getUpdateTempQty()
    {
        return $this->updateTempQty;
    }
    public function getUpdateFromPicklotCreate()
    {
        return $this->updateFromPicklotCreate;
    }
    public function getRemoveData()
    {
        return $this->removeData;
    }
    public function getGetChkItemInStoreN()
    {
        return $this->getChkItemInStoreN;
    }
    public function getUpdateQty()
    {
        return $this->updateQty;
    }
    public function getGetItemById()
    {
        return $this->getItemById;
    }
}