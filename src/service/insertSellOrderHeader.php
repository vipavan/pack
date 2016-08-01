<?php
//echo  json_encode('sss');
////date_default_timezone_set("Asia/Bangkok");
$CID    = $_REQUEST['CID'];
////$SO_DOCCODE    = $_REQUEST['SO_DOCCODE'];
$SO_DOCDATE    = $_REQUEST['SO_DOCDATE'];
//
$SO_DOCSTATUS    = 1;
$SO_DODATE    = $_REQUEST['SO_DODATE'];
$SO_PODATE    = $_REQUEST['SO_PODATE'];
$SO_TRANTRIPDATE    = $_REQUEST['SO_TRANTRIPDATE'];
$RECVID    = $_REQUEST['RECVID'];
//
if(empty($_REQUEST['SO_SHIPMENT_METHOD'])){
    $SO_SHIPMENT_METHOD    = '';
}else{
    $SO_SHIPMENT_METHOD    = $_REQUEST['SO_SHIPMENT_METHOD'];
}
if(empty($_REQUEST['SO_SHIPMENT_TRACKING'])){
    $SO_SHIPMENT_TRACKING    = '';
}else{
    $SO_SHIPMENT_TRACKING    = $_REQUEST['SO_SHIPMENT_TRACKING'];
}
if(empty($_REQUEST['SO_REF'])){
    $SO_REF    = '';
}else{
    $SO_REF    = $_REQUEST['SO_REF'];
}
$address  = $_REQUEST['address'];
$subdistrict = $_REQUEST['subdistrict'];
$district = $_REQUEST['district'];
$districtDesc = $_REQUEST['districtDesc'];
$province = $_REQUEST['province'];
$provinceDesc = $_REQUEST['provinceDesc'];
$zipcode =$_REQUEST['zipcode'];
//
$SO_REMARK    = $_REQUEST['SO_REMARK'];
$SO_DOC_BY      = $_REQUEST['SO_DOC_BY'];
$cells          = $_REQUEST['CELLS'];
//echo json_encode("dd");
include "./database/connectdb.php";
include "./database/table/T_SELLORDER_HEADER.php";
include "./database/table/T_SELLORDER_DETAIL_GOODS.php";
include "./database/table/T_SELLORDER_DETAIL_COST.php";
include "./database/table/T_SELLORDER_RECEIVER.php";
include "./database/table/T_STORE_HEADER.php";
include "./database/table/M_DOC_INDEX.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $year   = date("y");
        $month  = date("m");
        $today  = date("d");
        $type = "OUT";
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


        if(empty($data)){
            $val = 1;
            $new = 1 ;
            $number = sprintf('%04d',$new);
            $SO_DOCCODE  = $type.$year.$month.$today.$CID.$number;
            $query = $genRecvCode-> getInsertNewMonth();
            $param = array(&$type,&$today,&$month,&$year,&$new,&$CID);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        }else{
            $xxxx = intval($data[0]['DOC_DATE']);
            if(sprintf('%02d',intval($data[0]['DOC_DATE'])) != $today){
                $val=2;
                $new = 1 ;
                $number = sprintf('%04d',$new);
                $SO_DOCCODE  = $type.$year.$month.$today.$CID.$number;
                $query = $genRecvCode-> getInsertNewMonth();
                $param = array(&$type,&$today,&$month,&$year,&$new,&$CID);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            }else{
                $val=3;
                $lastRecord = substr($data[0]['DOC_INDEX'],-4);
                $num = intval($lastRecord) + 1;
                $number = sprintf('%04d', $num);
                $SO_DOCCODE  = $type.$year.$month.$today.$CID.$number;
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
//        echo json_encode("sssss");
        $cSysUser = new T_SELLORDER_HEADER();
        $query = $cSysUser->getInsertNewOrder();
        $param = array(&$CID,&$SO_DOCCODE,&$SO_DOCDATE,&$SO_DOCSTATUS,&$SO_DOCDATE,&$SO_PODATE,&$SO_TRANTRIPDATE,&$RECVID,&$SO_SHIPMENT_METHOD,&$SO_SHIPMENT_TRACKING,&$SO_REF,&$SO_REMARK,&$SO_DOC_BY);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//
        for($i=0;$i<sizeof($cells);$i++){
            $num = intval($cells[$i][4]);
//            echo json_encode($cells[$i][4]);
            $cSysUser = new T_SELLORDER_DETAIL_GOODS();
            $query = $cSysUser->getInsertNewOrderDetailGoods();
            $param = array(&$CID,&$SO_DOCCODE,&$cells[$i][0],&$num,&$num,&$cells[$i][5],1,'');
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }

            $cSysUser = new T_STORE_HEADER();
            $query = $cSysUser->getUpdateTempQty();
            $param = array(&$num,&$CID,&$cells[$i][0]);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        }
        $cSysUser = new T_SELLORDER_RECEIVER();
        $query = $cSysUser->getInsertNewReceiver();
        $param = array(&$CID,&$SO_DOCCODE,&$RECVID,&$address,&$subdistrict,&$district,&$districtDesc,&$province,&$provinceDesc,&$zipcode);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        $cSysUser = new T_SELLORDER_DETAIL_COST();
        $query = $cSysUser->getInsertNewOrderDetailCost();
        $param = array(&$CID,&$SO_DOCCODE,0.0,0.0,0.0,0.0,&$SO_DOC_BY);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode('SUCCESS');

        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success" );
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
//
//
//
