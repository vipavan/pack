<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid = $_REQUEST['cid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>add cus</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="../../../assets/css/font.css">
    <link rel="stylesheet" href="../../../assets/css/style-cus.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <script src="../../../assets/js/jquery.js"></script>
    <script src="../../../assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="../../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/superfish.js"></script>
    <script src="../../../assets/js/jquery.equalheights.js"></script>
    <script src="../../../assets/js/jquery.mobilemenu.js"></script>
    <script src="../../../assets/js/tmStickUp.js"></script>
    <script src="../../../assets/js/jquery.ui.totop.js"></script>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css ">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css ">
    <!--    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript" src="../../../lib/DataTables-1.10.12/media/js/jquery.dataTables.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript"-->
    <!--            src="../../../lib/DataTables-1.10.12/examples/resources/syntax/shCore.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript" src="../../../lib/DataTables-1.10.12/examples/resources/demo.js"></script>-->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js "></script>

    <script>
        $(window).load(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
            $('#stuck_container').tmStickUp({});
        });
    </script>

</head>
<body>
<!--==============================
header
=================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="grid_12 rel">
                <h1>
                    <a href="index.php">
                        <img src="../../../assets/images/logo1.png" alt="Logo alt" style="height:120px; width:120px;">
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
        Stuck menu
        =================================-->
        <style>
            li {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
            }

            p {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
            }

            a {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;

            }

            h4 {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
            }

            h2 {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                color: #7f5373;
            }

            .modal-title {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                color: #7f5373;
            }

            label {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                color: #7f5373;
            }

            .btn {
                background-color: #7f5373 !important;
            }

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                color: #7f5373;
            }
        </style>
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="current"><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="manage-product.php">จัดการสินค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <li><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                                <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                                        href="../../../logout.php">ออกจากระบบ</a></li>

                            </ul>
                            <p style="float:right; font-size:18px; margin-right:30px;">
                                สวัสดี <?php echo loginFullName ?></p>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>

<!--=====================
Content
======================-->
<style>
    #search {
        float: right;
        height: 15px;
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('../../../assets/images/searchicon.png');
        background-position: 5px 5px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    #search:focus {
        width: 50%;
    }

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 11%;
    }

    td {
        vertical-align: middle;
    }

    .table tbody tr:hover td, .table tbody tr:hover th {
        /*background-color: pink;*/
    }

</style>

<!--<script type="text/javascript" src="assets/js/jquery-latest.js"></script>-->
<!--<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>-->
<!--<link rel="stylesheet" href="assets/css/jquery.dataTables.min">-->
<script type="text/javascript">
    $(document).ready(function () {
        //        $('#example').table({
        //            columnDefs: [{
        //                targets: [0],
        //                orderData: [0, 1]
        //            }, {
        //                targets: [1],
        //                orderData: [1, 0]
        //            }, {
        //                targets: [4],
        //                orderData: [4, 0]
        //            }]
        //        });
    });
</script>

