<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 23-Jul-16
 * Time: 10:46 AM
 */
class G_LOCATION
{
    private $getNewLocation = "SELECT TOP 1 LOCATION_ID FROM dbo.G_LOCATION WHERE WH_ID=?  ORDER BY LOCATION_ID DESC";
    private $insertNewLocation ="INSERT INTO dbo.G_LOCATION
        ( LOCATION_ID ,
          LOCATION_DESC ,
          LOCATION_REF ,
          WH_ID
        )
VALUES  ( ? , -- LOCATION_ID - nvarchar(50)
          ? , -- LOCATION_DESC - nvarchar(50)
          ? , -- LOCATION_REF - nvarchar(50)
          ?  -- WH_ID - nvarchar(50)
        )";
    private $chkLocation    ="SELECT COUNT(LOCATION_ID) AS C FROM dbo.G_LOCATION WHERE WH_ID=? AND LOCATION_DESC =?";
    private $updateLocation ="UPDATE dbo.G_LOCATION SET LOCATION_DESC =?,LOCATION_REF=? WHERE WH_ID =? AND LOCATION_ID =?";

    private $getComboLocation   = 'SELECT * FROM dbo.G_LOCATION WHERE WH_ID=?';

    /**
     * @return string
     */
    public function getGetNewLocation()
    {
        return $this->getNewLocation;
    }
    public function getInsertNewLocation()
    {
        return $this->insertNewLocation;
    }
    public function getChkLocation()
    {
        return $this->chkLocation;
    }
    public function getUpdateLocation()
    {
        return $this->updateLocation;
    }
    public function getGetComboLocation()
    {
        return $this->getComboLocation;
    }
}