<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
include '../service/database/connectdb.php';
$file = $_FILES['file_name']['tmp_name'];
//$file="product_template.xls";
$host = date_default_timezone_set('asia/bangkok');
$connectionInfo = array("Database" => DATABASENAME, "UID" => UID, "PWD" => PWD, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);
if($conn)
{
    // echo  'connected';
}else{
    echo 'notconnectec';
}
//include 'Classes/PHPExcel/IOFactory.php';
ini_set('max_execution_time', 380);
//global $now_date;
$currentdate = date("d-m-Y H:i:s");
$now_date = new DateTime($currentdate);
//$now_date->modify("+543 year ");
$today = thai_date($now_date);



if ($conn) {
    sleep(5);
    $data = get_data_from_excel($file);
    // print_r($data);

echo json_encode($data);

    // insert_data($conn, $data, $today);
   // sleep(20);
   // header("location:index.php");
   // exit(0);
} else {

}

function thai_date($date) {
    $days = $date->format('d');
    $month = $date->format('m');
    $date->modify('543 year');
    $year = $date->format('Y');
    $now = $days . '.' . $month . '.' . $year;
    return $now;
}

function get_data_from_excel($file) {
    global $highestRow;
    global $highestColumnIndex;

    $data = array();
    $index = 0;
    include '../../lib/Classes/PHPExcel.php';
    include '../../lib/Classes/PHPExcel/IOFactory.php';
    $inputFileType = PHPExcel_IOFactory::identify($file);
    // echo $file;
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);

    $objReader->setReadDataOnly(true);
    $objPHPExcel = $objReader->load($file);
    $total_sheets = $objPHPExcel->getSheetCount();
    $allSheetName = $objPHPExcel->getSheetNames();
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
    $highestRow = $objWorksheet->getHighestRow();
    $highestColumn = $objWorksheet->getHighestColumn();
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

    for ($row = 1; $row <= $highestRow; $row++) {
        for ($col = 0; $col < $highestColumnIndex; $col++) {
            $value = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
            $data[$row][$col] =  $value;//str_replace(" ", "", $value);
        }
    }
    return $data;
}



