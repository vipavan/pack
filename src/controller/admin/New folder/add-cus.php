<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}

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
        margin-left: 11%;
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

<section id="content" style="background-image:url(../../../assets/images/login-bg.png)">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:53px; background-image:url(../../../assets/images/head-panel-bg1.png)">
                        <button type="button" class="btn btn-sm"  id="newCustomer"
                                style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight: 700px;">
                            <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มข้อมูล
                        </button>
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มแพ็คเกจ</button> -->
                        <input type="text" id="search" class="light-table-filter form-control" data-table="order-table" name="search" placeholder="Search..">
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table  table-bordered order-table" id="example" cellspacing="0">
                            <thead>
                            <tr>

                                <th>ชื่อ</th>
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

        $('#newCustomer').click(function () {
            window.location = "./addcus-from.php?cid=";
        });


    });
</script>


<script>
    $(document).ready(function () {

        loadTable();


        function loadTable() {
            $.post("../../service/getCustomerAll.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    var CNAME ="";
                    for (i = 0; i < resL; i++) {
                        var CID = res[i]["CID"];
//
                        var ADDR = res[i]["CUST_ADDRESS"]+ ' ตำบล' +  res[i]["CUST_SUBDISTRICT"]+ ' อำเภอ' +  res[i]["CUST_DISTRICT_DESC"]+ ' จังหวัด' +  res[i]["CUST_PROVINCE_DESC"]+ ' รหัสไปรษณีย์'+  res[i]["CUST_ZIPCODE"];
                        var CUST_TEL = res[i]["CUST_TEL"];
                        var CUST_PHONE = res[i]["CUST_PHONE"];
                        var CUST_EMAIL = res[i]["CUST_EMAIL"];

                        var CUST_STATUS = res[i]["CUST_STATUS"];
                        var type = res[i]["CUST_TYPE_CODE"];

                        if(type=='1'){
                            CNAME =  res[i]["CUST_SHOPNAME"];
                        }else{
                            CNAME =  res[i]["CUST_NAME"] + ' ' +  res[i]["CUST_LASTNAME"];
                        }

                        var option = '';
                        if (CUST_TEL != '') {
                            option = option +  CUST_TEL + ',';
                        }
                        if (CUST_PHONE != '') {
                            option = option + CUST_PHONE + ',';
                        }
                        var foo = option.substring(0, option.length - 1);
//                        alert(foo);
                        if (CUST_STATUS == 0) {
                            append = append + "<tr bgcolor=\"#f1f1f1\" style=\"color:#E84A2D;\">";
                            // append = append + "<td>" + CID + "</td>";

                            append = append + "<td>" + CNAME + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + CUST_EMAIL + "</td>";
                            append = append + "<td>" + ADDR + "</td>";

                            append = append + "<td align=\"center\">";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";


                            append = append + "<li><a href=\"./active-cus.php?cid=" + CID + "\" >นำกลับมาใช้</a></li>";

                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        } else {

                            append = append + "<tr>";
                            // append = append + "<td>" + CID + "</td>";
                            append = append + "<td>" + CNAME + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + CUST_EMAIL + "</td>";
                            append = append + "<td>" + ADDR + "</td>";

                            append = append + "<td width='70'>";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";
                            append = append + "<li><a href=\"./addcus-from.php?cid=" + CID + "\" >แก้ไข</a></li>";


                            append = append + "<li><a href=\"./deactive-cus.php?cid=" + CID + "\" >ยกเลิกรายการ</a></li>";
                            append = append + "<li class=\"divider\"></li>";
                            append = append + "<li><a href=\"./addnewLogin.php?cid=" + CID + "&fullname="+ CNAME +"\"  >เพิ่มชื่อผู้ใช้งาน</a></li>";

                            // append = append + "<li><a href=\"./updateLogin.php?cid=" + CID + "\">แก้ไขรหัสผ่าน</a></li>";

                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        }
                    }
                    $('#tb').append(append);
                    $('#example').DataTable({
                        "paging": false,

                        "searching" : false,
                        // "ordering": false,
//                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        responsive:true,

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
