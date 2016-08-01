<?php
$cid            = $_REQUEST['cid'];
$recvid       = $_REQUEST['recvid'];
//$recvName       = $_REQUEST['recvName'];
//$recvLname      = $_REQUEST['recvLname'];
//$recvTextId     = $_REQUEST['recvTexId'];
//$recvAddress    = $_REQUEST['recvAddress'];
//$recvDistrict   = $_REQUEST['recvDistrict'];
//$recvProvince   = $_REQUEST['recvProvince'];
//$recvZipcode    = $_REQUEST['recvZipcode'];
//$recvTel        = $_REQUEST['recvTel'];
//$recvPhone      = $_REQUEST['recvPhone'];
//$recvEmail      = $_REQUEST['recvEmail'];
//$recvRemark     = $_REQUEST['recvRemark'];
//$fburl          = $_REQUEST['fburl'];
//$twurl          = $_REQUEST['twurl'];
//$lineid         = $_REQUEST['lineid'];
//$recvShopName   = $_REQUEST['recvShopName'];
//$cells            = $_REQUEST['cells'];
//echo json_encode("sss");
//echo json_encode($cells);
include "./database/connectdb.php";
//include "./database/table/T_SELLORDER_HEADER.php";
//include "./database/table/T_SELLORDER_DETAIL_GOODS.php";
//include "./database/table/T_SELLORDER_DETAIL_COST.php";
include "./database/table/M_DOC_INDEX.php";


$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $type = "OUT";
        $genRecvCode = new M_DOC_INDEX();
        $query = $genRecvCode-> getLastStepIndex();
        $param = array(&$type,&$cid);
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
            $recvcode = $type.$year.$month.$today.$number;
            $query = $genRecvCode-> getInsertNewMonth();
            $param = array(&$type,&$year,&$month,&$today,&$new,&$cid);
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
                $recvcode = $type.$year.$month.$today.$number;
                $query = $genRecvCode-> getInsertNewMonth();
                $param = array(&$type,&$year,&$month,&$today,&$new,&$cid);
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
                $recvcode = $type.$year.$month.$today.$number;
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
        if ($recvcode=='') {
            $return_val = array("status" => "1", "result" => "");
            echo json_encode($return_val);
        } else {
            $return_val = array("status" => "1", "result" => $recvcode);
            echo json_encode($return_val);
        }
//
//        $cSOH = new T_SELLORDER_HEADER();
//        $query = $cSOH->getInsertNewOrder();
//        $param = array();
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
//
//        $cSODG = new T_SELLORDER_DETAIL_GOODS();
//        $query = $cSODG->getInsertNewOrderDetailGoods();
//        $param = array();
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
//
//        $cSODC = new T_SELLORDER_DETAIL_COST();
//        $query = $cSODC->getInsertNewOrderDetailCost();
//        $param = array();
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
//
//        $cSOH = new T_SELLORDER_HEADER();
//        $query = $cSOH->getInsertNewOrder();
//        $param = array();
//        $stmt = sqlsrv_prepare($conn, $query, $param);
//        if (!$stmt) {
//            throw new Exception("sqlsrv_prepare#" . $query . "#");
//        }
//        if (!sqlsrv_execute($stmt)) {
//            throw new Exception("sqlsrv_execute#" . $query . "#");
//        }
//        echo json_encode($recvcode);
//
//        sqlsrv_commit($conn);
//        $return_val = array("status" => "1", "result" => "success","value"=> &$recvcode);
//        echo json_encode($return_val);
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
//
//
//
