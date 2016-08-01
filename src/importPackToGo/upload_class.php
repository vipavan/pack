<?php

/**
 * Created by PhpStorm.
 * User: Artit
 * Date: 15/7/2559
 * Time: 9:57
 */
class upload_class
{
    private $insertT_STORE_HEADER="
    INSERT INTO dbo.T_STORE_HEADER
        ( CID ,
          GOODS_ID ,
          GOODS_SKU ,
          GOODS_NAME ,
          GOODS_DESC ,
          GOODS_TYPE ,
          GOODS_QTY ,
          GOODS_QTY_UNIT ,
          GOODS_STATUS ,
          GOODS_REMARK
        )
VALUES  ( ?,
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_SKU - nvarchar(50)
          ? , -- GOODS_NAME - nvarchar(50)
          ? , -- GOODS_DESC - nvarchar(50)
          ? , -- GOODS_TYPE - nvarchar(50)
          ? , -- GOODS_QTY - decimal
          ? , -- GOODS_QTY_UNIT - nvarchar(50)
          ? , -- GOODS_STATUS - int
          ?  -- GOODS_REMARK - nvarchar(50)
        )";


    private $insertT_STORE_DETAIL="INSERT INTO dbo.T_STORE_DETAIL
        ( CID ,
          GOODS_ID ,
          GOODS_BRAND ,
          GOODS_SERIES ,
          GOODS_COLOR ,
          GOODS_SIZE ,
          GOODS_VOL ,
          GOODS_VOL_UNIT ,
          GOODS_PRODUCTION_DATE ,
          GOODS_EXPIRED_DATE
        )
VALUES  ( ? , -- CID - nvarchar(50)
          ? , -- GOODS_ID - nvarchar(50)
          ? , -- GOODS_BRAND - nvarchar(50)
          ? , -- GOODS_SERIES - nvarchar(50)
          ? , -- GOODS_COLOR - nvarchar(50)
          ? , -- GOODS_SIZE - nvarchar(50)
          ? , -- GOODS_VOL - decimal
          ? , -- GOODS_VOL_UNIT - nvarchar(50)
          ?, -- GOODS_PRODUCTION_DATE - date
          ?
        )";

    private $insertIncomeHeader="INSERT INTO dbo.T_INCOME_HEADER
        ( INCOME_DOCCODE ,
          INCOME_DOCDATE ,
          INCOME_DOCBY ,
          INCOME_DOCREMARK ,
          CID
        )
VALUES  ( ? , -- INCOME_DOCCODE - nvarchar(50)
          GETDATE() , -- INCOME_DOCDATE - datetime
          ? , -- INCOME_DOCBY - nvarchar(50)
          ?, -- INCOME_DOCREMARK - nvarchar(50)
          ?  -- CID - nvarchar(50)
        )";

    private $insertIncomeDetail="INSERT INTO dbo.T_INCOME_DETAIL
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

    private  $currentIndex="SELECT * FROM dbo.M_DOC_INDEX WHERE dbo.M_DOC_INDEX.DOC_TYPE=?
AND M_DOC_INDEX.DOC_DATE=? AND DOC_MONTH=? AND DOC_YEAR=? AND CID=?";

    private $updateCuurentIndex="UPDATE  M_DOC_INDEX SET dbo.M_DOC_INDEX.DOC_INDEX=?
WHERE dbo.M_DOC_INDEX.DOC_TYPE=? AND M_DOC_INDEX.DOC_DATE=? AND DOC_MONTH=? AND DOC_YEAR=? AND CID=?";

    private $insertNewIndex="INSERT INTO dbo.M_DOC_INDEX
        ( DOC_TYPE ,
          DOC_DATE ,
          DOC_MONTH ,
          DOC_YEAR ,
          DOC_INDEX ,
          CID
        )
VALUES  ( ? , -- DOC_TYPE - nvarchar(50)
          ? , -- DOC_DATE - int
          ? , -- DOC_MONTH - int
          ? , -- DOC_YEAR - int
          ? , -- DOC_INDEX - int
          ?  -- CID - nvarchar(50)
        )";

    private $checkExistItems="SELECT * FROM  dbo.T_STORE_HEADER
INNER JOIN dbo.T_STORE_DETAIL ON T_STORE_DETAIL.GOODS_ID = T_STORE_HEADER.GOODS_ID AND T_STORE_DETAIL.CID = T_STORE_HEADER.CID
WHERE dbo.T_STORE_HEADER.GOODS_SKU=? AND GOODS_NAME=? AND T_STORE_DETAIL.GOODS_COLOR=? AND GOODS_SIZE=? AND GOODS_SERIES=?";

    private  $updateHeaderQty="	UPDATE dbo.T_STORE_HEADER
	SET T_STORE_HEADER.GOODS_QTY=?
	WHERE GOODS_ID=?";

    public function getInsertTSTOREHEADER()
    {
        return $this->insertT_STORE_HEADER;
    }

    public function getInsertTSTOREDETAIL()
    {
        return $this->insertT_STORE_DETAIL;
    }

    public function getCurrentIndex()
    {
        return $this->currentIndex;
    }

    public function getUpdateCuurentIndex()
    {
        return $this->updateCuurentIndex;
    }

    public function getInsertIncomeHeader()
    {
        return $this->insertIncomeHeader;
    }

    public function getInsertNewIndex()
    {
        return $this->insertNewIndex;
    }

    public function getInsertIncomeDetail()
    {
        return $this->insertIncomeDetail;
    }

    public function getCheckExistItems()
    {
        return $this->checkExistItems;
    }

    public function getUpdateHeaderQty()
    {
        return $this->updateHeaderQty;
    }

}