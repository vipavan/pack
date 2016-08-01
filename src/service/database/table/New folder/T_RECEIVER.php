<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 9:38 PM
 */
class T_RECEIVER
{
    private $insertNewReceiver = "INSERT INTO dbo.T_RECIEIVER
        ( CID ,
          RECVID ,
          RECV_NAME ,
          RECV_LASTNAME ,
          RECV_TEXID ,
          RECV_ADDRESS ,
          RECV_SUBDISTRICT ,
          RECV_DISTRICT ,
          RECV_DISTRICT_DESC ,
          RECV_PROVINCE ,
          RECV_PROVINCE_DESC ,
          RECV_ZIPCODE ,
          RECV_TEL ,
          RECV_PHONE ,
          RECV_EMAIL ,
          RECV_REMARK ,
          RECV_SHOPNAME ,
          RECV_PID
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- RECVID - nvarchar(50)
          ? , -- RECV_NAME - nvarchar(50)
          ? , -- RECV_LASTNAME - nvarchar(50)
          ? , -- RECV_TEXID - nvarchar(50)
          ? , -- RECV_ADDRESS - nvarchar(100)
          ? , -- RECV_SUBDISTRICT - nvarchar(50)
          ? , -- RECV_DISTRICT - nvarchar(50)
          ? , -- RECV_DISTRICT_DESC - nvarchar(50)
          ? , -- RECV_PROVINCE - nvarchar(50)
          ? , -- RECV_PROVINCE_DESC - nvarchar(50)
          ? , -- RECV_ZIPCODE - nvarchar(50)
          ? , -- RECV_TEL - nvarchar(50)
          ? , -- RECV_PHONE - nvarchar(50)
          ? , -- RECV_EMAIL - nvarchar(50)
          ? , -- RECV_REMARK - nvarchar(100)
          ? , -- RECV_SHOPNAME - nvarchar(50)
          ?  -- RECV_PID - nvarchar(50)
        )";

    private $updateReceiver = "UPDATE dbo.T_RECIEIVER SET 
          RECV_NAME =?,
          RECV_LASTNAME =?,
          RECV_TEXID =?,
          RECV_ADDRESS =?,
          RECV_SUBDISTRICT =?,
          RECV_DISTRICT =?,
          RECV_DISTRICT_DESC =?,
          RECV_PROVINCE =?,
          RECV_PROVINCE_DESC =?,
          RECV_ZIPCODE =?,
          RECV_TEL =?,
          RECV_PHONE =?,
          RECV_EMAIL =?,
          RECV_REMARK =?,
          RECV_SHOPNAME =?,
          RECV_PID
WHERE CID = ? AND RECVID = ?";

    private $getRecvAllinCid ="SELECT 
RECVID,
RECV_NAME+' '+RECV_LASTNAME AS RNAME,
RECV_ADDRESS +' '+ DISTRICT_DESC + ' '+PROVINCE_DESC + ' '+ RECV_ZIPCODE AS ADDR,
RECV_TEL AS TEL,RECV_PHONE AS PHONE,
RECV_EMAIL,RECV_SHOPNAME


 FROM dbo.T_RECIEIVER INNER JOIN dbo.G_DISTRICT ON RECV_DISTRICT = DISTRICT_CODE
 INNER JOIN dbo.G_PROVINCE ON G_PROVINCE.PROVINCE_CODE =RECV_PROVINCE AND G_PROVINCE.PROVINCE_CODE = G_DISTRICT.PROVINCE_CODE
 
 WHERE CID=?";

    private $getDatainfoRecv = "SELECT 
*
 FROM dbo.T_RECIEIVER INNER JOIN  dbo.T_RECEIVER_SOCIAL  ON T_RECEIVER_SOCIAL.CID = T_RECIEIVER.CID AND T_RECEIVER_SOCIAL.RECV_ID = RECVID
 WHERE T_RECIEIVER.CID =? AND RECVID = ?";

    private $removeRecv = 'DELETE FROM dbo.T_RECIEIVER WHERE CID = ? AND RECVID =?';

    /**
     * @return string
     */
    public function getInsertNewReceiver()
    {
        return $this->insertNewReceiver;
    }

    public function getUpdateReceiver()
    {
        return $this->updateReceiver;
    }
    public function getGetRecvAllinCid()
    {
        return $this->getRecvAllinCid;
    }
    public function getGetDatainfoRecv()
    {
        return $this->getDatainfoRecv;
    }
    public function getRemoveRecv()
    {
        return $this->removeRecv;
    }
}