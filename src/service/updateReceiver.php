<?php
$cid            = $_REQUEST['cid'];
$recvId         = $_REQUEST['recvid'];
$recvName       = $_REQUEST['recvName'];
$recvLname      = $_REQUEST['recvLname'];
$recvTextId     = $_REQUEST['recvTexId'];
$recvAddress    = $_REQUEST['recvAddress'];
$recvSubDistrict   = $_REQUEST['recvSubDistrict'];
$recvDistrict   = $_REQUEST['recvDistrict'];
$recvDistrictDesc   = $_REQUEST['recvDistrictDesc'];
$recvProvince   = $_REQUEST['recvProvince'];
$recvProvinceDesc   = $_REQUEST['recvProvinceDesc'];
$recvZipcode    = $_REQUEST['recvZipcode'];
$recvTel        = $_REQUEST['recvTel'];
$recvPhone      = $_REQUEST['recvPhone'];
$recvEmail      = $_REQUEST['recvEmail'];
$recvRemark     = $_REQUEST['recvRemark'];
$recvShopName   = $_REQUEST['recvShopName'];
$recvPID        = $_REQUEST['recvPID'];
////////////////////// contact /////////////////////////


///////////////////// social///////////////////////////
$FBUrl              = $_REQUEST['FBUrl'];
$IGID               = $_REQUEST['IGID'];
$lineId             = $_REQUEST['lineId'];
$WeChatId           = $_REQUEST['WechatId'];
$WhatsAppId         = $_REQUEST['WhatsAppId'];
$PageUrl            = $_REQUEST['PageUrl'];


include "./database/connectdb.php";
include "./database/table/T_RECEIVER.php";
include "./database/table/T_RECEIVER_SOCIAL.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $cRecv = new T_RECEIVER();
        $query = $cRecv->getRemoveRecv();
        $param = array(&$cid,&$recvId);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode($recvId);
        $cRecv = new T_RECEIVER_SOCIAL();
        $query = $cRecv->getRemoveRecv();
        $param = array(&$cid,&$recvId);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        $cRecv = new T_RECEIVER();
        $query = $cRecv->getInsertNewReceiver();
        $param = array(&$cid,&$recvId,&$recvName,&$recvLname,&$recvTextId,&$recvAddress,&$recvSubDistrict,&$recvDistrict,&$recvDistrictDesc,&$recvProvince,&$recvProvinceDesc,&$recvZipcode,&$recvTel,&$recvPhone,&$recvEmail,&$recvRemark,&$recvShopName,&$recvPID);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

//
        $cRecv = new T_RECEIVER_SOCIAL();
        $query = $cRecv->getInsertNewReceiver();
        $param = array(&$cid,&$recvId,&$FBUrl,&$IGID,&$lineId,&$WeChatId,&$WhatsAppId,&$PageUrl);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

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