function insert_data($conn, $data, $today) {
    include  'upload_class.php';
    $pointer =new upload_class();
   // echo  $goodSku=$data[3][2];;
    $nowDate=new DateTime();
    $year=$nowDate->format('y');
    $month=$nowDate->format('m');
    $date=$nowDate->format('d');
    $today=$nowDate->format("Y-m-d");

    try{
        if ( sqlsrv_begin_transaction( $conn ) === false ) {
           throw new Exception("sqlsrv_cannot begin Exception");
        }
        for($i=3;$i<sizeof($data)+1;$i++)
        {
            $cid="C16072400010";
            /*
            * update new formation
            * */
            $goodSku=$data[$i][0];
            $goodName=$data[$i][1];
            $qty=(int)$data[$i][2];
            $qtyUnit=$data[$i][3];
            $goodStatus=1;
            $goodColor=$data[$i][4];
            $goodSize=$data[$i][5];
            $goodVol=(float)$data[$i][6];
            $goodVolUnit=$data[$i][7];
            $productDate=$data[$i][8];
            $productExpireDate=$data[$i][9];
            if($productDate==""){
                $productDate=$today;
            }
            if($productExpireDate=="")
            {
                $productExpireDate=$today;
            }
            $productSieries=$data[$i][10];
            $goodBrand=$data[$i][11];
            $goodDesc="";
            $location='';
            $goodRemark='';
            $goodType='GT001';


            /*
             * check exist items
             */
            ///แก้ตรงนี้///

            $query=$pointer->getCheckExistItems();
            $itemLeading="G";
            $param=array(&$goodSku,&$goodName,&$goodColor,&$goodSize,&$productSieries);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".print_r($param));
            }
            $isExistItem=false;
            $itemQty="";
            $itemIndex=0;
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
              //  $itemIndex = (int)$row["DOC_INDEX"];
                $itemQty=(int)$row['GOODS_QTY'];
                $goodId=$row['GOODS_ID'];
                // echo "rowIndex=".$row["DOC_INDEX"];
                $isExistItem = true;
            }

            /*$query=$pointer->getCurrentIndex();
            $docType="GD";
            $param=array(&$docType,&$date,&$month,&$year,&$cid);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".print_r($param));
            }*/


            if($isExistItem==true)
            {
                $sumQty=$itemQty+(int)$qty;


                $query=$pointer->getUpdateHeaderQty();
                $param=array(&$sumQty,&$goodId);

                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {

                    throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                }


            }else{

                /*gen goodId*/

                /*update m_docindex for goodId*/

                $query=$pointer->getCurrentIndex();
                $docType="G";
                $param=array(&$docType,&$date,&$month,&$year,&$cid);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {

                    throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                }
                $isExist=false;
                $goodsIndex=0;
                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    $goodsIndex= (int)$row["DOC_INDEX"];
                    // echo "rowIndex=".$row["DOC_INDEX"];
                    $isExist=true;

                    $goodId='G'.$year.$month.$date.sprintf('%06d',$goodsIndex);


                }

                if($isExist)
                {
                    $goodsIndex=$goodsIndex+1;
                    $query=$pointer->getUpdateCuurentIndex();
                    $docType="G";
                    $param=array(&$goodsIndex,&$docType,&$date,&$month,&$year,&$cid);
                    $stmt = sqlsrv_prepare($conn, $query, $param);
                    if (!$stmt) {
                        throw new Exception("sqlsrv_prepare#" . $query . "#");
                    }
                    if (!sqlsrv_execute($stmt)) {

                        throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                    }
      $goodId='G'.$year.$month.$date.sprintf('%06d',$goodsIndex);
                }else{

                    $goodsIndex=1;
                    $query=$pointer->getInsertNewIndex();
                    $docType="G";
                    $param=array(&$docType,&$date,&$month,&$year,&$goodsIndex,&$cid);
                    $stmt = sqlsrv_prepare($conn, $query, $param);
                    if (!$stmt) {
                        throw new Exception("sqlsrv_prepare#" . $query . "#");
                    }
                    if (!sqlsrv_execute($stmt)) {

                        throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                    }
                    $goodId='G'.$year.$month.$date.sprintf('%06d',$goodsIndex);
                }
                /*end update m_docindex for goodId*/
                $query=$pointer->getInsertTSTOREHEADER();
                $param=array(&$cid,&$goodId,&$goodSku,&$goodName,&$goodDesc,&$goodType,&$qty,&$qtyUnit,&$goodStatus,&$goodRemark);
               // $param=array(&$cid,&$goodId,'','','','',0,'',1,'');
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {

                    throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                }

            }//end create good index





                /*
                 * end check exist item
                 */




            $query=$pointer->getInsertTSTOREDETAIL();
            $param=array(&$cid,&$goodId,&$goodBrand,&$productSieries,&$goodColor,&$goodSize,&$goodVol,&$goodVolUnit,&$productDate,&$productExpireDate);

            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
            }





            /*update m_docindex for income*/

            $query=$pointer->getCurrentIndex();
            $docType="IN";
            $param=array(&$docType,&$date,&$month,&$year,&$cid);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
            }
            $isExist=false;
            $incomeIndex=0;
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $incomeIndex= (int)$row["DOC_INDEX"];
               // echo "rowIndex=".$row["DOC_INDEX"];
                $isExist=true;


            }

            if($isExist)
            {
                $incomeIndex=$incomeIndex+1;
                $query=$pointer->getUpdateCuurentIndex();
                $docType="IN";
                $param=array(&$incomeIndex,&$docType,&$date,&$month,&$year,&$cid);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {

                    throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                }

            }else{
                $incomeIndex=1;
                $query=$pointer->getInsertNewIndex();
                $docType="IN";
                $param=array(&$docType,&$date,&$month,&$year,&$incomeIndex,&$cid);
                $stmt = sqlsrv_prepare($conn, $query, $param);
                if (!$stmt) {
                    throw new Exception("sqlsrv_prepare#" . $query . "#");
                }
                if (!sqlsrv_execute($stmt)) {

                    throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
                }

            }
            /*end update m_docindex for income*/


            /*insert income */

            $incomeDocFormat=$docType.$year.$month.$date.sprintf('%06d',$incomeIndex);
            $query=$pointer->getInsertIncomeHeader();
            $incomeDocBy="import";
            $incomeHeaderRemark=null;
            $param=array(&$incomeDocFormat,&$incomeDocBy,&$incomeHeaderRemark,&$cid);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
            }



            $query=$pointer->getInsertIncomeDetail();
            $param=array(&$incomeDocFormat,&$cid,&$goodId,&$qty,&$qtyUnit);
            $stmt = sqlsrv_prepare($conn, $query, $param);
            if (!$stmt) {
                throw new Exception("sqlsrv_prepare#" . $query . "#");
            }
            if (!sqlsrv_execute($stmt)) {

                throw new Exception("sqlsrv_execute#" . $query ."#sku".json_encode($param));
            }





            /*end  income*/















        }

        sqlsrv_commit($conn);
        $return_val = array("status" => "1", "result" => "success", "value" => "");
        echo json_encode($return_val);


    }catch(Exception $ex)
    {
        sqlsrv_rollback($conn);
        sqlsrv_close($conn);
        $return_val = array('ISCONNECT' => 'COMPLETE', 'result' => 'FAILED#' . __FILE__ . '#' . __LINE__ . '#' . $ex->getLine() . "#" . $ex->getMessage() .$ex->getTraceAsString(). '#');
        echo json_encode($return_val);

    }



}
function getDocIndex($conn,$pointer,$docType,$year,$month,$date)
{




}
