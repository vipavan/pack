<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 08-Jul-16
 * Time: 4:51 PM
 */
class T_INCOME_HEADER
{

    
    ///////////////////////// insert  income data ///////////////////////////
    
    private $insertNewInComeHeader = "INSERT INTO dbo.T_INCOME_HEADER
        ( INCOME_DOCCODE ,
          INCOME_DOCDATE ,
          INCOME_DOCBY ,
          INCOME_DOCREMARK ,
          CID
        )
VALUES  ( ? , -- INCOME_DOCCODE - nvarchar(50)
          GETDATE() , -- INCOME_DOCDATE - datetime
          ? , -- INCOME_DOCBY - nvarchar(50)
          ? , -- INCOME_DOCREMARK - nvarchar(50)
          ?  -- CID - nvarchar(50)
        )";



    /**
     * @return string
     */
    public function getInsertNewInComeHeader()
    {
        return $this->insertNewInComeHeader;
    }

}