<?php
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

include "./database/connectdb.php";
include "./database/table/T_STORE_HEADER.php";


$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {

        $cSysUser = new T_STORE_HEADER();
        $query = $cSysUser->getGetChkItemInStoreN();
        $param = array(&$GOODS_SKU,&$GOODS_NAME,&$GOODS_DESC,&$GOODS_TYPE,&$GOODS_BARCODE,&$GOODS_BRAND,&$GOODS_SERIES,&$GOODS_COLOR,&$GOODS_SIZE,&$GOODS_VOL,&$GOODS_VOL_UNIT,&$GOODS_PRODUCTION_DATE,&$GOODS_EXPIRED_DATE);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data = $row["GOODS_ID"];
        }

        if (empty($data)) {
            $return_val = array("status" => "1", "result" => 0);
            echo json_encode($return_val);
        } else {
            $return_val = array("status" => "1", "result" => $data);
            echo json_encode($return_val);
        }

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



