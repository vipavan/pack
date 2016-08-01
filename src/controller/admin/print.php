<html lang="en">
<meta charset="utf-8">
<head>

  <title></title>
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../../../assets/css/font.css">
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
  <head>
    <body Onload="window.print();">
      <page size="A5" layout="portrait">
      <style type="text/css" media="print">
      /*@media (max-width: 6in) {
      @page {
      size: A4 landscape;
    }
    }*/
    page[size="A4"][layout="portrait"] {
      width: 29.7cm;
      height: 21cm;
    }
    @media print {
      body, page {
        /*margin: 0;*/
        box-shadow: 0;
        color: #333333;
	margin-top: 2cm;
	margin-right: 2cm;
	margin-bottom: 1.5cm;
	margin-left: 2cm
      }
    }
    </style>

    <style>
    #head{
      margin-left: 350px;
      font-size: 30px;
      /*text-align: center;*/
      margin-top: 20px;
      margin-bottom: 20px;
    }
    label {
      font-family: 'Athiti', sans-serif;
      font-weight: 100px !important;
      margin: 0!important;
      padding: 0!important;

    }

    </style>
    <style type="text/css">
    html, body {
      height: 100%; /* ให้ html และ body สูงเต็มจอภาพไว้ก่อน */
      margin: 0;
      padding: 0;
    }
    .wrapper {
      display: block;
      min-height: 100%; /* real browsers */
      height: auto !important; /* real browsers */
      height: 100%; /* IE6 bug */
      margin-bottom: -130px; /* กำหนด margin-bottom ให้ติดลบเท่ากับความสูงของ footer */
    }
    .footer {
      height: 130px; /* ความสูงของ footer */
      display: block;
      text-align: center;
    }
    </style>
    <div class="wrapper">
      <div class="header">
        <div class="row">
          <div class="col-lg-12">
            <table >
              <tr>
                <td style="width:120px;">
                  <img src="../../../assets/images/logo1.png" alt="Logo alt" style="height:120px; width:120px;">
                </td>
                <td>
                  <div class="col-lg-3" style="width:350px;">
                    <label> สำนักงาน แพ็ค ทู โก เซอร์วิส </label>
                    <label>  ที่อยู่ 62/11 หมู่ 4 ซอยจอมทอง ถนนแจ้งวัฒนะ ตำบลคลองเกลือ
                      อำเภอปากเกร็ด จังหวัดนนทบุรี </label>
                      <label> เลขที่ผู้เสียภาษี 0125537006269
                      </label>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!-- <div class="container"> -->
        <div class="row">
          <div class="col-lg-8">
            <label id="head"> ใบรายการ Pick สินค้าเลขที่ Pick01 </label>
          </div>
        </div>
        <div class="row">
          <div class="display">
          <table style="margin-left:20px; margin-right:180px;line-height:0.5 !important;padding: 0 !important;"  class="table table-bordered" id="example" cellspacing="0" width="100%">
            <thead>
              <tr style="text-align:center;">
                <th id="name" style="text-align:center;"><label>เลขที่รายการส่งสินค้า</label></th>
                <th style="text-align:center;width:auto;"><label>ชื่อร้านค้า</label></th>
                <th style="text-align:center;width:auto;"><label>รหัสสินค้า</label></th>

                <th style="text-align:center;width:auto;"><label>ชื่อสินค้า</label></th>
                <th style="text-align:center;width:auto; "><label>รายละเอียดสินค้า</label></th>
                <th style="text-align:center;width:auto;"><label>จำนวน</label></th>
                <th style="text-align:center;width:auto;"><label>หน่วยนับ</label></th>
                <th style="text-align:center;width:auto;"><label>คลังสินค้า</label></th>
                <th style="text-align:center;width:auto;"><label>โลเคชั่น</label></th>
                <!-- <th style="text-align:center;width:auto;"><label></label></th> -->
                <th style="text-align:center;width:auto;" colspan="2"><label>หมายเหตุ</label></th>

              </tr>
            </thead>
            <tbody>
              <tr style="text-align:center; width:100%;height:20px; margin:0;">
                <td scope="row" style="text-align:center;"><label>OUT590727C0001002</label></th>
                <!-- <th scope="row" style="text-align:center;"><label>OUT590727C0001002</label></th> -->

                <td style="height:20px; width:40px; margin:0;"><label>บริษัท อเมร่า เอ็กซ์ตร้า จำกัด</label></td>
                <td style="height:20px;margin:0;">Product001</td>
                <td style="height:20px;margin:0;"><label>HALLS</label></td>
                <td style="height:20px;margin:0;"><label>ลูกอม รสมิ้นท์</label></td>
                <td style="height:20px;margin:0;"><label>2</label></td>
                <td style="height:20px;margin:0;"><label>แพ็ค</label></td>
                <td style="height:20px;margin:0;"><label>คลัง A</label></td>
                <td style="height:20px;margin:0;"><label>02-03-01</label></td>
                <td>
                  <input type="checkbox" name="" value="" > <label>
                  </td>
                  <td style="width:150px;"><label></label></td>

                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:center;"><label>OUT590727C0001002</label></th>
                  <!-- <th scope="row" style="text-align:center;"><label>OUT590727C0001001</label></th> -->

                  <td style=" width:240px;"><label>บริษัท อเมร่า เอ็กซ์ตร้า จำกัด</label></td>
                  <td><label>Product003</label></td>
                  <td><label>HALLS</label></td>
                  <td><label class="control-label ">ลูกอม รสน้ำผึ้งมะนาว </label></td>
                  <td><label>1</label></td>
                  <td><label>ถุง</label></td>
                  <td><label>คลัง A</label></td>
                  <td><label>02-03-02</label></td>
                  <td>
                    <input type="checkbox" name="" value="" > <label>
                    </td>
                    <td style="width:150px;"> <label></label></td>

                  </tr>
                  <tr style="text-align:center;">
                    <th scope="row" style="text-align:center;"><label>OUT590727C0001003</label></th>
                    <!-- <th scope="row" style="text-align:center;"><label>OUT590727C0001001</label></th> -->

                    <td style=" width:240px;"><label>บริษัท สุธาทิพย์ ฟาร์ม จำกัด</label></td>
                    <td><label>Product002</label></td>
                    <td><label>ข้าวไรซ์เบอร์รี่</label></td>
                    <td><label class="control-label ">ข้าวธัญพีช สีดำ</label></td>
                    <td><label>2</label></td>
                    <td style="width:auto;"><label class="control-label ">แพ็ค</label></td>
                    <td style="width:auto;"><label>คลัง A</label></td>
                    <td style="width:auto;"><label>01-03-04</label></td>
                    <td>
                      <input type="checkbox" name="" value="" > <label>
                      </td>
                      <td style="width:150px;"><label></label></td>

                    </tr>
                    <tr style="text-align:center;">
                      <td scope="row" style="text-align:center;"><label>OUT590727C0001003</label></td>
                      <!-- <th scope="row" style="text-align:center;"><label>OUT590727C0001001</label></th> -->

                      <td style=" width:240px;"><label>บริษัท สุธาทิพย์ ฟาร์ม จำกัด</label></td>
                      <td><label>Product002</label></td>
                      <td><label>ข้าวไรซ์เบอร์รี่</label></td>
                      <td><label class="control-label ">ข้าวธัญพีช สีดำ</label></td>
                      <td><label>2</label></td>
                      <td style="width:auto;"><label class="control-label ">แพ็ค</label></td>
                      <td style="width:auto;"><label>คลัง A</label></td>
                      <td style="width:auto;"><label>01-03-04</label></td>
                      <td>
                        <input type="checkbox" name="" value="" > <label>
                        </td>
                        <td style="width:150px;"><label></label></td>

                      </tr>
                      <tr style="text-align:center;">
                        <td scope="row" style="text-align:center;"><label>OUT590727C0001003</label></td>
                        <!-- <th scope="row" style="text-align:center;"><label>OUT590727C0001001</label></th> -->

                        <td style=" width:140px;"><label>บริษัท สุธาทิพย์ ฟาร์ม จำกัด</label></td>
                        <td><label>Product002</label></td>
                        <td><label>ข้าวไรซ์เบอร์รี่</label></td>
                        <td><label class="control-label ">ข้าวธัญพีช สีดำ</label></td>
                        <td><label>2</label></td>
                        <td style="width:auto;"><label class="control-label ">แพ็ค</label></td>
                        <td style="width:auto;"><label>คลัง A</label></td>
                        <td style="width:auto;"><label>01-03-04</label></td>
                        <td>
                          <input type="checkbox" name="" value="" > <label>
                          </td>
                          <td style="width:150px;"><label></label></td>

                        </tr>
                  </tbody>
                </table>
              </div>
              <!-- </div></div></div> -->
              <div class="footer">
                <div class="row">
                  <label style="margin-left:20px;">หมายเหตุ </label>
                  <label>______________________________________________________</label> <br>
                  <label>_____________________________________________________________</label><br>
                  <!-- <label>_____________________________________________________________</label> -->
                </div>
                <div class="row">
                  <div class="col-lg-12" style="margin-top:10px;">
                    <label  style="margin-left:20px;">ผู้ทำรายการ </label> <br>
                    <label  style="margin-left:20px;">___________</label> <br>
                    <label  style="margin-left:20px;" >วิภารรณ แก้วเล็ก</label><br>
                    <label style="margin-left:20px;" > ADMID</label><br>
                  </div>
                </div>
              </div>

            </page>
          </body>
          </html
