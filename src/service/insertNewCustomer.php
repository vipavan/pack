<?php
/////////////////// generral/////////////////
$custName           = $_REQUEST['custName'];
$custLastName       = $_REQUEST['custLastName'];
$custDesc           = $_REQUEST['custDesc'];
$custAddress        = $_REQUEST['custAddress'];
$custSubDistrict    = $_REQUEST['custSubDistrict'];
$custDistrictID     = $_REQUEST['custDistrictID'];
$custDistrictDESC   = $_REQUEST['custDistrictDESC'];
$custProvinceID     = $_REQUEST['custProvinceID'];
$custProvinceDESC   = $_REQUEST['custProvinceDESC'];
$custZipcode        = $_REQUEST['custZipcode'];
$custTelContact     = $_REQUEST['custTelContact'];
$custEmailContact   = $_REQUEST['custEmailContact'];
$custTypeCode       = $_REQUEST['custTypeCode'];
$custShopName       = $_REQUEST['custShopName'];
$custTexId          = $_REQUEST['custTexId'];
$custMobile         = $_REQUEST['custMobile'];
$custPid            = $_REQUEST['custPid'];
$custPrefixName     = $_REQUEST['custPrefixName'];
$custShopType       = $_REQUEST['custShopType'];
$custPrefixNameId   = $_REQUEST['custPrefixNameId'];
$custShopTypeId     = $_REQUEST['custShopTypeId'];
$custShopId         = $_REQUEST['custShopId'];
///////////////// contact ////////////////////////
$arrContact         = $_REQUEST['arrContact'];
//
///////////////////TEX ADDRESS /////////////////////
$custAddressT        = $_REQUEST['custAddressT'];
$custSubDistrictT    = $_REQUEST['custSubDistrictT'];
$custDistrictIDT     = $_REQUEST['custDistrictIDT'];
$custDistrictDESCT   = $_REQUEST['custDistrictDESCT'];
$custProvinceIDT     = $_REQUEST['custProvinceIDT'];
$custProvinceDESCT   = $_REQUEST['custProvinceDESCT'];
$custZipcodeT        = $_REQUEST['custZipcodeT'];
//
////
///////////////////// SOCIAL /////////////////////////
$FBUrl              = $_REQUEST['FBUrl'];
$IGID               = $_REQUEST['IGID'];
$lineId             = $_REQUEST['lineId'];
$WeChatId           = $_REQUEST['WeChatId'];
$WhatsAppId         = $_REQUEST['WhatsAppId'];
$PageUrl            = $_REQUEST['PageUrl'];

///////////////// generral/////////////////
//$custName = "TEST";
//$custLastName = "TEST";
//$custDesc = "";
//$custAddress = "123";
//$custSubDistrict = "";
//$custDistrictID = "01";
//$custDistrictDESC = "";
//$custProvinceID = "02";
//$custProvinceDESC = "";
//$custZipcode = "12345";
//$custTelContact = "";
//$custEmailContact = "";
//$custTypeCode = "";
//$custShopName = "";
//$custTexId = "";
//$custMobile = "";
//$custPid  ="dddd";
//$custPrefixName     = '';
//$custShopType       = '';
//$custPrefixNameId   = '';
//$custShopTypeId     = '';
//$custShopId         = '';
///////////////////// contact ////////////////////////
//$arrContact = array("1#2#3#4", "5#6#7#8");
//
///////////////////TEX ADDRESS /////////////////////
//$custAddressT = "123";
//$custSubDistrictT = "";
//$custDistrictIDT = "01";
//$custDistrictDESCT = "";
//$custProvinceIDT = "02";
//$custProvinceDESCT = "";
//$custZipcodeT = "12345";
//
//
/////////////////// SOCIAL /////////////////////////
//$FBUrl = "xxx";
//$IGID = "yyy";
//$lineId = "9999";
//$WeChatId = "000";
//$WhatsAppId = "5555";
//$PageUrl = "333";
//echo json_encode($arrContact);
//echo json_encode("xxxx");

