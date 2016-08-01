<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 9:10 PM
 */
class T_CUSTOMER
{
    private $insertNewCustomer = "INSERT INTO dbo.T_CUSTOMER
        ( CID ,
          CUST_PREFIX_ID,
          CUST_PREFIX,
          CUST_NAME ,
          CUST_LASTNAME ,
          CUST_DESC ,
          CUST_ADDRESS ,
          CUST_SUBDISTRICT ,
          CUST_DISTRICT_ID ,
          CUST_DISTRICT_DESC ,
          CUST_PROVINCE_ID ,
          CUST_PROVINCE_DESC ,
          CUST_ZIPCODE ,
          CUST_TYPE_CODE ,
          CUST_SHOPTYPE_ID,
          CUST_SHOPTYPE ,
          CUST_SHOPNAME ,
          CUST_STATUS ,
          CUST_TEXID ,
          CUST_PID,
          CUST_TEL ,
          CUST_PHONE ,
          CUST_EMAIL,
          CUST_SHOPID
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? ,
          ? ,
          ? , -- CUST_NAME - nvarchar(50)
          ? , -- CUST_LASTNAME - nvarchar(50)
          ? , -- CUST_DESC - nvarchar(50)
          ? , -- CUST_ADDRESS - nvarchar(100)
          ? , -- CUST_SUBDISTRICT - nvarchar(50)
          ? , -- CUST_DISTRICT_ID - nvarchar(50)
          ? , -- CUST_DISTRICT_DESC - nvarchar(50)
          ? , -- CUST_PROVINCE_ID - nvarchar(50)
          ? , -- CUST_PROVINCE_DESC - nvarchar(50)
          ? , -- CUST_ZIPCODE - nvarchar(5)
          ? , -- CUST_TYPE_CODE - nvarchar(50)
          ? ,
          ? ,
          ? , -- CUST_SHOPNAME - nvarchar(50)
          1 , -- CUST_STATUS - int
          ? , -- CUST_TEXID - nvarchar(50)
          ?  ,-- CUST_PID - nvarchar(50)
          ? , -- CUST_TEL - nvarchar(50)
          ? , -- CUST_PHONE - nvarchar(50)
          ? ,-- CUST_EMAIL - nvarchar(50)
          ? 
          
        )";

    private $activeCustomer = "UPDATE [dbo].[T_CUSTOMER] SET [CUST_STATUS] = 1 WHERE [CID]=?";

    private $deActiveCustomer = "UPDATE [dbo].[T_CUSTOMER] SET [CUST_STATUS] = 0 WHERE [CID]=?";

    private $getCustomer = "SELECT 
CID,CUST_NAME,CUST_LASTNAME,
CUST_SHOPNAME,CUST_ADDRESS,
CUST_SUBDISTRICT,CUST_DISTRICT_DESC,
CUST_PROVINCE_DESC,CUST_ZIPCODE,
CUST_PHONE,CUST_TEL,CUST_EMAIL,
CUST_TYPE_CODE,CUST_STATUS
FROM 
dbo.T_CUSTOMER  ";

    private $getDataCustomer = "SELECT * FROM dbo.T_CUSTOMER WHERE CID =?";

    private $updateDataCustomer = "UPDATE [dbo].[T_CUSTOMER]
   SET    CID =?,
          CUST_NAME =?,
          CUST_LASTNAME =?,
          CUST_DESC =?,
          CUST_ADDRESS =?,
          CUST_SUBDISTRICT =?,
          CUST_DISTRICT_ID =?,
          CUST_DISTRICT_DESC =?,
          CUST_PROVINCE_ID =?,
          CUST_PROVINCE_DESC =?,
          CUST_ZIPCODE =?,
          CUST_TYPE_CODE =?,
          CUST_SHOPNAME =?,
          CUST_STATUS =?,
          CUST_TEXID =?,
          CUST_PID=?,
          CUST_TEL =?,
          CUST_PHONE =?,
          CUST_EMAIL =?
 WHERE CID =?";


    private $removeCustomer ='DELETE FROM dbo.T_CUSTOMER WHERE CID =?';

    private $getCustomerO = "SELECT 
c1.CID,CUST_NAME,CUST_LASTNAME,
CUST_SHOPNAME,CUST_ADDRESS,
CUST_SUBDISTRICT,CUST_DISTRICT_DESC,
CUST_PROVINCE_DESC,CUST_ZIPCODE,
CUST_PHONE,CUST_TEL,CUST_EMAIL,
CUST_TYPE_CODE,CUST_STATUS,


(SELECT COUNT(sh.SO_DOCCODE) FROM dbo.T_SELLORDER_HEADER sh INNER JOIN  dbo.T_CUSTOMER c ON c.CID = sh.CID WHERE c1.CID=sh.CID AND sh.SO_DOCSTATUS = 1 GROUP BY sh.CID  ) AS C ,


COUNT(GOODS_ID) AS  CG
FROM 
dbo.T_CUSTOMER c1 
LEFT JOIN dbo.T_STORE_HEADER ON T_STORE_HEADER.CID = c1.CID
GROUP BY c1.CID ,
         CUST_NAME ,
         CUST_LASTNAME ,
         CUST_SHOPNAME ,
         CUST_ADDRESS ,
         CUST_SUBDISTRICT ,
         CUST_DISTRICT_DESC ,
         CUST_PROVINCE_DESC ,
         CUST_ZIPCODE ,
         CUST_PHONE ,
         CUST_TEL ,
         CUST_EMAIL ,
         CUST_TYPE_CODE ,
         CUST_STATUS
         ORDER BY C DESC";

    /**
     * @return string
     */
    public function getInsertNewCustomer()
    {
        return $this->insertNewCustomer;
    }
    public function getDeActiveCustomer()
    {
        return $this->deActiveCustomer;
    }
    public function getActiveCustomer()
    {
        return $this->activeCustomer;
    }
    public function getGetCustomer()
    {
        return $this->getCustomer;
    }
    public function getGetDataCustomer()
    {
        return $this->getDataCustomer;
    }
    public function getUpdateDataCustomer()
    {
        return $this->updateDataCustomer;
    }
    public function getRemoveCustomer()
    {
        return $this->removeCustomer;
    }
    public function getGetCustomerO()
    {
        return $this->getCustomerO;
    }

}