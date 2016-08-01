<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$lg = $_REQUEST['lg'];
$rn = $_REQUEST['rn'];
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

            #detail {
                float: left !important;
                margin-left: 31%;
            }

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                color: #7f5373;
            }
        </style>
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index-admin.php">Home</a></li>
                                <li><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="manage-product.php">จัดการสินค้า</a></li>
                                <li><a href="">รายงาน</a></li>
                                <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                                <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                                        href="../../logout.php">ออกจากระบบ</a></li>

                            </ul>
                            <p style="float:right; font-size:18px; margin-right:30px;"> สวัสดี <?php echo loginFullName ?></p>
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
</style>
<section id="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:53px; background-color:#e1e1e1;">
                        <!-- <button type="button" class="btn btn-sm"  style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มผู้ใช้งาน</button> -->
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กำหนดประเภทสินค้า</button> -->
                        <!-- <button type="button"  onclick="window.location='setting-package.php'" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">จัดการแพ็คเกจ</button> -->
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">

                                <label class="control-label col-sm-4" for="">สิทธิการใช้งาน</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="strprivilege">
                                        <option value="12">user</option>
                                        <option value="11">admin</option>

                                    </select>
                                </div>
                            </div>
                            <div id="sCus">
                                <div class="form-group">

                                    <label class="control-label col-sm-4" for="">ชื่อลูกค้า</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="strcid">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="nameUser">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="">ชื่อ:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="strname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="">นามสกุล:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="strlname" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="">ชื่อผู้ใช้งาน</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="strusername" placeholder="">
                                </div>
                            </div>
                            <div id="mode">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="">รหัสผ่าน</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="strpassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="">ยืนยันรหัสผ่าน</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="strconpassword" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-5">
                                    <button type="button" onclick="window.location='setting.php'" id="cancel"
                                            class="btn btn-info">ยกเลิก
                                    </button>
                                    <button type="button" id="save" class="btn btn-info">ยืนยัน</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>


