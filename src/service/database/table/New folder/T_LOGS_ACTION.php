<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 08-Jul-16
 * Time: 4:54 PM
 */
class T_LOGS_ACTION
{
    private $insertLogsInCome = "INSERT INTO dbo.T_LOGS_ACTION
        ( CID ,
          ACTION_ACTION ,
          ACTION_DATE ,
          ACTION_TIME ,
          ACTION_BY ,
          REF_NO ,
          GOODS_ID ,
          GOODS_QTY ,
          GOODS_QTY_UNIT,
          ACTION_REMARK
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- ACTION - nvarchar(50)
          GETDATE() , -- ACTION_DATE - date
          GETDATE() , -- ACTION_TIME - time
          ? , -- ACTION_BY - nvarchar(50)
          ? , -- REF_NO - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_QTY - decimal
          ?  ,-- GOODS_QTY_UNIT - nvarchar(50)
          ?
        )";

    /**
     * @return string
     */
    public function getInsertLogsInCome()
    {
        return $this->insertLogsInCome;
    }
}