<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 23-Jul-16
 * Time: 10:33 AM
 */
class G_WAREHOUSE
{
    private $getNewWH = "SELECT TOP 1 WH_ID FROM dbo.G_WAREHOUSE ORDER BY WH_ID DESC";
    private $insertNewWH    ="INSERT INTO dbo.G_WAREHOUSE
        ( WH_ID, WH_NAME )
VALUES  ( ?, -- WH_ID - nvarchar(50)
          ?  -- WH_NAME - nvarchar(50)
          )";
    private $chkNameWH      ="SELECT COUNT(WH_ID) AS C FROM dbo.G_WAREHOUSE WHERE WH_NAME = ?";
    private $updateWH       ="UPDATE dbo.G_WAREHOUSE SET WH_NAME =? WHERE WH_ID =?";
    private $getComboWH     ="SELECT WH_ID,WH_NAME FROM dbo.G_WAREHOUSE ORDER BY WH_NAME ASC";
    private $getAllWHLO     ="SELECT wh.WH_ID,wh.WH_NAME,lo.LOCATION_ID,lo.LOCATION_DESC

FROM dbo.G_WAREHOUSE wh 
LEFT JOIN dbo.G_LOCATION lo ON lo.WH_ID = wh.WH_ID 
ORDER BY wh.WH_NAME ASC,lo.LOCATION_DESC ASC ";

    private $getWHbyId = "SELECT WH_NAME AS C FROM dbo.G_WAREHOUSE WHERE WH_ID = ?";

    /**
     * @return string
     */

    public function getGetNewWH()
    {
        return $this->getNewWH;
    }
    public function getInsertNewWH()
    {
        return $this->insertNewWH;
    }
    public function getChkNameWH()
    {
        return $this->chkNameWH;
    }
    public function getUpdateWH()
    {
        return $this->updateWH;
    }
    public function getGetComboWH()
    {
        return $this->getComboWH;
    }
    public function getGetAllWHLO()
    {
        return $this->getAllWHLO;
    }
    public function getGetWHbyId()
    {
        return $this->getWHbyId;
    }
}