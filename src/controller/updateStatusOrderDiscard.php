<?php

$cid  = $_REQUEST['cid'];
$order  = $_REQUEST['order'];
$lg =$_REQUEST['lg'];


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
    <!--    <link rel="stylesheet" href="../../../assets/css/font.css">-->
    <!--    <link rel="stylesheet" href="../../../assets/css/style-cus.css">-->
    <!--    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">-->
    <script src="../../assets/js/jquery.js"></script>
    <!--    <script src="../../../assets/js/jquery-migrate-1.1.1.js"></script>-->
    <!--    <script src="../../../assets/js/jquery.easing.1.3.js"></script>-->
    <!--    <script src="../../../assets/js/script.js"></script>-->
    <!--    <script src="../../../assets/js/superfish.js"></script>-->
    <!--    <script src="../../../assets/js/jquery.equalheights.js"></script>-->
    <!--    <script src="../../../assets/js/jquery.mobilemenu.js"></script>-->
    <!--    <script src="../../../assets/js/tmStickUp.js"></script>-->
    <!--    <script src="../../../assets/js/jquery.ui.totop.js"></script>-->
    <!--</head>-->
<body>

</body>
<script>
    $(document).ready(function () {
        var cid = "<?php echo $cid?>";
        var order = "<?php echo $order?>";
        var lg = "<?php echo $lg?>";
//        alert(cid);
        $.post('../service/updateStatusOrderDiscard.php', {
            cid:cid,order:order,lg:lg
        }).done(function (data) {
            var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
            var statusRes = jsonData["status"];
            var res = jsonData["result"];

            if (statusRes == 1) {
                if (res == "success") {
                    alert('บันทึกเรียบร้อย');
                    window.location='send-goods.php';
                }
            }
        });
    });
</script>
</html>