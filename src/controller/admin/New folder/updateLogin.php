<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid=$_REQUEST['cid'];

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

    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/media/css/jquery.dataTables.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/examples/resources/syntax/shCore.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/examples/resources/demo.css">-->
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
                                <li><a href="">รายงาน</a></li>
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
        margin-left: 31%;
    }

    td {
        vertical-align: middle;
    }

    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: pink;
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

<section id="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:53px;">

                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="">ชื่อผู้ใช้งาน</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="strusername" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="">รหัสผ่าน</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" id="strpass" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="">ยืนยันรหัสผ่าน</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" id="strconfpass" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-5">
                                  <button type="button" id="cancel " onclick="window.location='add-cus.php'"  class="btn btn-info">ยกเลิก</button>
                                    <button type="button" id="saveUsername" class="btn btn-info">ยืนยัน</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>


</section>


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->


<script>
    $(document).ready(function () {
        var cid = "<?php echo $cid; ?>";
//        alert(cid);
        loadData(cid);
        $('#saveUsername').click(function () {
//
            var cid = "<?php echo $cid; ?>";
            var username = $('#strusername').val();
            var password = $('#strpass').val();
            var conpass = $('#strconfpass').val();
//            var type = '12';
            if(password == conpass) {
                $.post('../../service/updatePasswordCustomer.php', {
                    cid: cid,
                    username: username,
                    password: password


                }).done(function (data) {
                    var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                    var statusRes = jsonData["status"];
                    var res = jsonData["result"];

                    if (statusRes == 1) {
                        if (res == "success") {
                            alert('บันทึกเรียบร้อย');
                            window.location = "./add-cus.php";
                        }
                    }
                });
            }else{
                alert('รหัสผ่านและยืนยันรหัสผ่านไม่ตรง กรุณาตรวจสอบ');
                $('#strpass').focus();
            }

        });

        function loadData(cid) {
            $.post('../../service/getLoginCustomer.php', {
                cid: cid
            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];
                if (statusRes == 1) {
                    if (res != "") {
                        var username = res[0]['LOGIN_USERNAME'];
                        $('#strusername').val(username);
                    }else{
                        alert('กรุณาเพิ่มผู้ใช้งานระบบก่อน');
                        window.location = "add-cus.php";
                    }
                }
            });

        }


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
