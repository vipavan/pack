<?php

include '../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../err_authen.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>add product</title>
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
                    <a href="index.html">
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

            a {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
            }

            h1 {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
            }

            label {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
                width: auto;
            }

            body {
                /*background-color: #e1e1e1;*/
            }

            h2 {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
            }

            .btn {
                background-color: #00b1ba !important;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <!-- <li ><a href="add-product.php">นำข้อมูลเข้าคลังสินค้า</a></li> -->
                                <li><a href="check-stock.php">ตรวจสอบสินค้า</a></li>
                                <li class="current"><a href="">สร้างรายการส่งสินค้า</a></li>
                                <li><a href="manage-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <li class="fa fa-sign-out" style="float:right;"><a
                                        href="../../logout.php">ออกจากระบบ</a></li>

                            </ul>
                            <p style="float:right; font-size:18px;"><a href="">สวัสดี <?php echo loginFullName ?> </a>
                            </p>
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
        margin-left: 11%;
    }

    td {
        vertical-align: middle;
    }

    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: pink;
    }

</style>
<section id="content">
    <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" style="margin-top:20px; width:auto;">
                    <div class="panel-heading" style="height:53px; background-color:#e1e1e1; width:auto;">
                        <!-- <button type="button" class="btn btn-sm"  onclick="window.location='setting.html'" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> จัดการผู้ใช้งาน</button> -->
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กำหนดประเภทสินค้า</button> -->
                        <!-- <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">เพิ่มแพ็คเกจ</button> -->
                        <label style="font-size:20px;">รายการส่งสินค้า</label>
                        <!-- <input type="text" id="search" name="search" placeholder="Search.."> -->
                    </div>
                    <div class="panel-body">
                        <button type="button" onclick="window.location='create.php'" class="btn btn-sm"
                                style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                            สร้างรายการส่งสินค้า
                        </button>
                        <input type="text" id="search" class="light-table-filter form-control" data-table="order-table"
                               name="search" placeholder="Search..">

                        <div class="col-lg-12">
                            <table width="100%" class="table  table-bordered order-table" id="example">
                                <thead>
                                <tr style="text-align:center;">
                                    <th id="name" style="width:190px;text-align:center;"><label> เลขที่บิล</label></th>
                                    <th style="width:120px;text-align:center;"><label>วันที่สร้างบิล</label></th>
                                    <th style="width:290px;text-align:center;"><label>ผู้รับสินค้า</label></th>
                                    <th style="width:290px;text-align:center;"><label>ที่อยู่จัดส่ง</label></th>
                                    <th style="width:150px; text-align:center;"> <label>จำนวนสินค้าในคำสั่งซื้อ</label></th>
                                    <th style="text-align:center;"><label>สถานะบิล</label></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id='tb'>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- pennal body -->

                </div>  <!-- pennal-->

            </div>  <!-- cal 12 -->
        </div>  <!-- row -->
    </div>  <!-- contrener-->


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
<script>
    $(document).ready(function () {
        loadTable();

        function loadTable() {
            var cid = "<?php echo cid;?>";
            var lg = "<?php echo loginUserName;?>";
            $.post("../service/getOrderAll.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var address = "";
                    var append = "";
                    for (var i = 0; i < resL; i++) {
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var SO_DOCDATE = res[i]["SO_DOCDATE"];
                        var RECVNAME = res[i]["CNAME"];
//                        var RECV_ADDRESS = res[i]["RECV_ADDRESS"];
//                        var DISTRICT_DESC = res[i]["DISTRICT_DESC"];
//                        var PROVINCE_DESC = res[i]["PROVINCE_DESC"];
                        var RECV_TEL = res[i]["RECV_TEL"];
                        var PHONE = res[i]["RECV_PHONE"];
//                        var CUST_EMAIL_CONTACT = res[i]["RECV_EMAIL"];
                        var CUST_SHOPNAME = res[i]["RECV_SHOPNAME"];
                        var status = res[i]["SO_DOCSTATUS"];
                        var summary = res[i]["TOTAL"];

                        var option = '';
                        if (RECV_TEL != '') {
                            option = option + RECV_TEL + ',';
                        }
                        if (PHONE != '') {
                            option = option + PHONE + ',';
                        }
                        var str = SO_DOCDATE['date'];

                        var subMFD = str.substr(0, 10);
//                        var str2 = GOODS_EXPIRED_DATE['date'];
//                        var subMFD2 = str2.substr(0, 10);

                        var rexv = '';
                        if (RECVNAME == ' ' && CUST_SHOPNAME != ' ') {
                            rexv = CUST_SHOPNAME
                        } else if (RECVNAME != ' ' && CUST_SHOPNAME == ' ') {
                            rexv = RECVNAME
                        } else if (RECVNAME != ' ' && CUST_SHOPNAME != ' ') {
                            rexv = CUST_SHOPNAME + '(' + RECVNAME + ')';
                        }

                        if (res[i]["RECV_ADDRESS"] != '') {
                            address = address + 'ที่่อยู่  ' + res[i]["RECV_ADDRESS"] + ' ';
                        }
                        if (res[i]["RECV_SUBDISTRICT"] != '') {
                            address = address + 'ตำบล ' + res[i]["RECV_SUBDISTRICT"] + ' ';
                        }
                        if (res[i]["RECV_DISTRICT_DESC"] != '') {
                            address = address + 'อำเภอ ' + res[i]["RECV_DISTRICT_DESC"] + ' ';
                        }
                        if (res[i]["RECV_PROVINCE_DESC"] != '') {
                            address = address + 'จังหวัด ' + res[i]["RECV_PROVINCE_DESC"] + ' ';
                        }
                        if (res[i]["RECV_ZIPCODE"] != '') {
                            address = address + 'รหัสไปรษณีย์  ' + res[i]["RECV_ZIPCODE"] + ' ';
                        }
                        var txt = '';
                        if (status == 1) {
                            txt = 'รอการดำเนินการ';
                        } else if (status == 2) {
                            txt = 'รอการจัดส่ง';
                        } else if (status == 3) {
                            txt = 'ส่งสินค้าทางขนส่งเรียบร้แย'
                        }


                        var foo = option.substring(0, option.length - 1);

                        append = append + "<tr>";
                        // append = append + "<td>" + CID + "</td>";
                        append = append + "<td style=\"text-align:center;\">" + SO_DOCCODE + "</td>";
                        append = append + "<td width='120'style=\"text-align:center;\">" + subMFD + "</td>";
                        append = append + "<td width='160'style=\"text-align:center;\">" + rexv + "</td>";
                        append = append + "<td width='220'>" + address + "</td>";
                        append = append + "<td  width='180' style=\"text-align:center;\">" + summary + "</td>";
                        append = append + "<td  width='150' style=\"text-align:center;\">" + txt + "</td>";

                        append = append + "<td width='70'>";
                        append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                        append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                        append = append + "<ul class=\"dropdown-menu\">";
                        append = append + "<li><a href=\"\" >รายละเอียด</a></li>";
                        if (status == 1) {
                            append = append + "<li><a href=\"./updateStatusOrderDiscard.php?cid="+ cid +"&order="+ SO_DOCCODE + "&lg="+ lg +"\" onclick=\"return confirm('ต้อองการลบข้อมูลการจัดซื้อรายการนี้?,หากตกลงจะไม่สามารถนำกลับมาใช้ใหม่')\">ยกเลิกรายการ</a></li>";
                        }
//
                        append = append + "</ul>";
                        append = append + "</div>";
                        append = append + "</td>";
                        append = append + "</tr>";
                        address ='';
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
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เลือกลูกค้า</h4>
            </div>
            <div class="modal-body">
                <p>This is a large modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</div>
</div>
<!-- </div> -->
</div></div>
</div>
</div>
</div>
<!-- <article class="content_gray offset__2">
  <div class="container">

</article> -->

</section>
<!--==============================
              footer
=================================-->
<!-- <footer id="footer" style="position: fixed-x left bottom;">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
        </div>
      </div>
    </div>
  </div>
</footer> -->
<a href="#" id="toTop" class="fa fa-chevron-up"></a>

</body>
</html>