<section id="content" style="background-image:url(../../../assets/images/login-bg.png)">
    <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:53px; background-color:#BF7CAC;">
                            <!-- <button type="button" class="btn btn-sm"
                            style="margin-bottom:10px;float:left; font-family: 'Athiti', sans-serif; font-weight: 700px;">
                            <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มข้อมูล
                          </button> -->
                            <button type="button" onclick="window.location='add-cus.php'"  class="btn btn-sm"
                                    style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                ยกเลิก
                            </button>
                        </div>
                        <!-- <div class="panel-body">
                      </div> -->
                        <div class="panel panel-default">
                            <div class="panel-heading"><label style="font-size:20px;"> ข้อมูลทั่วไป</label></div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="control-label  col-sm-4">
                                            <input type="checkbox" name="" value="" id="typeCust2" checked> <label>
                                                นิติบุคคล</label><br>
                                        </div>
                                        <div class="control-label col-sm-2">
                                            <input type="checkbox" name="" id="typeCust1"> <label>
                                                บุคลทั่วไป</label><br>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-sm-3" for="">ชื่อสถานประกอบการ</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" style="width:597px;" id="strshopname" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-sm-3" for="">ประเภทธุรกิจ</label>
                                        <div class="col-sm-2" style="width:249px;">
                                            <select class="form-control selectpicker show-tick" id="strtypeshop">

                                            </select>
                                        </div>
                                        <label class=" control-label col-sm-1" style="width:130px;" for="">ทะเบียนการค้า</label>
                                        <div class="col-sm-2" style="width:249px;">
                                            <input type="text" class="form-control" id="stridshop" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label  col-sm-3" for="">คำนำหน้า</label>
                                        <div class="col-sm-1" style="width:auto;">
                                            <select class="form-control selectpicker show-tick" id="strprefix">

                                            </select>
                                        </div>
                                        <label class="col-sm-1" style="width:auto;" for="">ชื่อ:</label>
                                        <div class="col-sm-2" style="margin-right:1px;">
                                            <input type="text" class="form-control" id="strfname" placeholder="">
                                        </div>
                                        <label class="col-sm-1" style="width:auto;" for="">นามสกุล:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strlname" placeholder="">
                                        </div>
                                    </div>
                                    <!--
                                                          <div class="form-group">


                                                          </div> -->
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">สถานที่ตั้ง:</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" style="width:597px;" rows="3" id="straddress"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ตำบล</label>
                                        <div class="col-sm-3"  style="width:249px;">
                                            <input type="text" class="form-control" id="strsubdistrict" placeholder="">
                                        </div>
                                        <label class="control-label col-sm-1" style="width:130px;"for="">อำเภอ:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <select class="form-control" id="strdistrict">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label col-sm-3" for="">จังหวัด:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <select class="form-control selectpicker show-tick" id="strprovince">
                                            </select>
                                        </div>
                                        <label class="control-label col-sm-1" style="width:130px;" for="">รหัสไปรษณีย์:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <input type="text" class="form-control" id="strzipcode" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">เลขที่บัตรประชาชน</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <input type="text" class="form-control" id="strpid" placeholder="">
                                        </div>
                                        <label class="control-label col-sm-1" style="width:130px;" for="" max="13">เลขที่เสียภาษีอากร</label>
                                        <div class="col-sm-2" style="width:249px;">
                                            <input type="text" class="form-control" id="strtexid" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">โทร:</label>
                                        <div class="col-sm-3"  style="width:249px;">
                                            <input type="text" class="form-control" id="strtell" placeholder="">
                                        </div>
                                        <label class="control-label  col-sm-1" style="width:130px;" for="">มือถือ:</label>
                                        <div class="col-sm-2" style="width:249px;" >
                                            <input type="text" class="form-control"  id="strmobile" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">e-mail</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" style="width:597px;" id="stremail" placeholder="">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="panel panel-default" id="custTexAddress">
                            <div class="panel-heading"><label
                                    style="font-size:20px;">ที่อยู่สำหรับวางบิล/ออกใบเสร็จ</label></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="control-label  col-sm-3" for="">ที่อยู่</label>
                                        <div class="control-label col-sm-2">
                                            <input type="checkbox" name="" value="" id="copyAddress"> <label>ตามสถานที่ตั้ง </label><br>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" rows="3"  style="width:597px;" id="straddress1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ตำบล</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <input type="text" class="form-control"  id="strsubdistrict1" placeholder="">
                                        </div>
                                        <label class="  control-label col-sm-1" style="width:130px;" for="">อำเภอ:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <select class="form-control"  id="strdistrict1">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label col-sm-3" for="">จังหวัด:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <select class="form-control selectpicker show-tick" id="strprovince1">
                                            </select>
                                        </div>
                                        <label class=" control-label  col-sm-1" style="width:130px;" for="">รหัสไปรษณีย์:</label>
                                        <div class="col-sm-3" style="width:249px;">
                                            <input type="text" class="form-control" id="strzipcode1" placeholder="">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label class="control-label col-sm-3" for="">ชื่อผู้ติดต่อ</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strnamecontact" placeholder="">
                                  </div>
                                  <label class="col-sm-1" for="">ตำแหน่ง:</label>
                                  <div class="col-sm-3">
                                  <input type="text" class="form-control" id="strposition" placeholder="">
                                </div>
                              </div> -->


                                    <!-- <div class="form-group">
                                    <label class="control-label col-sm-3" for="">โทร</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strtell" placeholder="">
                                  </div>
                                  <label class="col-sm-1" for="">e-mail</label>
                                  <div class="col-sm-3">
                                  <input type="text" class="form-control" id="stremail" placeholder="">
                                </div>
                              </div> -->

                                </form>

                            </div>
                        </div>
                        <div class="panel panel-default" id="custContact">
                            <div class="panel-heading"><label style="font-size:20px;">ข้อมูลผู้ติดต่อ</label></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <br/>
                                    <br/>
                                    <!-- <div> ชื่อ ตำแหน่ง โทร อีเมล์ </div> -->
                                    <table class="table">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div id="TextBoxContainer">
                                                    <!--Textboxes will be added here -->
                                                </div>
                                            </td>
                                            <td>
                                                <input id="btnAdd" type="button" value="เพิ่มผู้ติดต่อ"
                                                       style="  font-family: 'Athiti', sans-serif;"/>
                                            </td>
                                        </tr>
                                    </table>
                                    <br/>
                                    <!--                                    <input id="btnGet" type="button" value="Get Values"/>-->

                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading"><label style="font-size:20px;">ข้อมูลโซเชียล</label></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">FACEBOOK</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strFB" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">LINE</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strLine" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">WECHAT</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwechat" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">WhatsApp</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwhatsapp" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">INSTAGRAM</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strinstagram" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">WEBSITE</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwebsite" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="button" id="save" class="btn btn-info">ยืนยัน</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>


                </div>
            </div>
    </div>


