<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 22-Jul-16
 * Time: 6:40 AM
 */
class T_CUSTOMER_TEXADDRESS
{
    private $insertNewCustomer ="INSERT INTO dbo.T_CUSTOMER_TEXADDRESS
        ( CID ,
          CUST_ADDRESS ,
          CUST_SUBDISTRICT ,
          CUST_DISTRICT_ID ,
          CUST_DISTRICT_DESC ,
          CUST_PROVINCE_ID ,
          CUST_PROVINCE_DESC ,
          CUST_ZIPCODE
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- CUST_ADDRESS - nvarchar(50)
          ? , -- CUST_SUBDISTRICT - nvarchar(50)
          ? , -- CUST_DISTRICT_ID - nvarchar(50)
          ? , -- CUST_DISTRICT_DESC - nvarchar(50)
          ? , -- CUST_PROVINCE_ID - nvarchar(50)
          ? , -- CUST_PROVINCE_DESC - nvarchar(50)
          ?  -- CUST_ZIPCODE - nvarchar(50)
        )";

    private $removeCustomer ='DELETE FROM dbo.T_CUSTOMER_TEXADDRESS WHERE CID =?';
    private $getDataCustomer = "SELECT * FROM dbo.T_CUSTOMER_TEXADDRESS WHERE CID =?";

    /**
     * @return string
     */
    public function getInsertNewCustomer()
    {
        return $this->insertNewCustomer;
    }
    public function getRemoveCustomer()
    {
        return $this->removeCustomer;
    }
    public function getGetDataCustomer()
    {
        return $this->getDataCustomer;
    }
}