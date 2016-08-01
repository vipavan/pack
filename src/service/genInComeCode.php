<?php

include "./database/connectdb.php";
include "./database/table/M_DOC_INDEX.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $type = "IN";
        $genInComeCode = new M_DOC_INDEX();
        $query = $genInComeCode-> getLastStepIndex();
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
//        $data['DOC_MONTH'] = 7;
//        $data['DOC_INDEX'] = 200;
        $year   = date("y");
        $month  = date("m");
        $today  = date("d");
        if(empty($data)){
            $new = 1 ;
            $number = sprintf('%05d',$new);
            $incomeCode = $type.$year.$month.$number;
        }else{
            if(sprintf('%02d',intval($data['DOC_MONTH']))!=$month){
                $new = 1 ;
                $number = sprintf('%05d',$new);
                $incomeCode = $type.$year.$month.$number;

            }else{
                $lastRecord = substr($data['DOC_INDEX'],-5);
                $number = sprintf('%05d',intval($lastRecord)+1);
                $incomeCode = $type.$year.$month.$number;
            }
        }

//        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => $incomeCode);
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
