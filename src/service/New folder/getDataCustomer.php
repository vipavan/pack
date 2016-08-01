<?php
$cid =$_REQUEST['cid'];
//$cid= 'C16072400010';
include "./database/connectdb.php";
include "./database/table/T_CUSTOMER.php";
include "./database/table/T_CUSTOMER_CONTACT.php";
include "./database/table/T_CUSTOMER_SOCIAL.php";
include "./database/table/T_CUSTOMER_TEXADDRESS.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {

        $cCust = new T_CUSTOMER();
        $query = $cCust->getGetDataCustomer();
        $param = array(&$cid);
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
        $cCust = new T_CUSTOMER_TEXADDRESS();
        $query = $cCust->getGetDataCustomer();
        $param = array(&$cid);
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
        }
        $cCust = new T_CUSTOMER_CONTACT();
        $query = $cCust->getGetDataCustomer();
        $param = array(&$cid);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data3[] = $row;
        }
        $cCust = new T_CUSTOMER_SOCIAL();
        $query = $cCust->getGetDataCustomer();
        $param = array(&$cid);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }

        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            // $value = $value . $row["DISTRICT_DESCTH"] . '#';
            $data4[] = $row;
        }

        if(empty($data2)){
            $data2 = '';
        }
        if(empty($data3)){
            $data3 = '';
        }
        if(empty($data4)){
            $data4 = '';
        }

        if (empty($data)) {
            $return_val = array("status" => "1", "data1" => "", "data2" => "", "data3" => "", "data4" => "");
            echo json_encode($return_val);
        } else {
            $return_val = array("status" => "1", "data1" => $data, "data2" => $data2, "data3" => $data3, "data4" => $data4);
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
