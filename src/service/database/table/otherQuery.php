<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 10:04 PM
 */
class otherQuery
{
    private $getLastIDCustomer = "SELECT TOP 1 CID FROM T_CUSTOMER ORDER BY CID DESC";

    private $getProvince = "SELECT * FROM dbo.G_PROVINCE";

    private $getDistrict = "SELECT * FROM dbo.G_DISTRICT";

    private $getGoodsFormCid   = "SELECT sh.CID,sh.GOODS_ID,sh.GOODS_SKU,sh.GOODS_NAME,sh.GOODS_QTY,sh.GOODS_QTY_UNIT,sh.GOODS_TYPE,sh.GOODS_TEMP,
sd.GOODS_BRAND,sd.GOODS_SERIES,sd.GOODS_COLOR,sd.GOODS_SIZE,sd.GOODS_VOL,sd.GOODS_VOL_UNIT,sd.GOODS_PRODUCTION_DATE,sd.GOODS_EXPIRED_DATE,
(SELECT WH_NAME FROM dbo.T_STORE_LOCATION INNER JOIN dbo.G_LOCATION ON G_LOCATION.LOCATION_ID = T_STORE_LOCATION.LOCATION_ID AND G_LOCATION.WH_ID = T_STORE_LOCATION.WH_ID INNER JOIN dbo.G_WAREHOUSE ON G_WAREHOUSE.WH_ID = T_STORE_LOCATION.WH_ID WHERE CID =sd.CID AND GOODS_ID =sh.GOODS_ID) AS WH_NAME,
(SELECT LOCATION_DESC FROM dbo.T_STORE_LOCATION INNER JOIN dbo.G_LOCATION ON G_LOCATION.LOCATION_ID = T_STORE_LOCATION.LOCATION_ID AND G_LOCATION.WH_ID = T_STORE_LOCATION.WH_ID WHERE CID =sd.CID AND GOODS_ID =sh.GOODS_ID) AS LOCATION_DESC,GOODS_TYPE_DESC
FROM  dbo.T_STORE_HEADER sh 
INNER JOIN  dbo.T_STORE_DETAIL sd ON sd.CID = sh.CID AND sd.GOODS_ID = sh.GOODS_ID
INNER JOIN dbo.G_GOODS_TYPE ON sh.GOODS_TYPE =GOODS_TYPE_ID
WHERE sh.CID = ?";

    private $getDataSellOrderCid ="SELECT sh.SO_DOCCODE,sh.SO_DOCDATE,r.RECV_NAME+' '+r.RECV_LASTNAME AS CNAME ,r.RECV_SHOPNAME,sr.RECV_ADDRESS,sr.RECV_SUBDISTRICT , sr.RECV_DISTRICT_DESC , sr.RECV_PROVINCE_DESC ,sr.RECV_ZIPCODE ,sh.SO_DOCSTATUS ,SUM(sdg.SO_ORDER_QTY) AS TOTAL ,r.RECV_PHONE ,r.RECV_TEL
FROM dbo.T_SELLORDER_HEADER sh 
INNER JOIN dbo.T_SELLORDER_RECEIVER sr ON sr.CID = sh.CID AND sr.RECVID = sh.RECVID AND sr.SO_DOCCODE = sh.SO_DOCCODE
INNER JOIN dbo.T_RECIEIVER r ON r.CID = sh.CID AND r.RECVID = sh.RECVID
INNER JOIN dbo.T_SELLORDER_DETAIL_GOODS sdg ON sdg.CID = sh.CID AND sdg.SO_DOCCODE = sh.SO_DOCCODE 
WHERE sh.CID =? and sh.SO_DOCSTATUS NOT IN(0) GROUP BY r.RECV_NAME + ' ' + r.RECV_LASTNAME ,
                                      sh.SO_DOCCODE ,
                                      sh.SO_DOCDATE ,
                                      r.RECV_SHOPNAME ,
                                      sr.RECV_ADDRESS ,
                                      sr.RECV_SUBDISTRICT ,
                                      sr.RECV_DISTRICT_DESC ,
                                      sr.RECV_PROVINCE_DESC ,
                                      sr.RECV_ZIPCODE ,
                                      sh.SO_DOCSTATUS ,
                                      r.RECV_PHONE ,
                                      r.RECV_TEL ";



    private $getAllPickTable = "SELECT DISTINCT ph.PICKLOT_DOCCODE ,ph.PICKLOT_DOCDATE,COUNT(pd.SO_DOCCODE) AS CSO ,SUM(pd.SO_ORDER_QTY) AS SUMITEM ,ph.PICKLOT_STATUS
FROM dbo.T_PICKLOT_HEADER ph 
INNER JOIN  dbo.T_PICKLOT_DETAIL pd ON pd.PICKLOT_DOCCODE = ph.PICKLOT_DOCCODE GROUP BY ph.PICKLOT_DOCCODE ,
                                                                                        ph.PICKLOT_DOCDATE ,
                                                                                        ph.PICKLOT_STATUS";

    /**
     * @return string
     */
    public function getGetLastIDCustomer()
    {
        return $this->getLastIDCustomer;
    }
    public function getGetProvince()
    {
        return $this->getProvince;
    }
    public function getGetDistrict()
    {
        return $this->getDistrict;
    }
    public function getGetGoodsFormCid()
    {
        return $this->getGoodsFormCid;
    }
    public function getGetDataSellOrderCid()
    {
        return $this->getDataSellOrderCid;
    }
    public function getGetAllPickTable()
    {
        return $this->getAllPickTable;
    }
}