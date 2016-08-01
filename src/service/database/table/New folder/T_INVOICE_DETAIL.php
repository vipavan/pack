<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 27-Jul-16
 * Time: 3:37 PM
 */
class T_INVOICE_DETAIL
{
    private $insertNewInvoice ="INSERT INTO dbo.T_INVOICE_DETAIL
	        ( INV_DOCCODE ,
	          SO_DOCCODE ,
	          CID ,
	          GOODS_ID ,
	          SO_ORDER_QTY ,
	          SO_ODER_QTY_UNIT 
	        )
	VALUES  ( ? , -- INV_DOCCODE - nvarchar(50)
	          ? , -- SO_DOCCODE - nvarchar(50)
	          ? , -- CID - nvarchar(50)
	          ? , -- GOODS_ID - nvarchar(50)
	          ? , -- SO_ORDER_QTY - decimal
	          ?  -- SO_ODER_QTY_UNIT - nvarchar(50)
	        )";

    /**
     * @return string
     */
    public function getInsertNewInvoice()
    {
        return $this->insertNewInvoice;
    }
}