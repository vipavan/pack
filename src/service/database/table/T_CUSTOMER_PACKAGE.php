<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 9:23 PM
 */
class T_CUSTOMER_PACKAGE
{
    private $insertNewCustomerPackage   = "";

    private $updateCustomerPackage = "";
    /**
     * @return string
     */
    public function getInsertNewCustomerPackage()
    {
        return $this->insertNewCustomerPackage;
    }
    public function getUpdateCustomerPackage()
    {
        return $this->updateCustomerPackage;
    }
}