</section>



<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnAdd").bind("click", function () {
            var div = $("<div />");
            div.html(GetDynamicTextBox(""));
            $("#TextBoxContainer").append(div);

        });
//        $("#btnGet").bind("click", function () {
//            var values = "";
//            var cells = [];
//            $(".inputG").each(function () {
//                if ($(this).find('.DynamicTextBoxName').val() != '') {
//                    cells.push($(this).find('.DynamicTextBoxName').val() + '#' + $(this).find('.DynamicTextBoxJob').val() + '#' + $(this).find('.DynamicTextBoxTel').val() + '#' + $(this).find('.DynamicTextBoxEmail').val());
//                }
//            });
//            alert(cells);
//        });
        $("body").on("click", ".remove", function () {
            $(this).closest("div").remove();
        });
    });
    function GetDynamicTextBox(value) {
        return '<div class="inputG"><table class="table" style="border-top: 2px solid #fff !important;"><tr><td> <label>ชื่อ-นามสกุล</label></td><td> <input name = "DynamicTextBox" class= "DynamicTextBoxName" type="text" value = "' + value + '" /></td>&nbsp;' +
            '<td> <label>ตำแหน่ง</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxJob" type="text" value = "' + value + '" /></td>&nbsp;' +
            '<td><input type="button" value="Remove" class="remove" style="font-family: Athiti, sans-serif;"/></td></tr>&nbsp;' +
            ' <tr style="border-top: 2px solid #fff !important;"><td> <label>เบอร์โทร</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxTel" type="text" value = "' + value + '" /></td>&nbsp;' +
            '<td> <label>อีเมล์</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxEmail" type="text" value = "' + value + '" /></td></tr></table></div>'
    }
</script>


<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script>
    (function ($) {
        $(function () {

            var addFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                var $formGroupClone = $formGroup.clone();

                $(this)
                    .toggleClass('btn-default btn-add btn-danger btn-remove')
                    .html('0–');
                // .position('top');
                // var html = $(this).position('left');
                $formGroupClone.find('input').val('');
                $formGroupClone.insertAfter($formGroup);

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', true);
                }
            };

            var removeFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', false);
                }

                $formGroup.remove();
            };

            var countFormGroup = function ($form) {
                return $form.find('.form-group').length;
            };

            $(document).on('click', '.btn-add', addFormGroup);
            $(document).on('click', '.btn-remove', removeFormGroup);

        });
    })(jQuery);
</script>


