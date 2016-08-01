<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 21-Jul-16
 * Time: 11:09 AM
 */
class T_PICKLOT_DETAIL
{
    private $insertNewPicklotDetail='INSERT INTO dbo.T_PICKLOT_DETAIL
        ( PICKLOT_DOCCODE ,
          SO_DOCCODE ,
          CID ,
          GOODS_ID ,
          SO_ORDER_QTY ,
          SO_ORDER_QTY_UNIT
        )
VALUES  ( ? , -- PICKLOT_DOCCODE - nvarchar(50)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- CID - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- SO_ORDER_QTY - decimal
          ?  -- SO_ORDER_QTY_UNIT - nvarchar(50)
        )';

    private $pickDetail = 'SELECT sh.SO_DOCCODE,
SO_DOCDATE,
CUST_NAME,
CUST_LASTNAME,c.CUST_SHOPNAME,c.CUST_ADDRESS,c.CUST_SUBDISTRICT,c.CUST_DISTRICT_DESC,c.CUST_PROVINCE_DESC,c.CUST_ZIPCODE,
RECV_NAME,
RECV_LASTNAME,
RECV_SHOPNAME ,
(SELECT sr.RECV_ADDRESS FROM dbo.T_SELLORDER_RECEIVER sr WHERE sr.CID =sh.CID AND sr.SO_DOCCODE = sh.SO_DOCCODE AND sr.RECVID = sh.RECVID) AS RECV_ADDRESS,
(SELECT sr.RECV_SUBDISTRICT FROM dbo.T_SELLORDER_RECEIVER sr WHERE sr.CID =sh.CID AND sr.SO_DOCCODE = sh.SO_DOCCODE AND sr.RECVID = sh.RECVID) AS RECV_SUBDISTRICT,
(SELECT sr.RECV_DISTRICT_DESC FROM dbo.T_SELLORDER_RECEIVER sr WHERE sr.CID =sh.CID AND sr.SO_DOCCODE = sh.SO_DOCCODE AND sr.RECVID = sh.RECVID) AS RECV_DISTRICT_DESC,
(SELECT sr.RECV_PROVINCE_DESC FROM dbo.T_SELLORDER_RECEIVER sr WHERE sr.CID =sh.CID AND sr.SO_DOCCODE = sh.SO_DOCCODE AND sr.RECVID = sh.RECVID) AS RECV_PROVINCE_DESC,
(SELECT sr.RECV_ZIPCODE FROM dbo.T_SELLORDER_RECEIVER sr WHERE sr.CID =sh.CID AND sr.SO_DOCCODE = sh.SO_DOCCODE AND sr.RECVID = sh.RECVID) AS RECV_ZIPCODE,

GOODS_SKU,
GOODS_NAME,
GOODS_BRAND,
GOODS_SERIES,
GOODS_COLOR,
GOODS_SIZE,
GOODS_VOL,
GOODS_VOL_UNIT,
SO_ORDER_QTY,
SO_ORDER_QTY_UNIT
FROM dbo.T_PICKLOT_DETAIL pd
INNER JOIN  dbo.T_CUSTOMER c ON c.CID = pd.CID
INNER JOIN dbo.T_SELLORDER_HEADER sh ON sh.CID = pd.CID AND sh.SO_DOCCODE = pd.SO_DOCCODE
left JOIN dbo.T_RECIEIVER r ON r.CID = pd.CID AND r.RECVID = sh.RECVID

INNER JOIN dbo.T_STORE_HEADER sth ON sth.CID = pd.CID AND sth.GOODS_ID = pd.GOODS_ID
left JOIN dbo.T_STORE_DETAIL std ON std.CID = sth.CID AND std.GOODS_ID = sth.GOODS_ID
WHERE pd.PICKLOT_DOCCODE =?';
    /**
     * @return string
     */
    public function getInsertNewPicklotDetail()
    {
        return $this->insertNewPicklotDetail;
    }
    public function getPickDetail()
    {
        return $this->pickDetail;
    }
}