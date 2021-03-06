<?php

include '../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../err_authen.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>setting</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/style-add.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../assets/js/script.js"></script>
    <script src="../../assets/js/superfish.js"></script>
    <script src="../../assets/js/jquery.equalheights.js"></script>
    <script src="../../assets/js/jquery.mobilemenu.js"></script>
    <script src="../../assets/js/tmStickUp.js"></script>
    <script src="../../assets/js/jquery.ui.totop.js"></script>
    <!-- start data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css ">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css ">
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js "></script>
    <!--end datatable  -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        $(window).load(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
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
                        <img src="../../assets/images/logo1.png" alt="Logo alt" style="height:120px; width:120px;">
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
                color: #00b1ba;
            }

            .modal-title {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                color: #00b1ba;
            }

            label {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                /*color:#00b1ba;*/
            }

            .btn {
                background-color: #00b1ba !important;

            }

            #detail {
                float: left !important;
                margin-left: 31%;
            }

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                /*color:#7f5373;*/
            }
        </style>
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="check-stock.php">ตรวจสอบสินค้า</a></li>
                                <li><a href="send-goods.php">สร้างรายการส่งสินค้า</a></li>
                                <li class="current"><a href="">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <!-- <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li> -->
                                <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                                        href="../../logout.php">ออกจากระบบ</a></li>

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
        background-image: url('../../assets/images/searchicon.png');
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
</style>
<section id="content">
    <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:53px; background-color:#e1e1e1;">
                        <!-- <button type="button"  onclick="window.location='settingedit.php'" class="btn btn-sm" data-toggle="modal" data-target="#myModal-add"  style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มผู้ใช้งาน</button> -->
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กำหนดประเภทสินค้า</button> -->
                        <input type="button" id="newItem" class="btn btn-sm" data-toggle="modal" data-target="#myModal"
                               style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"
                               value="เพิ่มข้อมูลลูกค้า">
                        <input type="text" class="light-table-filter form-control" data-table="order-table" id="search"
                               name="search" placeholder="Search..">
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table  table-bordered order-table" id="example" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ชื่อร้านค้า</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>เบอร์โทร</th>
                                <th>อีเมล์</th>
                                <th>ที่อยู่</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody id="tb">
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </div>


</section>
<!-- start filter-->
<script>
    (function (document) {
        'use strict';

        var LightTableFilter = (function (Arr) {

            var _input;

            function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function (table) {
                    Arr.forEach.call(table.tBodies, function (tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }

            function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }

            return {
                init: function () {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    Arr.forEach.call(inputs, function (input) {
                        input.oninput = _onInputEvent;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function () {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });

        $.toggleShowPassword = function (options) {
            var settings = $.extend({
                field: "#password",
                control: "#toggle_show_password",
            }, options);

            var control = $(settings.control);
            var field = $(settings.field)

            control.bind('click', function () {
                if (control.is(':checked')) {
                    field.attr('type', 'text');
                } else {
                    field.attr('type', 'password');
                }
            })
        };
    })(document);
</script>
<!-- end filter -->

<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script>
    $(document).ready(function () {
        var cid = "<?php echo cid;?>";
        $('#newItem').click(function () {
//            alert('dddd');

            var lg = "<?php echo loginUserName;?>";

            window.location = "./manage-cus-new.php?cid=" + cid + "&recvid=";

        });
        loadTable();


        function loadTable() {
            $.post("../service/getDataRecv.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var RECVID = res[i]["RECVID"];
                        var CNAME = res[i]["RNAME"];
                        var ADDR = res[i]["ADDR"];
                        var TEL = res[i]["TEL"];
                        var PHONE = res[i]["PHONE"];
                        var CUST_EMAIL_CONTACT = res[i]["RECV_EMAIL"];
                        var CUST_SHOPNAME = res[i]["RECV_SHOPNAME"];
                        var option = '';
                        if (TEL != '') {
                            option = option +  TEL + ',';
                        }
                        if (PHONE != '') {
                            option = option + PHONE + ',';
                        }

                        var foo = option.substring(0, option.length - 1);

                        append = append + "<tr>";
                        // append = append + "<td>" + CID + "</td>";
                        append = append + "<td>" + CUST_SHOPNAME + "</td>";
                        append = append + "<td width='150'>" + CNAME + "</td>";
                        append = append + "<td width='100'>" + foo + "</td>";
                        append = append + "<td width='150'>" + CUST_EMAIL_CONTACT + "</td>";
                        append = append + "<td  width='250'>" + ADDR + "</td>";

                        append = append + "<td width='70'>";
                        append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                        append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                        append = append + "<ul class=\"dropdown-menu\">";
                        append = append + "<li><a href=\"./manage-cus-new.php?cid=" + cid + "&recvid="+ RECVID +"\" >แก้ไข</a></li>";


                        append = append + "</ul>";
                        append = append + "</div>";
                        append = append + "</td>";
                        append = append + "</tr>";

                    }
//                    alert(append);
                    $('#tb').append(append);
                    $('#example').DataTable({
                        "paging": false,

                        "searching": false,
                        // "ordering": false,
//                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        responsive: true,

                    });

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