<script>
    $(document).ready(function () {

        var cid = "<?php echo $cid;?>";
        loadPrefixShop();
        loadPrefixName();
        $('#custTexAddress').show();
        $('#custContact').show();
        $('#strshopname').prop('disabled', false);
        $('#strfname').prop('disabled', true);
        $('#strlname').prop('disabled', true);
        $('#strpid').prop('disabled', true);
        $('#strtexid').prop('disabled', false);
        $("#strprefix").prop('disabled', true);
        $('#strtypeshop').prop('disabled', false);
        $('#stridshop').prop('disabled', false);
//        $("#strprefix").prop('disabled', true);

        $('#typeCust1').change(function () {
            if (!$(this).is(":checked")) {
                $('#typeCust2').prop("checked", true);
                $('#custTexAddress').show();
                $('#custContact').show();
                $('#strshopname').prop('disabled', false);
                $('#strfname').prop('disabled', true);
                $('#strlname').prop('disabled', true);
                $('#strpid').prop('disabled', true);
                $('#strtexid').prop('disabled', false);
                $('#stridshop').prop('disabled', false);
                $('#strtypeshop').prop('disabled', false);
                $("#strprefix").prop('disabled', true);
                clearData();
            } else {
                $('#typeCust2').prop("checked", false);
                $('#custTexAddress').hide();
                $('#custContact').hide();
                $('#strshopname').prop('disabled', true);
                $('#strfname').prop('disabled', false);
                $('#strlname').prop('disabled', false);
                $('#strpid').prop('disabled', false);
                $('#strtexid').prop('disabled', true);
                $('#stridshop').prop('disabled', true);
                $('#strtypeshop').prop('disabled', true);
                $("#strprefix").prop('disabled', false);
                clearData();
            }

        });

        $('#typeCust2').change(function () {
            if (!$(this).is(":checked")) {
                $('#typeCust1').prop("checked", true);
                $('#custTexAddress').hide();
                $('#custContact').hide();
                $('#strshopname').prop('disabled', true);
                $('#strfname').prop('disabled', false);
                $('#strlname').prop('disabled', false);
                $('#strpid').prop('disabled', false);
                $('#strtexid').prop('disabled', true);
//                $('#stridshop').prop('disabled', true);
//                $('#strtypeshop').prop('disabled', true);
                $('#stridshop').prop('disabled', true);
                $('#strtypeshop').prop('disabled', true);
                $("#strprefix").prop('disabled', false);
                clearData();
            } else {
                $('#typeCust1').prop("checked", false);
                $('#custTexAddress').show();
                $('#custContact').show();
                $('#strshopname').prop('disabled', false);
                $('#strfname').prop('disabled', true);
                $('#strlname').prop('disabled', true);
                $('#strpid').prop('disabled', true);
                $('#strtexid').prop('disabled', false);
//                $('#stridshop').prop('disabled', false);
//                $('#strtypeshop').prop('disabled', false);
                $('#stridshop').prop('disabled', false);
                $('#strtypeshop').prop('disabled', false);
                $("#strprefix").prop('disabled', true);
                clearData();
            }

        });

        $('#copyAddress').change(function () {
            if ($(this).is(":checked")) {
                $("#straddress1").val($("#straddress").val());
                $("#strsubdistrict1").val($("#strsubdistrict").val());
                $("#strdistrict1").val($("#strdistrict").val());
                $("#strprovince1").val($("#strprovince").val());
                $("#strzipcode1").val($("#strzipcode").val());
                $("#straddress1").prop('disabled', true);
                $("#strsubdistrict1").prop('disabled', true);
                $("#strdistrict1").prop('disabled', true);
                $("#strprovince1").prop('disabled', true);
                $("#strzipcode1").prop('disabled', true);
            } else {
                $("#straddress1").prop('disabled', false);
                $("#strsubdistrict1").prop('disabled', false);
                $("#strdistrict1").prop('disabled', false);
                $("#strprovince1").prop('disabled', false);
                $("#strzipcode1").prop('disabled', false);
            }
        });


        if (cid != "") {
            var delay = 500; //1 second
            setTimeout(function () {
                //your code to be executed after 1 second
                loadDataCustomer(cid);
            }, delay);

        }

//        loadPrefixShop();
        function loadPrefixShop(){
            $("#strtypeshop").find('option').remove().end();
            $.post("../../service/getComboPrefixShop.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["SHOPPREFIX_CODE"] + ">" + jsonData["result"][i]["SHOPPREFIX_DESC"] + "</option>"
                    }
                    $("#strtypeshop").append(appendTxt);
//                    $("#strprovince1").append(appendTxt);
                }


            });
        }
//        loadPrefixName();
        function loadPrefixName(){
            $("#strprefix").find('option').remove().end();
            $.post("../../service/getComboPrefixName.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["PREFIX_CODE"] + ">" + jsonData["result"][i]["PREFIX_DESC"] + "</option>"
                    }
                    $("#strprefix").append(appendTxt);
//                    $("#strprovince1").append(appendTxt);
                }


            });
        }

