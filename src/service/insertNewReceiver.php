<?php
$cid            = $_REQUEST['cid'];
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


//$cid            = "C16072300005";
//$recvName       = "test";
//$recvLname      = "test";
//$recvTextId     = "";
//$recvAddress    = "";
//$recvSubDistrict   = "";
//$recvDistrict   = "02";
//$recvDistrictDesc   = "";
//$recvProvince   = "02";
//$recvProvinceDesc   = "";
//$recvZipcode    = "";
//$recvTel        = "";
//$recvPhone      = "";
//$recvEmail      = "";
//$recvRemark     = "";
//$recvShopName   = "";
//$recvPID        = "";
//////////////////////// contact /////////////////////////
//
//
/////////////////////// social///////////////////////////
//$FBUrl              = "xxx";
//$IGID               = "xxx";
//$lineId             = "xx";
//$WeChatId           = "xx";
//$WhatsAppId         = "xx";
//$PageUrl            = "xx";
//echo json_encode($cid);
include "./database/connectdb.php";
include "./database/table/T_RECEIVER.php";
include "./database/table/T_RECEIVER_SOCIAL.php";
include "./database/table/M_DOC_INDEX.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $type = "RECV";
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
            $data[] = $row;
        }
//        echo json_encode($data);
        $year   = date("y");
        $month  = date("m");
        $today  = date("d");
        if(empty($data)){
            $new = 1 ;
            $number = sprintf('%05d',$new);
            $recvcode = 'RECV'.$year.$month.$today.$number;
            $query = $genRecvCode-> getInsertNewMonth();
            $param = array(&$type,&$today,&$month,&$year,&$new,&$cid);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        }else{
            if(sprintf('%02d',intval($data[0]['DOC_MONTH']))!=$month){
                $new = 1 ;
                $number = sprintf('%05d',$new);
                $recvcode = 'RECV'.$year.$month.$today.$number;
                $query = $genRecvCode-> getInsertNewMonth();
                $param = array(&$type,&$today,&$month,&$year,&$new,&$cid);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            }else{
                $lastRecord = substr($data[0]['DOC_INDEX'],-5);
                $num = intval($lastRecord) + 1;
                $number = sprintf('%05d', $num);
                $recvcode = 'RECV'.$year.$month.$today.$number;
                $query = $genRecvCode->getUpdateIndex();
                $param = array(&$num, &$type, &$cid);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            }
        }
//        echo json_encode($recvcode);
//
        $cRecv = new T_RECEIVER();
        $query = $cRecv->getInsertNewReceiver();
        $param = array(&$cid,&$recvcode,&$recvName,&$recvLname,&$recvTextId,&$recvAddress,&$recvSubDistrict,&$recvDistrict,&$recvDistrictDesc,&$recvProvince,&$recvProvinceDesc,&$recvZipcode,&$recvTel,&$recvPhone,&$recvEmail,&$recvRemark,&$recvShopName,&$recvPID);
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
        $param = array(&$cid,&$recvcode,&$FBUrl,&$IGID,&$lineId,&$WeChatId,&$WhatsAppId,&$PageUrl);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("Success");
//
        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success","value"=> &$recvcode);
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



