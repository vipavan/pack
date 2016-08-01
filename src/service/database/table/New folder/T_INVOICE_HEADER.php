<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 27-Jul-16
 * Time: 3:37 PM
 */
class T_INVOICE_HEADER
{
    private $insertNewInvoice ="INSERT INTO dbo.T_INVOICE_HEADER
        ( INV_DOCCODE ,
          INV_DOCDATE ,
          INV_DOCBY ,
          INV_DOCREMARK ,
          SO_DOCCODE ,
          CID ,
          RECVID ,
          INV_DOCSTATUS,
          INV_REF
        )
VALUES  ( ? , -- INV_DOCCODE - nvarchar(50)
          GETDATE() , -- INV_DOCDATE - datetime
          ? , -- INV_DOCBY - nvarchar(50)
          ? , -- INV_DOCREMARK - nvarchar(100)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- CID - nvarchar(50)
          ? , -- RECVID - nvarchar(50)
          1  ,-- INV_DOCSTATUS - int
          ?
        )
";
    private $getAllInv ='
    SELECT 
ih.RUNNO ,
ih.INV_DOCCODE ,
ih.INV_DOCDATE ,
ih.INV_DOCBY ,
ih.INV_DOCREMARK ,
ih.SO_DOCCODE ,
ih.CID ,
ih.RECVID ,
ih.INV_DOCSTATUS ,
ih.INV_REF ,
id.INV_DOCCODE ,
id.SO_DOCCODE ,
id.CID ,
id.GOODS_ID ,
id.SO_ORDER_QTY ,
id.SO_ODER_QTY_UNIT ,
id.GOODS_LOCATION ,
c.RUNNO ,
c.CID ,
c.CUST_PREFIX_ID ,
c.CUST_PREFIX ,
c.CUST_NAME ,
c.CUST_LASTNAME ,
c.CUST_DESC ,
c.CUST_ADDRESS ,
c.CUST_SUBDISTRICT ,
c.CUST_DISTRICT_ID ,
c.CUST_DISTRICT_DESC ,
c.CUST_PROVINCE_ID ,
c.CUST_PROVINCE_DESC ,
c.CUST_ZIPCODE ,
c.CUST_TYPE_CODE ,
c.CUST_SHOPTYPE_ID ,
c.CUST_SHOPTYPE ,
c.CUST_SHOPNAME ,
c.CUST_STATUS ,
c.CUST_TEXID ,
c.CUST_PID ,
c.CUST_START_DATE ,
c.CUST_EXPIRE_DATE ,
c.CUST_TEL ,
c.CUST_PHONE ,
c.CUST_EMAIL ,
c.CUST_SHOPID ,
c.CUST_COMPUTE_NAME , ct.CID ,
                     ct.CUST_ADDRESS AS CUST_ADDRESS2,
                     ct.CUST_SUBDISTRICT AS CUST_SUBDISTRICT2,
                     ct.CUST_DISTRICT_ID ,
                     ct.CUST_DISTRICT_DESC AS CUST_DISTRICT_DESC2,
                     ct.CUST_PROVINCE_ID ,
                     ct.CUST_PROVINCE_DESC AS CUST_PROVINCE_DESC2,
                     ct.CUST_ZIPCODE AS CUST_ZIPCODE2, sr.CID ,
                                     sr.SO_DOCCODE ,
                                     sr.RECVID ,
                                     sr.RECV_ADDRESS ,
                                     sr.RECV_SUBDISTRICT ,
                                     sr.RECV_DISTRICT ,
                                     sr.RECV_DISTRICT_DESC ,
                                     sr.RECV_PROVINCE ,
                                     sr.RECV_PROVINCE_DESC ,
                                     sr.RECV_ZIPCODE,
                                                     r.CID ,
                                                     r.RECVID ,
                                                     r.RECV_NAME ,
                                                     r.RECV_LASTNAME ,
                                                     r.RECV_TEXID ,
                                                     r.RECV_TEL ,
                                                     r.RECV_PHONE ,
                                                     r.RECV_EMAIL ,
                                                     r.RECV_REMARK ,
                                                     r.RECV_SHOPNAME ,
                                                     r.RECV_PID,(SELECT SUM(sdg.SO_ORDER_QTY) FROM dbo.T_SELLORDER_DETAIL_GOODS sdg WHERE sdg.SO_DOCCODE= ih.SO_DOCCODE) AS SUMITEM
FROM dbo.T_INVOICE_HEADER ih 
INNER JOIN  dbo.T_INVOICE_DETAIL id ON id.INV_DOCCODE = ih.INV_DOCCODE
INNER JOIN dbo.T_CUSTOMER c ON	c.CID = ih.CID
LEFT JOIN dbo.T_CUSTOMER_TEXADDRESS ct ON ct.CID = c.CID
INNER JOIN  dbo.T_SELLORDER_RECEIVER sr ON sr.CID = ih.CID AND sr.RECVID = ih.RECVID AND sr.SO_DOCCODE = ih.SO_DOCCODE 
INNER JOIN dbo.T_RECIEIVER r ON r.CID = ih.CID';

    /**
     * @return string
     */
    public function getInsertNewInvoice()
    {
        return $this->insertNewInvoice;
    }

    /**
     * @return string
     */
    public function getGetAllInv()
    {
        return $this->getAllInv;
    }
}