//        alert('ddd');
        function clearData(cid) {
            $('#strshopname').val('');
            $('#strfname').val('');
            $('#strlname').val('');
            $('#strpid').val('');
            $('#strtexid').val('');
            $('#stridshop').val('');
        }

        function loadDataCustomer(cid) {
            $.post('../../service/getDataCustomer.php', {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var data1 = jsonData["data1"];
                var data2 = jsonData["data2"];
                var data3 = jsonData["data3"];
                var data4 = jsonData["data4"];
                if (statusRes == 1) {
                    if (data1[0]['CUST_TYPE_CODE'] == '1') {
                        $('#typeCust2').prop("checked", true);
                        $('#custTexAddress').show();
                        $('#custContact').show();
                        $('#strshopname').prop('disabled', false);
                        $('#strfname').prop('disabled', true);
                        $('#strlname').prop('disabled', true);
                        $('#strpid').prop('disabled', true);
                        $('#strtexid').prop('disabled', false);
                        $('#stridshop').prop('disabled', false);
                        $('#strtypeshop').prop('disabled', false);
                        $("#strprefix").prop('disabled', true);
                        $('#strtypeshop').val(data1[0]['CUST_SHOPTYPE_ID']);
                        $('#strprefix').val('1');
                    } else {
                        $('#typeCust2').prop("checked", false);
                        $('#typeCust1').prop("checked", true);
                        $('#custTexAddress').hide();
                        $('#custContact').hide();
                        $('#strshopname').prop('disabled', true);
                        $('#strfname').prop('disabled', false);
                        $('#strlname').prop('disabled', false);
                        $('#strpid').prop('disabled', false);
                        $('#strtexid').prop('disabled', true);
                        $('#stridshop').prop('disabled', true);
                        $('#strtypeshop').prop('disabled', true);
                        $("#strprefix").prop('disabled', false);
                        $('#strtypeshop').val('1');
                        $("#strprefix").val(data1[0]['CUST_PREFIX_ID']);
                    }
                    var ss = data1[0]['CUST_DISTRICT_ID'] + data1[0]['CUST_PROVINCE_ID'];


                    $("#strfname").val(data1[0]['CUST_NAME']);
                    $("#strlname").val(data1[0]['CUST_LASTNAME']);
                    $("#straddress").val(data1[0]['CUST_ADDRESS']);
                    $("#strsubdistrict").val(data1[0]['CUST_SUBDISTRICT']);
                    $("#strdistrict").val(ss);
                    $("#strprovince").val(data1[0]['CUST_PROVINCE_ID']);
                    $("#strzipcode").val(data1[0]['CUST_ZIPCODE']);
                    $("#strshopname").val(data1[0]['CUST_SHOPNAME']);
                    $("#strtexid").val(data1[0]['CUST_TEXID']);
                    $("#strtell").val(data1[0]['CUST_TEL']);
                    $("#strmobile").val(data1[0]['CUST_PHONE']);
                    $("#stremail").val(data1[0]['CUST_EMAIL']);
                    $("#strpid").val(data1[0]['CUST_PID']);
                    $("#stridshop").val(data1[0]['CUST_SHOPID']);
//                    alert(ss);
                    if (data2 != '') {
                        $("#straddress1").val(data2[0]['CUST_ADDRESS']);
                        $("#strsubdistrict1").val(data2[0]['CUST_SUBDISTRICT']);
                        $("#strdistrict1").val(data2[0]['CUST_DISTRICT_ID'] + data1[0]['CUST_PROVINCE_ID']);
                        $("#strprovince1").val(data2[0]['CUST_PROVINCE_ID']);
                        $("#strzipcode1").val(data2[0]['CUST_ZIPCODE']);
                    } else {
                        $("#straddress1").val('');
                        $("#strsubdistrict1").val('');
                        $("#strdistrict1").val('');
                        $("#strprovince1").val('');
                        $("#strzipcode1").val('');
                    }
                    if (data3 != '') {
//                        alert(JSON.stringify(data3));
//                        alert(data3.length);
                        var div = $("<div />");
                        var append = '';
                        var gjob = '';
                        var gtel = '';
                        var gemail = '';
                        for (var i = 0; i < data3.length; i++) {
                            if (data3[i]['CUST_CONTACT_JOB'] != '') {
                                gjob = data3[i]['CUST_CONTACT_JOB'];
                            } else {
                                gjob = '';
                            }
                            if (data3[i]['CUST_CONTACT_PHONE'] != '') {
                                gtel = data3[i]['CUST_CONTACT_PHONE'];
                            } else {
                                gtel = '';
                            }
                            if (data3[i]['CUST_CONTACT_EMAIL'] != '') {
                                gemail = data3[i]['CUST_CONTACT_EMAIL'];
                            } else {
                                gemail = '';
                            }
                            append = append + '<div class="inputG"><table class="table" style="border-top: 2px solid #fff !important;"><tr><td> <label>ชื่อ-นามสกุล</label></td><td> <input name = "DynamicTextBox" class= "DynamicTextBoxName" type="text" value = "' + data3[i]['CUST_CONTACT_NAME'] + '" /></td>&nbsp;' +
                                '<td> <label>ตำแหน่ง</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxJob" type="text" value = "' + gjob + '" /></td>&nbsp;' +
                                '<td><input type="button" value="Remove" class="remove" style="font-family: Athiti, sans-serif;"/></td></tr>&nbsp;' +
                                ' <tr style="border-top: 2px solid #fff !important;"><td> <label>เบอร์โทร</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxTel" type="text" value = "' + gtel + '" /></td>&nbsp;' +
                                '<td> <label>อีเมล์</label></td><td> <input name = "DynamicTextBox" class = "DynamicTextBoxEmail" type="text" value = "' + gemail + '" /></td></tr></table></div>'
                        }
                        div.html(append);
                        $("#TextBoxContainer").append(div);
                    }
/////////////////// SOCIAL /////////////////////////
                    if (data4 != "") {
                        $("#strFB").val(data4[0]['FACEBOOK_URL']);
                        $("#strinstagram").val(data4[0]['INSTAGRAM_ID']);
                        $("#strLine").val(data4[0]['LINE_ID']);
                        $("#strwechat").val(data4[0]['WECHAT_ID']);
                        $("#strwhatsapp").val(data4[0]['WHATSAPP_ID']);
                        $("#strwebsite").val(data4[0]['PAGE_URL']);
                    } else {
                        $("#strFB").val('');
                        $("#strinstagram").val('');
                        $("#strLine").val('');
                        $("#strwechat").val('');
                        $("#strwhatsapp").val('');
                        $("#strwebsite").val('');
                    }

                }

            });
        }

    });
