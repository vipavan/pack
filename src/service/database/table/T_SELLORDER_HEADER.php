<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 18-Jul-16
 * Time: 7:59 AM
 */
class T_SELLORDER_HEADER
{
    private $insertNewOrder = 'INSERT INTO dbo.T_SELLORDER_HEADER
        ( CID ,
          SO_DOCCODE ,
          SO_DOCDATE ,
          SO_DOCSTATUS ,
          SO_DODATE ,
          SO_PODATE ,
          SO_TRANTRIPDATE ,
          RECVID ,
          SO_SHIPMENT_METHOD ,
          SO_SHIPMENT_TRACKING ,
          SO_REF ,
          SO_REMARK ,
          SO_DOC_BY
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- SO_DOCDATE - datetime
          ? , -- SO_DOCSTATUS - int
          ? , -- SO_DODATE - date
          ? , -- SO_PODATE - date
          ? , -- SO_TRANTRIPDATE - date
          ? , -- RECVID - nvarchar(50)
          ? , -- SO_SHIPMENT_METHOD - nvarchar(50)
          ? , -- SO_SHIPMENT_TRACKING - nvarchar(50)
          ? , -- SO_REF - nvarchar(50)
          ? , -- SO_REMARK - nvarchar(100)
          ?  -- SO_DOC_BY - nvarchar(50)
        )';

    private $getNewOrderTable ='SELECT sh.CID,
sh.SO_DOCCODE,
sh.SO_DOCDATE,
c.CUST_NAME,
c.CUST_LASTNAME,
c.CUST_SHOPNAME,
sh.RECVID,
(SELECT SUM(sdg.SO_GOODS_QTY) FROM dbo.T_SELLORDER_DETAIL_GOODS sdg WHERE sdg.CID=sh.CID AND sdg.SO_DOCCODE =sh.SO_DOCCODE) AS SUMITEM

FROM dbo.T_SELLORDER_HEADER sh
INNER JOIN dbo.T_CUSTOMER c ON c.CID = sh.CID

WHERE sh.SO_DOCSTATUS=1';

    private $updateStatusAfterPicklot ='UPDATE dbo.T_SELLORDER_HEADER SET SO_DOCSTATUS = 2 WHERE CID = ? AND SO_DOCCODE =? ';

    private $updateStatusDiscard ='UPDATE dbo.T_SELLORDER_HEADER SET SO_DOCSTATUS = 0 WHERE CID = ? AND SO_DOCCODE =? ';

    private $GetCustomerFromSO ='SELECT T_CUSTOMER.RUNNO ,
       T_CUSTOMER.CID ,
       T_CUSTOMER.CUST_PREFIX_ID ,
       T_CUSTOMER.CUST_PREFIX ,
       T_CUSTOMER.CUST_NAME ,
       T_CUSTOMER.CUST_LASTNAME ,
       T_CUSTOMER.CUST_DESC ,
       T_CUSTOMER.CUST_ADDRESS ,
       T_CUSTOMER.CUST_SUBDISTRICT ,
       T_CUSTOMER.CUST_DISTRICT_ID ,
       T_CUSTOMER.CUST_DISTRICT_DESC ,
       T_CUSTOMER.CUST_PROVINCE_ID ,
       T_CUSTOMER.CUST_PROVINCE_DESC ,
       T_CUSTOMER.CUST_ZIPCODE ,
       T_CUSTOMER.CUST_TYPE_CODE ,
       T_CUSTOMER.CUST_SHOPTYPE_ID ,
       T_CUSTOMER.CUST_SHOPTYPE ,
       T_CUSTOMER.CUST_SHOPNAME ,
       T_CUSTOMER.CUST_STATUS ,
       T_CUSTOMER.CUST_TEXID ,
       T_CUSTOMER.CUST_PID ,
       T_CUSTOMER.CUST_START_DATE ,
       T_CUSTOMER.CUST_EXPIRE_DATE ,
       T_CUSTOMER.CUST_TEL ,
       T_CUSTOMER.CUST_PHONE ,
       T_CUSTOMER.CUST_EMAIL ,
       T_CUSTOMER.CUST_SHOPID ,
       T_CUSTOMER.CUST_COMPUTE_NAME,
	   T_CUSTOMER_TEXADDRESS.CID ,
       T_CUSTOMER_TEXADDRESS.CUST_ADDRESS  as CUST_ADDRESS2,
       T_CUSTOMER_TEXADDRESS.CUST_SUBDISTRICT as CUST_SUBDISTRICT2,
       T_CUSTOMER_TEXADDRESS.CUST_DISTRICT_ID ,
       T_CUSTOMER_TEXADDRESS.CUST_DISTRICT_DESC  as CUST_DISTRICT_DESC2,
       T_CUSTOMER_TEXADDRESS.CUST_PROVINCE_ID ,
       T_CUSTOMER_TEXADDRESS.CUST_PROVINCE_DESC  as CUST_PROVINCE_DESC2,
       T_CUSTOMER_TEXADDRESS.CUST_ZIPCODE as CUST_ZIPCODE2
FROM dbo.T_SELLORDER_HEADER INNER JOIN dbo.T_CUSTOMER ON T_CUSTOMER.CID = T_SELLORDER_HEADER.CID LEFT JOIN dbo.T_CUSTOMER_TEXADDRESS ON T_CUSTOMER_TEXADDRESS.CID = T_CUSTOMER.CID
WHERE SO_DOCCODE =?';
    /**
     * @return string
     */
    public function getInsertNewOrder()
    {
        return $this->insertNewOrder;
    }
    public function getGetNewOrderTable()
    {
        return $this->getNewOrderTable;
    }
    public function getUpdateStatusAfterPicklot()
    {
        return $this->updateStatusAfterPicklot;
    }
    public function getUpdateStatusDiscard()
    {
        return $this->updateStatusDiscard;
    }

    /**
     * @return string
     */
    public function getGetCustomerFromSO()
    {
        return $this->GetCustomerFromSO;
    }
}