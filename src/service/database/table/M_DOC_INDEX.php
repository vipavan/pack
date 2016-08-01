<?php

/**
 * Created by PhpStorm.
 * User: EMRYS
 * Date: 06-Jul-16
 * Time: 1:29 PM
 */
class M_DOC_INDEX
{

    private $insertNewMonth = "INSERT INTO [dbo].[M_DOC_INDEX]
           ([DOC_TYPE]
           ,[DOC_DATE]
           ,[DOC_MONTH]
           ,[DOC_YEAR]
           ,[DOC_INDEX]
           ,[CID])
     VALUES
            (?,?,?,?,?,?)";

    /**
     * @return string
     */
    public function getInsertNewMonth()
    {
        return $this->insertNewMonth;
    }

    ///////////////////////// GET ////////////////////////////////

    private $lastStepIndex = "SELECT DOC_TYPE,DOC_DATE,DOC_MONTH,DOC_YEAR,DOC_INDEX FROM dbo.M_DOC_INDEX WHERE DOC_TYPE = ? AND CID =? AND DOC_DATE =? AND DOC_MONTH =? AND DOC_YEAR=? ORDER BY  DOC_INDEX DESC";

    /**
     * @return string
     */
    public function getLastStepIndex()
    {
        return $this->lastStepIndex;
    }

    private $updateIndex = "UPDATE dbo.M_DOC_INDEX SET DOC_INDEX = ? WHERE DOC_TYPE = ? AND CID =?";

    /**
     * @return string
     */
    public function getUpdateIndex()
    {
        return $this->updateIndex;
    }
    

}