</script>
<script>
    $(document).ready(function () {

        var cid = "<?php echo $cid;?>";
        $('#save').bind("click", function () {
//            alert($("#strprovince").val());
//            alert($("#strprovince option:selected").text());
            var mode;
            var cells = [];
            var address2;
            var subdist2;
            var dist2;
            var distd2;
            var prov2;
            var provd2;
            var zip2;
            if ($('#typeCust2').is(":checked")) {
//                alert('xxxx');
                ////////// full ///////////////
                if ($('#strshopname').val() == "") {
                    alert('กรุณากรอกชื่อสถานประกอบการ');
                    $('#strshopname').focus();
                } else if ($('#straddress').val() == "") {
                    alert('กรุณากรอกสถานที่ตั้ง');
                    $('#straddress').focus() == ""
                } else if ($('#strsubdistrict').val() == "") {
                    alert('กรุณากรอกตำบล');
                    $('#strsubdistrict').focus() == ""
                } else if ($('#strzipcode').val() == "") {
                    alert('กรุณากรอกรหัสไปรษณีย์');
                    $('#strzipcode').focus() == ""
                } else if ($('#strzipcode').val() == "") {
                    alert('กรุณากรอกรหัสไปรษณีย์');
                    $('#strzipcode').focus() == ""
                } else if ($('#strtexid').val() == "") {
                    alert('กรุณากรอกเลขประจำตัวผู้เสียภาษี');
                    $('#strtexid').focus() == ""
                } else {
                    mode = 1;
                    var str = $("#strdistrict1").val();
                    address2 = $("#straddress1").val();
                    subdist2 = $("#strsubdistrict1").val();
                    dist2 = str.substr(0, 2);
                    distd2 = $("#strdistrict1 option:selected").text();
                    prov2 = $("#strprovince1").val();
                    provd2 = $("#strprovince1 option:selected").text();
                    zip2 = $("#strzipcode1").val();

                    $(".inputG").each(function () {
                        if ($(this).find('.DynamicTextBoxName').val() != '') {
                            cells.push($(this).find('.DynamicTextBoxName').val() + '#' + $(this).find('.DynamicTextBoxJob').val() + '#' + $(this).find('.DynamicTextBoxTel').val() + '#' + $(this).find('.DynamicTextBoxEmail').val());
                        }
                    });

                    if (cid == "") {
                        insertData(mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2);
                    } else {
                        updateData(cid, mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2);
                    }
                }
            } else if ($('#typeCust1').is(":checked")) {
//                alert('yyy');
                if ($('#strfname').val() == "") {
                    alert('กรุณากรอกชื่อ');
                    $('#strfname').focus();
                } else if ($('#strlname').val() == "") {
                    alert('กรุณากรอกนามสกุล');
                    $('#strlname').focus() == ""
                } else if ($('#straddress').val() == "") {
                    alert('กรุณากรอกสถานที่ตั้ง');
                    $('#straddress').focus() == ""
                } else if ($('#strsubdistrict').val() == "") {
                    alert('กรุณากรอกตำบล');
                    $('#strsubdistrict').focus() == ""
                } else if ($('#strzipcode').val() == "") {
                    alert('กรุณากรอกรหัสไปรษณีย์');
                    $('#strzipcode').focus() == ""
                } else if ($('#strpid').val() == "") {
                    alert('กรุณากรอกเลขประจำตัวประชาชน');
                    $('#strpid').focus() == ""
                } else {
                    mode = 2;
                    address2 = '';
                    subdist2 = '';
                    dist2 = '';
                    distd2 = '';
                    prov2 = '';
                    provd2 = '';
                    zip2 = '';
                    if (cid == "") {
                        insertData(mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2);
                    } else {
                        updateData(cid, mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2);
                    }
                }
            }


        });


        function insertData(mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2) {
//
            if (cells == "") {
                cells = 'xxx'
            }
            var prefixname;
            var prefixnameDesc;
            var prefixnameShop;
            var prefixnameShopDesc;
            if(mode==1){
                prefixname = '';
                prefixnameDesc='';
                prefixnameShop=$('#strtypeshop').val();
                prefixnameShopDesc = $('#strtypeshop option:selected').text();
            }else if(mode==2){
                prefixname = $('#strprefix').val();
                prefixnameDesc=$('#strprefix option:selected').text();;
                prefixnameShop= '';
                prefixnameShopDesc = '';
            }
            var str = $("#strdistrict").val();
            var dist1 = str.substr(0, 2);
            var nullcol = '';
            $.post('../../service/insertNewCustomer.php', {
                /////////////// generral/////////////////
                custName: $("#strfname").val(),
                custLastName: $("#strlname").val(),
                custDesc: nullcol,
                custAddress: $("#straddress").val(),
                custSubDistrict: $("#strsubdistrict").val(),
                custDistrictID: dist1,
                custDistrictDESC: $("#strdistrict option:selected").text(),
                custProvinceID: $("#strprovince").val(),
                custProvinceDESC: $("#strprovince option:selected").text(),
                custZipcode: $("#strzipcode").val(),

                custTypeCode: mode,
                custShopName: $("#strshopname").val(),
                custTexId: $("#strtexid").val(),
                custTelContact: $("#strtell").val(),
                custMobile: $("#strmobile").val(),
                custEmailContact: $("#stremail").val(),
                custPid: $("#strpid").val(),
                custPrefixName: prefixnameDesc,
                custShopType: prefixnameShopDesc,
                custPrefixNameId: prefixname,
                custShopTypeId: prefixnameShop,
                custShopId: $("#stridshop").val(),
/////////////// contact ////////////////////////
                arrContact: cells,
//
/////////////////TEX ADDRESS /////////////////////
                custAddressT: address2,
                custSubDistrictT: subdist2,
                custDistrictIDT: dist2,
                custDistrictDESCT: distd2,
                custProvinceIDT: prov2,
                custProvinceDESCT: provd2,
                custZipcodeT: zip2,
////
//
/////////////////// SOCIAL /////////////////////////
                FBUrl: $("#strFB").val(),
                IGID: $("#strinstagram").val(),
                lineId: $("#strLine").val(),
                WeChatId: $("#strwechat").val(),
                WhatsAppId: $("#strwhatsapp").val(),
                PageUrl: $("#strwebsite").val()
            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res1 = jsonData["result"];
                if (statusRes == 1) {
                    if (res1 == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "add-cus.php";
                    }
                }
            });

        }

        function updateData(cid, mode, cells, address2, subdist2, dist2, distd2, prov2, provd2, zip2) {
            if (cells == "") {
                cells = 'xxx'
            }
//            alert($("#stridshop").val());
            var prefixname;
            var prefixnameDesc;
            var prefixnameShop;
            var prefixnameShopDesc;
            if(mode==1){
                prefixname = '';
                prefixnameDesc='';
                prefixnameShop=$('#strtypeshop').val();
                prefixnameShopDesc = $('#strtypeshop option:selected').text();
            }else if(mode==2){
                prefixname = $('#strprefix').val();
                prefixnameDesc=$('#strprefix option:selected').text();;
                prefixnameShop= '';
                prefixnameShopDesc = '';
            }
            var str = $("#strdistrict").val();
            var dist1 = str.substr(0, 2);
            var nullcol = '';
            $.post('../../service/updateCustomer.php', {
                cid: cid,
                /////////////// generral/////////////////
                custName: $("#strfname").val(),
                custLastName: $("#strlname").val(),
                custDesc: nullcol,
                custAddress: $("#straddress").val(),
                custSubDistrict: $("#strsubdistrict").val(),
                custDistrictID: dist1,
                custDistrictDESC: $("#strdistrict option:selected").text(),
                custProvinceID: $("#strprovince").val(),
                custProvinceDESC: $("#strprovince option:selected").text(),
                custZipcode: $("#strzipcode").val(),

                custTypeCode: mode,
                custShopName: $("#strshopname").val(),
                custTexId: $("#strtexid").val(),
                custTelContact: $("#strtell").val(),
                custMobile: $("#strmobile").val(),
                custEmailContact: $("#stremail").val(),
                custPid: $("#strpid").val(),
                custPrefixName: prefixnameDesc,
                custShopType: prefixnameShopDesc,
                custPrefixNameId: prefixname,
                custShopTypeId: prefixnameShop,
                custShopId: $("#stridshop").val(),
/////////////// contact ////////////////////////
                arrContact: cells,
//
/////////////////TEX ADDRESS /////////////////////
                custAddressT: address2,
                custSubDistrictT: subdist2,
                custDistrictIDT: dist2,
                custDistrictDESCT: distd2,
                custProvinceIDT: prov2,
                custProvinceDESCT: provd2,
                custZipcodeT: zip2,
////
//
/////////////////// SOCIAL /////////////////////////
                FBUrl: $("#strFB").val(),
                IGID: $("#strinstagram").val(),
                lineId: $("#strLine").val(),
                WeChatId: $("#strwechat").val(),
                WhatsAppId: $("#strwhatsapp").val(),
                PageUrl: $("#strwebsite").val()
            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res1 = jsonData["result"];
                if (statusRes == 1) {
                    if (res1 == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "add-cus.php";
                    }
                }
            });
        }

    });
