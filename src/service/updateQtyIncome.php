<?php

///////////////// s head//////////////
$CID = $_REQUEST['CID'];
$GOODS_ID = $_REQUEST['GOODS_ID'];
$GOODS_SKU = $_REQUEST['GOODS_SKU'];
$GOODS_NAME = $_REQUEST['GOODS_NAME'];
$GOODS_DESC = $_REQUEST['GOODS_DESC'];
$GOODS_TYPE = $_REQUEST['GOODS_TYPE'];
$GOODS_QTY = $_REQUEST['GOODS_QTY'];
$GOODS_QTY_UNIT = $_REQUEST['GOODS_QTY_UNIT'];
$GOODS_STATUS = $_REQUEST['GOODS_STATUS'];
$GOODS_REMARK = $_REQUEST['GOODS_REMARK'];
$GOODS_MIN = $_REQUEST['GOODS_MIN'];
$GOODS_TEMP = $_REQUEST['GOODS_TEMP'];
$GOODS_BARCODE = $_REQUEST['GOODS_BARCODE'];
$GOODS_PIC_URL = $_REQUEST['GOODS_PIC_URL'];

////////////////s detail /////////////////////
$GOODS_BRAND = $_REQUEST['GOODS_BRAND'];
$GOODS_SERIES = $_REQUEST['GOODS_SERIES'];
$GOODS_COLOR = $_REQUEST['GOODS_COLOR'];
$GOODS_SIZE = $_REQUEST['GOODS_SIZE'];
$GOODS_VOL = $_REQUEST['GOODS_VOL'];
$GOODS_VOL_UNIT = $_REQUEST['GOODS_VOL_UNIT'];
$GOODS_PRODUCTION_DATE = $_REQUEST['GOODS_PRODUCTION_DATE'];
$GOODS_EXPIRED_DATE = $_REQUEST['GOODS_EXPIRED_DATE'];
$GOODS_PRICE= $_REQUEST['GOODS_PRICE'];


//////////////////s location //////////////
$WH_ID = $_REQUEST['WH_ID'];
$LOCATION_ID =$_REQUEST['LOCATION_ID'];
////// ohter
$loginid = $_REQUEST['loginid'];
$remark = '';


//$CID = 'C16072400010';
////GOODS_ID = $_REQUEST['GOODS_ID'];
//$GOODS_SKU = '';
//$GOODS_NAME = '';
//$GOODS_DESC = '';
//$GOODS_TYPE = '';
//$GOODS_QTY = 0;
//$GOODS_QTY_UNIT = '';
//$GOODS_STATUS = 1;
//$GOODS_REMARK = '';
//$GOODS_MIN = '';
//$GOODS_TEMP = 0;
//$GOODS_BARCODE = '';
//$GOODS_PIC_URL = '';
//
//////////////////s detail /////////////////////
//$GOODS_BRAND = '';
//$GOODS_SERIES = '';
//$GOODS_COLOR = '';
//$GOODS_SIZE = '';
//$GOODS_VOL = 0;
//$GOODS_VOL_UNIT = '';
//$GOODS_PRODUCTION_DATE = '';
//$GOODS_EXPIRED_DATE = '';
//$GOODS_PRICE= 0;
//
//
////////////////////s location //////////////
//$WH_ID = '';
//$LOCATION_ID = '';
//////// ohter
//$loginid = 'test';

//echo json_encode($CID);

include "./database/connectdb.php";
include "./database/table/T_STORE_HEADER.php";
include "./database/table/T_STORE_DETAIL.php";
include "./database/table/T_STORE_LOCATION.php";
include "./database/table/T_INCOME_HEADER.php";
include "./database/table/T_INCOME_DETAIL.php";
include "./database/table/T_LOGS_ACTION.php";
include "./database/table/M_DOC_INDEX.php";


$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {

        /////////////////////// insert new  item //////////////////////////

//        echo json_encode($goodsid);
        $cRecv = new T_STORE_HEADER();
        $query = $cRecv->getUpdateQty();
        $param = array(&$GOODS_QTY,&$GOODS_TEMP,&$CID,&$GOODS_ID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
////
//
//
//
//        echo json_encode("SUCCESS");
////
////        echo json_encode($goodsid);
//////        ////////////////////////////////// insert Income Data ////////////////////////////
        $type = "IN";
        $year   = date("y");
        $month  = date("m");
        $today  = date("d");
        $genRecvCode = new M_DOC_INDEX();
        $query = $genRecvCode-> getLastStepIndex();
        $param = array(&$type,&$CID,&$today,&$month,&$year);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data2[] = $row;
        }

        if (empty($data2)) {
            $new = 1;
            $number = sprintf('%05d', $new);
            $goodsincome = 'IN' . $year . $month . $today .$CID. $number;
            $query = $genRecvCode->getInsertNewMonth();
            $param = array(&$type, &$today, &$month, &$year, &$new, &$CID);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        } else {
            if (sprintf('%02d', intval($data2[0]['DOC_DATE'])) != $today) {
                $new = 1;
                $number = sprintf('%05d', $new);
                $goodsincome = 'IN' . $year . $month . $today.$CID . $number;
                $query = $genRecvCode->getInsertNewMonth();
                $param = array(&$type, &$today, &$month, &$year, &$new, &$CID);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            } else {
                $lastRecord = substr($data2[0]['DOC_INDEX'], -5);
                $num = intval($lastRecord) + 1;
                $number = sprintf('%05d', $num);
                $goodsincome = 'IN' . $year . $month . $today.$CID . $number;
                $query = $genRecvCode->getUpdateIndex();
                $param = array(&$num, &$type, &$CID);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            }
        }
//        echo json_encode($goodsincome);
        $insertInComeHeader = new T_INCOME_HEADER();
        $query = $insertInComeHeader->getInsertNewInComeHeader();
        $param = array(&$goodsincome, &$loginid, &$GOODS_REMARK, &$CID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
        $insertInComeDetail = new T_INCOME_DETAIL();
        $query = $insertInComeDetail->getInsertNewInComeDetail();
        $param = array(&$goodsincome, &$CID, &$GOODS_ID,&$GOODS_QTY,&$GOODS_QTY_UNIT);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
////        echo json_encode($goodsincome);
////
////
//////        echo json_encode($goodsincome);
//////////////////////////////////////// insert Log Action ///////////////////////////////////
        $ACTION = 'INSERT';
        $insertNewAction = new T_LOGS_ACTION();
        $query = $insertNewAction->getInsertLogsInCome();
        $param = array(&$CID, &$ACTION,  &$loginid,&$goodsincome,&$GOODS_ID,  &$GOODS_QTY, &$GOODS_QTY_UNIT,&$remark);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
////        echo json_encode($goodsincome);
//
        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success");
        echo json_encode($return_val);
    } catch (Exception $ex) {
        $message = "";
        if (($errors = sqlsrv_errors()) != null) {
            foreach ($errors as $error) {
                $SQLSTATE = "SQLSTATE: " . $error['SQLSTATE'];
                $code = "code: " . $error['code'];
                $message = "message: " . $error['message'];
            }
        }
        sqlsrv_rollback($conn);
        sqlsrv_close($conn);
        $result = array("status" => "0", "result" => 'FAILED#' . __FILE__ . '#' . __FUNCTION__ . '#' . __LINE__ . '#' . $ex->getLine() . "#" . $ex->getMessage() . $message);
        echo json_encode($result);
    }
} else {
    $result = array('ISCONNECT' => 'FAILED#' . __FILE__ . '#' . __FUNCTION__ . '#');
    sqlsrv_close($conn);
    echo json_encode($result);
}