include "./database/connectdb.php";
include "./database/table/T_CUSTOMER.php";
include "./database/table/T_CUSTOMER_CONTACT.php";
include "./database/table/T_CUSTOMER_SOCIAL.php";
include "./database/table/T_CUSTOMER_TEXADDRESS.php";
include "./database/table/otherQuery.php";
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);

if ($conn) {
    sqlsrv_begin_transaction($conn);
    try {

        $genIdCust = new otherQuery();
        $query = $genIdCust->getGetLastIDCustomer();
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
            $data = $row['CID'];
        }
//        echo json_encode($data);
        if (empty($data)) {
            $new = 1;
            $number = sprintf('%04d', $new);
            $cid = 'C' . $number;
//            echo json_encode($cid);
        } else {
            $lastRecord = substr($data, -4);
            $number = sprintf('%04d', intval($lastRecord) + 1);
            $cid = 'C' . $number;
//            echo json_encode('No');
        }
//        echo json_encode($cid);

        $insertCus = new T_CUSTOMER();
        $query = $insertCus->getInsertNewCustomer();
//        $param = array(&$cid,&$custPrefixNameId,&$custPrefixName,&$custName,&$custLastName,&$custDesc,&$custAddress,&$custSubDistrict,&$custDistrictID,&$custDistrictDESC,&$custProvinceID,&$custProvinceDESC,&$custZipcode,&$custTypeCode,&$custShopTypeId,&$custShopType,&$custShopName,&$custTexId,&$custPid,&$custTelContact,&$custMobile,&$custEmailContact,&$custShopId);
        $param = array(&$cid,&$custPrefixNameId,&$custPrefixName,&$custName,&$custLastName,&$custDesc,&$custAddress,&$custSubDistrict,&$custDistrictID,&$custDistrictDESC,&$custProvinceID,&$custProvinceDESC,&$custZipcode,&$custTypeCode,&$custShopTypeId,&$custShopType,&$custShopName,&$custTexId,&$custPid,&$custTelContact,&$custMobile,&$custEmailContact,&$custShopId);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode($custTypeCode);
        if($custTypeCode == '1') {
            if ($arrContact != "xxx") {
//                echo json_encode($arrContact);
                for ($i = 0; $i < sizeof($arrContact); $i++) {
//              echo json_encode($dataGroup[$i]);
                    $dataList = explode('#', $arrContact[$i]);
                    $insertCus = new T_CUSTOMER_CONTACT();
                    $query = $insertCus->getInsertNewCustomer();
                    $param = array(&$cid, &$dataList[0], &$dataList[1], &$dataList[2], &$dataList[3]);
                    $stmt = sqlsrv_prepare($conn, $query, $param);
                    if (!$stmt) {
                        throw new Exception("sqlsrv_prepare#" . $query . "#");
                    }
                    if (!sqlsrv_execute($stmt)) {
                        throw new Exception("sqlsrv_execute#" . $query . "#");
                    }
                }
            }

//
            $insertCus = new T_CUSTOMER_TEXADDRESS();
            $query = $insertCus->getInsertNewCustomer();
            $param = array(&$cid, &$custAddressT, &$custSubDistrictT, &$custDistrictIDT, &$custDistrictDESCT, &$custProvinceIDT, &$custProvinceDESCT, &$custZipcodeT);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {
                throw new Exception("sqlsrv_execute#" . $query . "#");
            }
        }
//
        $insertCus1 = new T_CUSTOMER_SOCIAL();
        $query = $insertCus1->getInsertNewCustomerS();
        $param = array(&$cid,&$FBUrl,&$IGID,&$lineId,&$WeChatId,&$WhatsAppId,&$PageUrl);
        $stmt = sqlsrv_prepare($conn, $query, $param);
        if (!$stmt) {
            throw new Exception("sqlsrv_prepare#" . $query . "#");
        }
        if (!sqlsrv_execute($stmt)) {
            throw new Exception("sqlsrv_execute#" . $query . "#");
        }
//        echo json_encode("SUCCESS");
        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success",'value'=> $cid);
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