<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script>
    $(document).ready(function () {
// alert ('dddd');
        $('#mode').hide();
        var lg = "<?php echo $lg;?>";
        var rn = "<?php echo $rn;?>";
//        loadCid(lg);
//        loadCid(lg);
        chk('12');
        if (lg == "" && rn == "") {
//            alert('new add');
            $('#mode').show();
            $('#save').click(function () {
                // alert ('dddd');

                var privilege = $('#strprivilege').val();
                var cid1 = $('#strcid').val();
                var name = $('#strname').val();
                var lname = $('#strlname').val();
                var username = $('#strusername').val();
                var password = $('#strpassword').val();
                var conpassword = $('#strconpassword').val();
                if (username != "" && password != "" && conpassword != "") {
                    if (password == conpassword) {
                        $.post('../../service/getChkUser.php', {
                            username: username

                        }).done(function (data) {
                            var jsonData = JSON.parse(data);
                            alert(JSON.stringify(jsonData));
//            var statusRes = jsonData["status"];
                            var res = jsonData["result"][0]['C'];
                            alert(res);
                            if (res > 0) {
                                alert('ชือผู้ใช้ซ้ำในระบบ กรุณาตรวจสอบ');
                            } else {
                                if (privilege == 11) {
                                    $.post('../../service/insertNewUser.php', {
                                        cid: '',
                                        loginUsername: username,
                                        loginPassword: password,
                                        userTypeCode: privilege,
                                        fullName: name + ' ' + lname

                                    }).done(function (data) {
                                        var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                                        var statusRes = jsonData["status"];
                                        var res = jsonData["result"];

                                        if (statusRes == 1) {
                                            if (res == "success") {
                                                alert('บันทึกเรียบร้อย');
                                                window.location = "./setting.php";
                                            }
                                        }
                                    });
                                } else {
//                            alert(cid1);
                                    $.post("../../service/getDataCustomer.php", {cid: cid1}).done(function (data) {
                                        var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                                        var statusRes = jsonData["status"];
                                        if (statusRes == 1) {

                                            var namec = jsonData["result"][0]['CUST_NAME'];
                                            var lnamec = jsonData["result"][0]['CUST_LASTNAME'];
                                            $.post('../../service/insertNewUser.php', {
                                                cid: cid1,
                                                loginUsername: username,
                                                loginPassword: password,
                                                userTypeCode: privilege,
                                                fullName: namec + ' ' + lnamec

                                            }).done(function (data) {
                                                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                                                var statusRes = jsonData["status"];
                                                var res = jsonData["result"];

                                                if (statusRes == 1) {
                                                    if (res == "success") {
                                                        alert('บันทึกเรียบร้อย');
                                                        window.location = "./setting.php";
                                                    }
                                                }
                                            });
                                        }


                                    });

                                }
                            }
                        });

                    } else {
                        alert('รหัสผ่านและยืนยันรหัสผ่านไม่ตรง กรุณาตรวจสอบ');
                        $('#strpassword').focus();
                    }
                } else {
                    if (username == '') {
                        alert("กรุณากรอกชื่อผุ้ใช้งาน");
                        $('#strusername').focus();
                    } else if (password == '') {
                        alert("กรุณากรอกรหัสผ่าน");
                        $('#strpassword').focus();
                    } else if (conpassword == '') {
                        alert("กรุณากรอกยืนยันรหัสผ่าน");
                        $('#strconpassword').focus();
                    }
                }


            });
        } else {
//            alert('edit');
            $('#mode').hide();
            var username = "<?php echo $lg?>";
            var privilege = "<?php echo $rn;?>";
            if(privilege=='ADMIN'){
                $("#sCus").hide();
                $("#nameUser").show();
                $('#strprivilege').val('11');
                $('#strprivilege').prop('disabled', 'disabled');
                $.post('../../service/getUseradmin.php', {
                    username: username

                }).done(function (data) {
                    var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                    var res = jsonData["result"][0]['FULLNAME'];

                    var str = res.split(" ");
                    var name = str[0].toString();
                    var lname = str[1].toString();
                    $('#strname').val(name);
                    $('#strlname').val(lname);
                });
            }else{
                $("#sCus").show();
                $("#nameUser").hide();
                $('#strprivilege').val('12');
                $('#strprivilege').prop('disabled', 'disabled');
                loadCid2(username);
//                alert("ddddd");
            }

//            $('#strprivilege').prop('disabled', 'disabled');
//            $('#strcid').prop('disabled', 'disabled');
//            alert(username);


//            $('#save').click(function () {
//                    // alert ('dddd');
//
//                var privilege = $('#strprivilege').val();
//
//               var username = $('#strusername').val();
//                var privilege = "<?php ////echo $rn;?>////";
//               $.post('../../service/getChkUser.php', {
//                    username: username
//
//                }).done(function (data) {
//                    var jsonData = JSON.parse(data);
//                       alert(JSON.stringify(jsonData));
//            var statusRes = jsonData["status"];
//                    var res = jsonData["result"][0]['C'];
//                    alert(res);
//                    if (res > 0) {
//                        alert('ชือผู้ใช้ซ้ำในระบบ กรุณาตรวจสอบ');
//                    } else {
//                        if (privilege == "ADMIN") {
//                            $.post('../../service/updateUsername.php', {
//                                loginUsername: username
//
//                            }).done(function (data) {
//                                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
//                                var statusRes = jsonData["status"];
//                                var res = jsonData["result"];
//
//                               if (statusRes == 1)
//                               {if (res == "success") {
//                                        alert('บันทึกเรียบร้อย');
//                                        window.location = "./setting.php";
//                                    }
//                                }
//                            });
//                        } else {
//                            alert(cid1);
//                            $.post('../../service/updateUsername.php', {
//                                loginUsername: username
//
//                            }).done(function (data) {
//                                var jsonData = JSON.parse(data);
////                alert(JSON.stringify(jsonData));
//                                var statusRes = jsonData["status"];
//                                var res = jsonData["result"];
//
//                                if (statusRes == 1) {
//                                    if (res == "success") {
//                                        alert('บันทึกเรียบร้อย');
//                                        window.location = "./setting.php";
//                                    }
//                                }
//                            });
//                        }
//
//
//                    }
//                });
//
//
//                }
//            );
        }


    })
    ;

    function clearForm() {
        $('#strprivilege').val();
        $('#strname').val();
        $('#strlname').val();
        $('#strpassword').val();
        $('#conpassword').val();

    }
    $('#strprivilege').change(function () {
//        alert($('#strprivilege').val());
        chk($('#strprivilege').val());
        alert($('#strcid').val());
    });
    //    alert( $('#strcid').val());
    function chk(id) {
        if (id == 11) {
//            $('#strcid').prop('disabled', 'disabled');
//            $("#strcid").find('option').remove().end();
            $('#nameUser').show();
            $('#sCus').hide();
            $('#strcid').val('');
        } else {
//            $('#strcid').prop('disabled', false);
            $('#sCus').show();
            loadCid();
            $('#nameUser').hide();
        }
    }

    function loadCid2(username) {

        $.post("../../service/getCid.php", {username: username}).done(function (data) {
            var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
            var statusRes = jsonData["status"];
            var res = jsonData["result"][0]['CID'];
//            alert(res);
            $("#strcid").val(res);

        });

    }

    function loadCid() {
        $("#strcid").find('option').remove().end();
        $.post("../../service/getCustomerAll.php").done(function (data) {
            var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
            var statusRes = jsonData["status"];
            var appendTxt = "";
            if (statusRes == 1) {
                var datalength = jsonData["result"].length;
                for (var i = 0; i < datalength; i++) {
                    var cid = jsonData["result"][i]["CID"];
                    var str = jsonData["result"][i]["CNAME"];
//                    var res = str.split(" ");
//                    var name = res[0].toString();
//                    var lname = res[1].toString();
//                    var phone = jsonData["result"][i]["TEL"];
//                    var aphone = phone.split(",");
//                    var pTel = '';
//                    if(phone!=","){
//                        var aphone = phone.split(",");
//                        var p1 = aphone[0].toString();
//                        var p2 ='';
//                        if(aphone[1].toString() != '' ){
//                            p2 = ', ('+ aphone[1].toString() +')';
//                        }
//                        pTel = p1 + p2;
//                    }
                    var shop = jsonData["result"][i]["CUST_SHOPNAME"];
                    var tmp = "";
                    if (shop == "") {
                        tmp = "";
                    } else {
                        tmp = " (" + shop + ") "
                    }
                    appendTxt = appendTxt + "<option value=" + cid + ">" + str + tmp + "</option>"
                }
                $("#strcid").append(appendTxt);
            }


        });
    }

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