</script>
<script>
    $(document).ready(function () {
        $("#strdistrict").change(function () {
            var str = $("#strdistrict").val();
            var selectPro = str.substr(2, 2);
            $("#strprovince").val(selectPro);


        });

        $("#strprovince").change(function () {
            var str = $("#strprovince").val();
            var selectDist = '01' + str;
            $("#strdistrict").val(selectDist);
        });
        // ร้านค้า
        $("#strdistrict1").change(function () {
            var str = $("#strdistrict1").val();
            var selectPro = str.substr(2, 2);
            $("#strprovince1").val(selectPro);

        });

        $("#strprovince1").change(function () {
            var str = $("#strprovince1").val();
            var selectDist = '01' + str;
            $("#strdistrict1").val(selectDist);
        });


        loadprt();
        loaddist();
        function loaddist() {
            $("#strdistrict").find('option').remove().end();
            $("#strdistrict1").find('option').remove().end();
            $.post("../../service/getDistrict.php").done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["DISTRICT_CODE"] + jsonData["result"][i]["PROVINCE_CODE"] + ">" + jsonData["result"][i]["DISTRICT_DESC"] + "</option>"
                    }
                    $("#strdistrict").append(appendTxt);
                    $("#strdistrict1").append(appendTxt);
                }


            });
        }

        function loadprt() {
            $("#strprovince").find('option').remove().end();
            $("#strprovince1").find('option').remove().end();
            $.post("../../service/getProvince.php").done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["PROVINCE_CODE"] + ">" + jsonData["result"][i]["PROVINCE_DESC"] + "</option>"
                    }
                    $("#strprovince").append(appendTxt);
                    $("#strprovince1").append(appendTxt);
                }


            });
        }
//

    });
</script>

<!--==============================
footer
=================================-->
<style>
    #footer {
        position: bottom;
    }

    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

</style>
<!-- <footer class="page-footer">
<div class="footer-copyright">
<div class="container">
© 2014 Copyright Text
<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
</div>
</div>
</footer> -->


<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
