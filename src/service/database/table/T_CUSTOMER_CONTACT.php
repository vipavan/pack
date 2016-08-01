<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 22-Jul-16
 * Time: 6:38 AM
 */
class T_CUSTOMER_CONTACT
{
    private $insertNewCustomer ="INSERT INTO dbo.T_CUSTOMER_CONTACT
        ( CID ,
          CUST_CONTACT_NAME ,
          CUST_CONTACT_JOB ,
          CUST_CONTACT_PHONE ,
          CUST_CONTACT_EMAIL
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- CUST_CONTACT_NAME - nvarchar(50)
          ? , -- CUST_CONTACT_LASTNAME - nvarchar(50)
          ? , -- CUST_CONTACT_NUMBER - nvarchar(50)
          ?  -- CUST_CONTACT_EMAIL - nvarchar(50)
        )";

    private $removeCustomer ='DELETE FROM dbo.T_CUSTOMER_CONTACT WHERE CID =?';
    private $getDataCustomer = "SELECT * FROM dbo.T_CUSTOMER_CONTACT WHERE CID =?";

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