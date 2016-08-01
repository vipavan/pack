<?php
$dataGroup = $_REQUEST['dataGroup'];
$lg = $_REQUEST['lg'];
//echo json_encode($dataGroup);
include "./database/connectdb.php";
include "./database/table/M_DOC_INDEX.php";
include "./database/table/T_PICKLOT_HEADER.php";
include "./database/table/T_PICKLOT_DETAIL.php";
include "./database/table/T_STORE_HEADER.php";
include "./database/table/T_SELLORDER_HEADER.php";
include "./database/table/T_SELLORDER_DETAIL_GOODS.php";
include "./database/table/T_INVOICE_HEADER.php";
include "./database/table/T_INVOICE_DETAIL.php";
include "./database/table/T_LOGS_ACTION.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $type = "PICK";
        $x = "PICK";
//        echo json_encode($x);
        $year   = date("y");
        $month  = date("m");
        $today  = date("d");
//        $type = "OUT";
        $genRecvCode = new M_DOC_INDEX();
        $query = $genRecvCode-> getLastStepIndex();
        $param = array(&$type,&$x,&$today,&$month,&$year);
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
        $year = date("y");
        $month = date("m");
        $today = date("d");
        if (empty($data)) {
            $new = 1;
            $number = sprintf('%05d', $new);
            $recvcode = $type . $year . $month . $today . $number;
            $query = $genRecvCode->getInsertNewMonth();
            $param = array(&$type, &$today, &$month, &$year, &$new, &$x);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        } else {
            if (sprintf('%02d', intval($data[0]['DOC_DATE'])) != $today) {
                $new = 1;
                $number = sprintf('%05d', $new);
                $recvcode = $type . $year . $month . $today . $number;
                $query = $genRecvCode->getInsertNewMonth();
                $param = array(&$type, &$year, &$month, &$today, &$new, &$x);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            } else {
                $lastRecord = substr($data[0]['DOC_INDEX'], -5);
                $num = intval($lastRecord) + 1;
                $number = sprintf('%05d', $num);
                $recvcode = $type . $year . $month . $today . $number;
                $query = $genRecvCode->getUpdateIndex();
                $param = array(&$num, &$type, &$x);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {
                    throw new Exception("sqlsrv_execute#" . $query . "#");
                }
            }
        }


        $numQty = 0;
        for ($i = 0; $i < sizeof($dataGroup); $i++) {
            $dataList = explode('#', $dataGroup[$i]);
            $numQty = $numQty + intval($dataList[3]);
//
        }
//        echo json_encode($numQty);
        $cRecv = new T_PICKLOT_HEADER();
        $query = $cRecv->getInsertNewPicklot();

        $param = array(&$recvcode, &$lg, &$numQty);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//
        for ($i = 0; $i < sizeof($dataGroup); $i++) {
//              echo json_encode($dataGroup[$i]);
            $dataList = explode('#', $dataGroup[$i]);
            $d[] = $dataList;
            $cRecv = new T_SELLORDER_DETAIL_GOODS();
            $query = $cRecv->getGetDetailtoPick();
            $param = array(&$dataList[1], &$dataList[2]);
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
//

            }
//            echo json_encode(sizeof($data2));

        }
////
        for ($i = 0; $i < sizeof($data2); $i++) {
//
            $cRecv = new T_PICKLOT_DETAIL();
            $query = $cRecv->getInsertNewPicklotDetail();
            $param = array(&$recvcode,&$data2[$i]["SO_DOCCODE"],&$data2[$i]["CID"],&$data2[$i]["GOODS_ID"],&$data2[$i]["SO_ORDER_QTY"],&$data2[$i]["SO_GOODS_QTY_UNIT"]);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }

            $cRecv = new T_STORE_HEADER();
            $query = $cRecv->getUpdateFromPicklotCreate();
            $param = array(&$data2[$i]["SO_ORDER_QTY"],&$data2[$i]["SO_ORDER_QTY"],&$data2[$i]["CID"],&$data2[$i]["GOODS_ID"]);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }

            $cRecv = new T_SELLORDER_HEADER();
            $query = $cRecv->getUpdateStatusAfterPicklot();
            $param = array(&$data2[$i]["CID"],&$data2[$i]["SO_DOCCODE"]);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }

            $ACTION = 'PICK';
            $insertNewAction = new T_LOGS_ACTION();
            $query = $insertNewAction->getInsertLogsInCome();
            $ref = $recvcode."#".$data2[$i]["SO_DOCCODE"];
            $param = array(&$data2[$i]["CID"], &$ACTION, &$lg,&$ref,&$goodsId,&$data2[$i]["SO_ORDER_QTY"], &$data2[$i]["SO_GOODS_QTY_UNIT"],'');
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }

//
        }
//        echo json_encode($data2);
////        $cid = $row[0]["CID"];
////        $sodoc = $row["SO_DOCCODE"];
////        $goodsId = $row["GOODS_ID"];
////        $qty = intval($row["SO_ORDER_QTY"]);
////        $qtyUnit = $row["SO_GOODS_QTY_UNIT"];
////        echo json_encode($cid);
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



