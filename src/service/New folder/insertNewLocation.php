<?php
$whId = $_REQUEST['whId'];
$loName = $_REQUEST['loName'];
$loRef="";
//$whId = "WH0002";
//$loName = "11-30-06";
//$loRef = "";
//$whName ="TEST02";
include "./database/connectdb.php";
include "./database/table/G_LOCATION.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {
        $genId = new G_LOCATION();
        $query = $genId->getGetNewLocation();
        $param = array(&$whId);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data = $row['LOCATION_ID'];
        }

        if (empty($data)) {
            $new = 1;
            $number = sprintf('%04d', $new);
            $loId = 'L' . $number;
//            echo json_encode($cid);
        } else {
            $lastRecord = substr($data, -4);
            $number = sprintf('%04d', intval($lastRecord) + 1);
            $loId = 'L' . $number;
//            echo json_encode('No');
        }
//        echo json_encode($loId);
        $insert = new G_LOCATION();
        $query = $insert->getInsertNewLocation();
        $param = array(&$loId,&$loName,&$loRef,&$whId);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
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