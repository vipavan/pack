<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 18-Jul-16
 * Time: 8:07 AM
 */
class T_SELLORDER_DETAIL_COST
{
    private $insertNewOrderDetailCost ='INSERT INTO dbo.T_SELLORDER_DETAIL_COST
        ( CID ,
          SO_DOCCODE ,
          SO_COST_SHIPMENT ,
          SO_COST_PACKING ,
          SO_COST_OTHER ,
          SO_SUMMARY ,
          LOGS_DATE ,
          LOGS_BY
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- SO_COST_SHIPMENT - decimal
          ? , -- SO_COST_PACKING - decimal
          ? , -- SO_COST_OTHER - decimal
          ? , -- SO_SUMMARY - decimal
          GETDATE() , -- LOGS_DATE - date
          ?  -- LOGS_BY - nvarchar(50)
        )';

    /**
     * @return string
     */
    public function getInsertNewOrderDetailCost()
    {
        return $this->insertNewOrderDetailCost;
    }
}