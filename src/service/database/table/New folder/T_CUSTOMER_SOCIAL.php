<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 22-Jul-16
 * Time: 6:40 AM
 */
class T_CUSTOMER_SOCIAL
{
    private $insertNewCustomerS ="INSERT INTO dbo.T_CUSTOMER_SOCIAL
        ( CID ,
          FACEBOOK_URL ,
          INSTAGRAM_ID ,
          LINE_ID ,
          WECHAT_ID ,
          WHATSAPP_ID ,
          PAGE_URL
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- FACEBOOK_URL - nvarchar(50)
          ? , -- INSTAGRAM_ID - nvarchar(50)
          ? , -- LINE_ID - nvarchar(50)
          ? , -- WECHAT_ID - nvarchar(50)
          ? , -- WHATAPP_ID - nvarchar(50)
          ?  -- PAGE_URL - nvarchar(50)
        )";

    private $removeCustomer ='DELETE FROM dbo.T_CUSTOMER_SOCIAL WHERE CID =?';
    private $getDataCustomer = "SELECT * FROM dbo.T_CUSTOMER_SOCIAL WHERE CID =?";

    /**
     * @return string
     */
    public function getInsertNewCustomerS()
    {
        return $this->insertNewCustomerS;
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