<?php
$prefix = $_REQUEST['prefix'];
//$prefix ='ssss';
include "./database/connectdb.php";
include "./database/table/G_PREFIX.php";;
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {

        $genIdCust = new G_PREFIX();
        $query = $genIdCust->getGetLastCode();
        $param = array();
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data = $row['PREFIX_CODE'];
        }
//        echo json_encode($data);
        if (empty($data)) {
            $new = 11;
//            $number = sprintf('%02d', $new);
//            $cid = 'C' . $number;
            $code = $new;
//            echo json_encode($cid);
        } else {
            $lastRecord = intval($data)+1;
            $code = $lastRecord;
//            echo json_encode('No');
        }
//        echo json_encode($code);

        $insertCus = new G_PREFIX();
        $query = $insertCus->getInsertNewPrefix();
        $param = array(&$code,&$prefix);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
////
//        echo json_encode("SUCCESS");
        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success");
        echo json_encode($return_val);
    } catch
    (Exception $ex) {
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



