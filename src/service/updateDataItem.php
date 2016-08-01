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
//////////////////// temp
//
$GOODS_SKU_T = $_REQUEST['GOODS_SKU_T'];
$GOODS_NAME_T = $_REQUEST['GOODS_NAME_T'];
//$GOODS_DESC_T = $_REQUEST['GOODS_DESC_T'];
$GOODS_TYPE_T = $_REQUEST['GOODS_TYPE_T'];
$GOODS_QTY_T = $_REQUEST['GOODS_QTY_T'];
$GOODS_QTY_UNIT_T = $_REQUEST['GOODS_QTY_UNIT_T'];
//$GOODS_STATUS = $_REQUEST['GOODS_STATUS'];
$GOODS_REMARK_T = $_REQUEST['GOODS_REMARK_T'];
$GOODS_MIN_T = $_REQUEST['GOODS_MIN_T'];
//$GOODS_TEMP = $_REQUEST['GOODS_TEMP'];
$GOODS_BARCODE_T = $_REQUEST['GOODS_BARCODE_T'];
$GOODS_PIC_URL_T = $_REQUEST['GOODS_PIC_URL_T'];
//
//////////////////s detail /////////////////////
$GOODS_BRAND_T = $_REQUEST['GOODS_BRAND_T'];
$GOODS_SERIES_T = $_REQUEST['GOODS_SERIES_T'];
$GOODS_COLOR_T = $_REQUEST['GOODS_COLOR_T'];
$GOODS_SIZE_T = $_REQUEST['GOODS_SIZE_T'];
$GOODS_VOL_T = $_REQUEST['GOODS_VOL_T'];
$GOODS_VOL_UNIT_T = $_REQUEST['GOODS_VOL_UNIT_T'];
//$GOODS_PRODUCTION_DATE_T = $_REQUEST['GOODS_PRODUCTION_DATE_T'];
//$GOODS_EXPIRED_DATE_T = $_REQUEST['GOODS_EXPIRED_DATE_T'];
//$GOODS_PRICE_T= $_REQUEST['GOODS_PRICE_T'];
//
//
////////////////////s location //////////////
$WH_ID_T = $_REQUEST['WH_ID_T'];
$LOCATION_ID_T =$_REQUEST['LOCATION_ID_T'];
//
$dataChange ='';
if($GOODS_SKU_T != $GOODS_SKU){
    $dataChange=$dataChange."GOODS_SKU:".$GOODS_SKU_T.'->'.$GOODS_SKU.',';
}
if($GOODS_NAME_T != $GOODS_NAME){
    $dataChange=$dataChange."GOODS_NAME:".$GOODS_NAME_T.'->'.$GOODS_NAME.',';
}
if($GOODS_TYPE_T != $GOODS_TYPE){
    $dataChange=$dataChange."GOODS_TYPE:".$GOODS_TYPE_T.'->'.$GOODS_TYPE.',';
}
if($GOODS_QTY_T != $GOODS_QTY){
    $dataChange=$dataChange."GOODS_QTY:".$GOODS_QTY_T.'->'.$GOODS_QTY.',';
}
if($GOODS_QTY_UNIT_T != $GOODS_QTY_UNIT){
    $dataChange=$dataChange."GOODS_QTY_UNIT:".$GOODS_QTY_UNIT_T.'->'.$GOODS_QTY_UNIT.',';
}
if($GOODS_REMARK_T != $GOODS_REMARK){
    $dataChange=$dataChange."GOODS_REMARK:".$GOODS_REMARK_T.'->'.$GOODS_REMARK.',';
}
if($GOODS_BARCODE_T != $GOODS_BARCODE){
    $dataChange=$dataChange."GOODS_BARCODE:".$GOODS_BARCODE_T.'->'.$GOODS_BARCODE.',';
}
if($GOODS_BRAND_T != $GOODS_BRAND){
    $dataChange=$dataChange."GOODS_BRAND:".$GOODS_BRAND_T.'->'.$GOODS_BRAND.',';
}
if($GOODS_SERIES_T != $GOODS_SERIES){
    $dataChange=$dataChange."GOODS_SERIES:".$GOODS_SERIES_T.'->'.$GOODS_SERIES.',';
}
if($GOODS_COLOR_T != $GOODS_COLOR){
    $dataChange=$dataChange."GOODS_COLOR:".$GOODS_COLOR_T.'->'.$GOODS_COLOR.',';
}
if($GOODS_SIZE_T != $GOODS_SIZE){
    $dataChange=$dataChange."GOODS_SIZE:".$GOODS_SIZE_T.'->'.$GOODS_SIZE.',';
}
if($GOODS_VOL_T != $GOODS_VOL){
    $dataChange=$dataChange."GOODS_VOL:".$GOODS_VOL_T.'->'.$GOODS_VOL.',';
}
if($GOODS_VOL_UNIT_T != $GOODS_VOL_UNIT){
    $dataChange=$dataChange."GOODS_VOL_UNIT:".$GOODS_VOL_UNIT_T.'->'.$GOODS_VOL_UNIT.',';
}
if($WH_ID_T != $WH_ID){
    $dataChange=$dataChange."WH_ID:".$WH_ID_T.'->'.$WH_ID.',';
}
if($LOCATION_ID_T != $LOCATION_ID){
    $dataChange=$dataChange."LOCATION_ID:".$LOCATION_ID_T.'->'.$LOCATION_ID.',';
}

//echo json_encode($dataChange);

