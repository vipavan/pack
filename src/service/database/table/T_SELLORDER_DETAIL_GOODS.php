<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 18-Jul-16
 * Time: 8:03 AM
 */
class T_SELLORDER_DETAIL_GOODS
{
    private  $insertNewOrderDetailGoods ='INSERT INTO dbo.T_SELLORDER_DETAIL_GOODS
        ( CID ,
          SO_DOCCODE ,
          GOODS_ID ,
          SO_ORDER_QTY ,
          SO_GOODS_QTY ,
          SO_GOODS_QTY_UNIT ,
          SO_GOODS_STATUS ,
          SO_GOODS_REMARK
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- SO_ORDER_QTY - decimal
          ? , -- SO_GOODS_QTY - decimal
          ? , -- SO_GOODS_QTY_UNIT - nvarchar(50)
          ? , -- SO_GOODS_STATUS - int
          ?  -- SO_GOODS_REMARK - nvarchar(50)
        )';

    private $getDetailtoPick ="SELECT 
CID,SO_DOCCODE,GOODS_ID,SO_ORDER_QTY,SO_GOODS_QTY_UNIT

FROM dbo.T_SELLORDER_DETAIL_GOODS

WHERE CID = ? AND SO_DOCCODE =?";


    private $getDetailFromSo ='SELECT 
s.SO_DOCDATE,sdg.SO_DOCCODE,sdg.SO_ORDER_QTY,sdg.SO_GOODS_QTY_UNIT,sh.GOODS_SKU,sh.GOODS_NAME,sd.GOODS_BRAND,sd.GOODS_SERIES,sd.GOODS_COLOR,sd.GOODS_SIZE,sd.GOODS_VOL,sd.GOODS_VOL_UNIT,wh.WH_NAME,l.LOCATION_DESC
FROM dbo.T_SELLORDER_DETAIL_GOODS sdg 
INNER JOIN dbo.T_SELLORDER_HEADER s ON s.SO_DOCCODE = sdg.SO_DOCCODE
INNER JOIN  dbo.T_STORE_HEADER sh ON sh.CID = sdg.CID AND sh.GOODS_ID = sdg.GOODS_ID
INNER JOIN dbo.T_STORE_DETAIL sd ON sd.CID = sh.CID AND sd.GOODS_ID = sh.GOODS_ID
INNER JOIN dbo.T_STORE_LOCATION sl ON sl.CID = sh.CID AND sl.GOODS_ID = sh.GOODS_ID
left JOIN dbo.G_WAREHOUSE wh ON wh.WH_ID = sl.WH_ID
left JOIN dbo.G_LOCATION l ON l.LOCATION_ID = sl.LOCATION_ID AND l.WH_ID = sl.WH_ID
WHERE sdg.SO_DOCCODE =?';
    /**
     * @return string
     */
    public function getInsertNewOrderDetailGoods()
    {
        return $this->insertNewOrderDetailGoods;
    }
    public function getGetDetailtoPick()
    {
        return $this->getDetailtoPick;
    }

    /**
     * @return string
     */
    public function getGetDetailFromSo()
    {
        return $this->getDetailFromSo;
    }
}