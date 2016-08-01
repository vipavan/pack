<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$x1 = $_REQUEST['loginUserName'];
$x2 = $_REQUEST['loginFullName'];
$x3 = $_REQUEST['userTypeCode'];
$x4 = $_REQUEST['cid'];

$_SESSION['loginUserName'] = $x1;
$_SESSION['loginFullName'] = $x2;
$_SESSION['userTypeCode'] = $x3;
$_SESSION['cid'] = $x4;


if ($_SESSION['userTypeCode'] == 11) {
    header("location: ./src/controller/admin/");
    exit(0);
} elseif ($_SESSION['userTypeCode'] == 12) {
    header("location: ./src/controller/");
    exit(0);
}
// test guide

