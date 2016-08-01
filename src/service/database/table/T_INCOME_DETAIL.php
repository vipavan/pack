<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 08-Jul-16
 * Time: 4:51 PM
 */
class T_INCOME_DETAIL
{
    private $insertNewInComeDetail  = "INSERT INTO dbo.T_INCOME_DETAIL
        ( INCOME_DOCCODE ,
          CID ,
          GOODS_ID ,
          GOODS_QTY ,
          GOODS_QTY_UNIT
		  
        )
VALUES  ( ? , -- INCOME_DOCCODE - nvarchar(50)
          ? , -- CID - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_QTY - decimal
          ?  -- GOODS_QTY_UNIT - nvarchar(50)
		  
        )";

    /**
     * @return string
     */
    public function getInsertNewInComeDetail()
    {
        return $this->insertNewInComeDetail;
    }
}