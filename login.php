<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Pack2Go</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--lobibox-->
    <link rel="stylesheet" type="text/css" media="screen" href="./lib/lobibox-master/css/lobibox.css">
    <link rel="stylesheet" href="./lib/lobibox-master/dist/css/lobibox.min.css"/>

</head>

<body>
<script type="text/javascript" src="./lib/lobibox-master/lib/jquery.1.11.js"></script>
<script type="text/javascript" src="./lib/lobibox-master/dist/js/lobibox.js"></script>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">
        <style>
            .form-login {
                border: 1px solid #c4c4c4;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                box-shadow: 0px 0px 8px #d9d9d9;
                -moz-box-shadow: 0px 0px 8px #d9d9d9;
                -webkit-box-shadow: 0px 0px 8px #d9d9d9;
            }
        </style>
        <form class="form-login">
            <center>
                <h2 class="form-login-heading"> กรุณาเข้าสู่ระบบ iiii <img src="assets/images/logo1.png"
                                                                      style="width:100px; height:100px; margin-left:2%;">
                </h2></center>

            <div class="login-wrap">

                <input type="text" id="username" class="form-control" placeholder="ชื่อผู้ใช้" value="test"
                       autofocus>
                <br>
                <input type="password" id="password" class="form-control" placeholder="รหัสผ่าน" value="1234">
                <br>
                <inbut class="btn btn-theme btn-block" id="login" type="submit"><i class="fa fa-lock"></i> เข้าสู่ระบบ
                </inbut>
                <!-- <hr> -->
            </div>


        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("assets/images/login-bg.png", {speed: 500});
</script>

<script>
    $(document).ready(function () {


        $('#login').click(function () {
            var username = $('#username').val();
            var password = $('#password').val();
            if (username != '' && password != '') {
                $.post("./src/service/getLogin.php", {
                    username: $('#username').val(),
                    password: $('#password').val()
                }).done(function (data) {
                    var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                    var statusRes = jsonData["status"];
                    var res = jsonData["result"];

                    if (statusRes == 1) {
                        if (res != "") {
                            var loginUserName = res[0]['LOGIN_USERNAME'];
                            var loginFullName = res[0]['FULLNAME'];
                            var userTypeCode = res[0]['USER_TYPE_CODE'];
                            var cid = res[0]['CID'];
//                            alert(loginUserName + ',' + loginFullName + ',' + userTypeCode + ',' + cid);
                            $.post("./src/service/insertLogsLogin.php", {
                                username: loginUserName,
                                cid: cid
                            }).done(function (data) {
                            });
                            var url = "./processlogin.php";
                            window.location = url + "?loginUserName=" + loginUserName + "&loginFullName=" + loginFullName + "&userTypeCode=" + userTypeCode + "&cid=" + cid;


                        } else {
                            alert('ชื่อหรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบ');
                            $('#username').focus();
                        }
                    }
                });
            }
            else {
                if (username == '') {
                    alert('กรุณากรอกชื่อ');
                    $('#username').focus();
                } else {
                    alert('กรุณากรอกรหัสผ่าน');
                    $('#password').focus();
                }
            }


        });


    });

</script>
</body>
</html>
