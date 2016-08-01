<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 21-Jul-16
 * Time: 11:07 AM
 */
class T_PICKLOT_HEADER
{
    private $insertNewPicklot ='INSERT INTO dbo.T_PICKLOT_HEADER
        ( PICKLOT_DOCCODE ,
          PICKLOT_DOCDATE ,
          PICKLOT_BY ,
          
          SUM_QTY ,
          PICKLOT_STATUS
        )
VALUES  ( ? , -- PICKLOT_DOCCODE - nvarchar(50)
          GETDATE() , -- PICKLOT_DOCDATE - datetime
          ? , -- PICKLOT_BY - nvarchar(50)
          
          ? , -- SUM_QTY - decimal
          1  -- PICKLOT_STATUS - int
        )';

    private $getDatePick ='SELECT PICKLOT_DOCDATE FROM dbo.T_PICKLOT_HEADER WHERE PICKLOT_DOCCODE=?';

    /**
     * @return string
     */
    public function getGetDatePick()
    {
        return $this->getDatePick;
    }

    /**
     * @return string
     */
    public function getInsertNewPicklot()
    {
        return $this->insertNewPicklot;
    }
}