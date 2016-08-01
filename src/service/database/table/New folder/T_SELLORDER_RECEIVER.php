<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 25-Jul-16
 * Time: 11:26 AM
 */
class T_SELLORDER_RECEIVER
{
    private  $insertNewReceiver ='INSERT INTO dbo.T_SELLORDER_RECEIVER
        ( CID ,
          SO_DOCCODE ,
          RECVID ,
          RECV_ADDRESS ,
          RECV_SUBDISTRICT ,
          RECV_DISTRICT ,
          RECV_DISTRICT_DESC ,
          RECV_PROVINCE ,
          RECV_PROVINCE_DESC ,
          RECV_ZIPCODE
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- SO_DOCCODE - nvarchar(50)
          ? , -- RECVID - nvarchar(50)
          ? , -- RECV_ADDRESS - nvarchar(300)
          ? , -- RECV_SUBDISTRICT - nvarchar(50)
          ? , -- RECV_DISTRICT - nvarchar(50)
          ? , -- RECV_DISTRICT_DESC - nvarchar(50)
          ? , -- RECV_PROVINCE - nvarchar(50)
          ? , -- RECV_PROVINCE_DESC - nvarchar(50)
          ?  -- RECV_ZIPCODE - nvarchar(50)
        )';

    private $getRecvFromSO ='SELECT RECV_NAME,RECV_LASTNAME,RECV_SHOPNAME,RECV_TEXID,RECV_TEL,RECV_PHONE,RECV_EMAIL,T_SELLORDER_RECEIVER.RECV_ADDRESS,T_SELLORDER_RECEIVER.RECV_SUBDISTRICT,T_SELLORDER_RECEIVER.RECV_DISTRICT_DESC,T_SELLORDER_RECEIVER.RECV_PROVINCE_DESC,T_SELLORDER_RECEIVER.RECV_ZIPCODE
FROM dbo.T_SELLORDER_RECEIVER INNER JOIN dbo.T_RECIEIVER ON T_RECIEIVER.CID = T_SELLORDER_RECEIVER.CID AND T_RECIEIVER.RECVID = T_SELLORDER_RECEIVER.RECVID
WHERE SO_DOCCODE=?';
    /**
     * @return string
     */
    public function getInsertNewReceiver()
    {
        return $this->insertNewReceiver;
    }

    /**
     * @return string
     */
    public function getGetRecvFromSO()
    {
        return $this->getRecvFromSO;
    }
}