//echo json_encode('sss');
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

        $cRecv = new T_STORE_DETAIL();
        $query = $cRecv->getRemoveData();
        $param = array(&$CID, &$GOODS_ID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
        $cRecv = new T_STORE_LOCATION();
        $query = $cRecv->getRemoveData();
        $param = array(&$CID, &$GOODS_ID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
        $cRecv = new T_STORE_HEADER();
        $query = $cRecv->getRemoveData();
        $param = array(&$CID, &$GOODS_ID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }




        $cRecv = new T_STORE_HEADER();
        $query = $cRecv->getInsertNewGoods();
        $param = array(&$CID, &$GOODS_ID, &$GOODS_SKU, &$GOODS_NAME, &$GOODS_DESC, &$GOODS_TYPE, &$GOODS_QTY, &$GOODS_QTY_UNIT, &$GOODS_REMARK, &$GOODS_MIN, &$GOODS_TEMP,&$GOODS_BARCODE,&$GOODS_PIC_URL);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
////
//        echo json_encode("SUCCESS");
        $cRecv = new T_STORE_DETAIL();
        $query = $cRecv->getInsertNewGoodsDetail();
        $param = array(&$CID, &$GOODS_ID, &$GOODS_BRAND, &$GOODS_SERIES, &$GOODS_COLOR, &$GOODS_SIZE, &$GOODS_VOL, &$GOODS_VOL_UNIT, &$GOODS_PRODUCTION_DATE, &$GOODS_EXPIRED_DATE, &$GOODS_PRICE);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//
//        echo json_encode("SUCCESS");
        $cRecv = new T_STORE_LOCATION();
        $query = $cRecv->getInsertNewGoodsLocation();
        $param = array(&$CID, &$GOODS_ID,  &$WH_ID, &$LOCATION_ID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
////
////        echo json_encode($goodsid);
//////        ////////////////////////////////// insert Income Data ////////////////////////////
//        $type = "IN";
//        $genRecvCode = new M_DOC_INDEX();
//        $query = $genRecvCode->getLastStepIndex();
//        $param = array(&$type, &$CID);
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
//
//        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
//            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
//            $data2[] = $row;
//        }
////        echo json_encode($data);
//        $year = date("y");
//        $month = date("m");
//        $today = date("d");
//        if (empty($data2)) {
//            $new = 1;
//            $number = sprintf('%06d', $new);
//            $goodsincome = 'IN' . $year . $month . $today . $number;
//            $query = $genRecvCode->getInsertNewMonth();
//            $param = array(&$type, &$today, &$month, &$year, &$new, &$CID);
//            $stmt = sqlsrv_prepare($conn, $query, $param);
//            if (!$stmt) {
//                throw new Exception("sqlsrv_prepare#" . $query . "#");
//            }
//            if (!sqlsrv_execute($stmt)) {
//                throw new Exception("sqlsrv_execute#" . $query . "#");
//            }
//        } else {
//            if (sprintf('%02d', intval($data2[0]['DOC_MONTH'])) != $month) {
//                $new = 1;
//                $number = sprintf('%06d', $new);
//                $goodsincome = 'IN' . $year . $month . $today . $number;
//                $query = $genRecvCode->getInsertNewMonth();
//                $param = array(&$type, &$today, &$month, &$year, &$new, &$CID);
//                $stmt = sqlsrv_prepare($conn, $query, $param);
//                if (!$stmt) {
//                    throw new Exception("sqlsrv_prepare#" . $query . "#");
//                }
//                if (!sqlsrv_execute($stmt)) {
//                    throw new Exception("sqlsrv_execute#" . $query . "#");
//                }
//            } else {
//                $lastRecord = substr($data2[0]['DOC_INDEX'], -6);
//                $num = intval($lastRecord) + 1;
//                $number = sprintf('%06d', $num);
//                $goodsincome = 'IN' . $year . $month . $today . $number;
//                $query = $genRecvCode->getUpdateIndex();
//                $param = array(&$num, &$type, &$CID);
//                $stmt = sqlsrv_prepare($conn, $query, $param);
//                if (!$stmt) {
//                    throw new Exception("sqlsrv_prepare#" . $query . "#");
//                }
//                if (!sqlsrv_execute($stmt)) {
//                    throw new Exception("sqlsrv_execute#" . $query . "#");
//                }
//            }
//        }
////        echo json_encode($goodsincome);
//        $insertInComeHeader = new T_INCOME_HEADER();
//        $query = $insertInComeHeader->getInsertNewInComeHeader();
//        $param = array(&$goodsincome, &$loginid, &$GOODS_REMARK, &$CID);
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
////        echo json_encode("SUCCESS");
//        $insertInComeDetail = new T_INCOME_DETAIL();
//        $query = $insertInComeDetail->getInsertNewInComeDetail();
//        $param = array(&$goodsincome, &$CID, &$goodsid,&$GOODS_QTY,&$GOODS_QTY_UNIT);
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
////        echo json_encode("SUCCESS");
////        echo json_encode($goodsincome);
////
////
////        echo json_encode($goodsincome);
////////////////////////////////////// insert Log Action ///////////////////////////////////
        $ACTION = 'EDIT ITEM';
        $insertNewAction = new T_LOGS_ACTION();
        $query = $insertNewAction->getInsertLogsInCome();
        $xxx = '';
        $param = array(&$CID, &$ACTION,  &$loginid,&$xxx,&$GOODS_ID,  &$GOODS_QTY, &$GOODS_QTY_UNIT,&$dataChange);
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



