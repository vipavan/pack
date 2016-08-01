l<?php

include('connectdb.php');

$connectionInfo = array("Database"=>DATABASENAME,"UID"=>UID,"PWD"=>PWD);
$conn = sqlsrv_connect(SERVERNAME, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true ));
}else{
   echo 'Connected';
}
