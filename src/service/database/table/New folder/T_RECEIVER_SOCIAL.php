<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 23-Jul-16
 * Time: 9:46 AM
 */
class T_RECEIVER_SOCIAL
{
    private $insertNewReceiver ="INSERT INTO dbo.T_RECEIVER_SOCIAL
        ( CID ,
          RECV_ID ,
          FACEBOOK_URL ,
          INSTAGRAM_ID ,
          LINE_ID ,
          WECHAT_ID ,
          WHATSAPP_ID ,
          PAGE_URL
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- RECV_ID - nvarchar(50)
          ? , -- FACEBOOK_URL - nvarchar(50)
          ? , -- INSTAGRAM_ID - nvarchar(50)
          ? , -- LINE_ID - nvarchar(50)
          ? , -- WECHAT_ID - nvarchar(50)
          ? , -- WHATSAPP_ID - nvarchar(50)
          ?  -- PAGE_URL - nvarchar(50)
        )";
    private $removeRecv = 'DELETE FROM dbo.T_RECEIVER_SOCIAL WHERE CID =? AND RECV_ID=?';
    /**
     * @return string
     */
    public function getInsertNewReceiver()
    {
        return $this->insertNewReceiver;
    }
    public function getRemoveRecv()
    {
        return $this->removeRecv;
    }
}