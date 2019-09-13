<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
<title>ใบรับฝากรวมส่งไปรษณีย์</title>
<link rel="icon" href="../../img/favicon.ico" type="image/x-icon">

<!-- jQuery library -->
<script src="../../js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="../../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="../../bootstrap-4.3.1/js/bootstrap.min.js"></script>

<!-- Custom fonts for this template -->
<script src="../../js/font-awesome-5-all.js"></script>

<script src="../../js/sweetalert.js"></script>

<script src="post.js?Ver0009"></script>
<script src="crud-post/crud.js?Ver0008"></script>
<link rel="stylesheet" href="mystyle.css?ver0013">
</head>

<body>
<div class="container">
  <div class="head-part">
    <h3 align="right">NO. <input class="no" type="text"></h3>
    <div class="day" style="text-align: right;"></div>
      <div class="row">
        <div class="col-md-4" style="text-align: right;">

        </div>
        <div class="col-md-4"style="text-align: center;">
          <h2>ใบรับฝากรวม</h2>
        </div>
        <div class="col-md-4"style="text-align: right;">
          <a href="../../myproject/crud/client_crud/insertform.php" target="_blank">
            <button type="button" class="btn btn-info noshow" name="fix">
              <i class="fa fa-user-plus" style="font-size:24px;color:white"></i> เพิ่มข้อมูล
            </button>
          </a>
        </div>
      </div>

    <h5> ศป./ศฝ./ปณ. ..........................................................
    <form>
      <label class="checkbox-inline">ได้รับฝาก ไปรษณียภัณฑ์ ประเภท
        <input type="checkbox" value="">ลงทะเบียน
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">พัสดุไปรษณีย์
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">EMS (ไปรษณีย์ด่วนพิเศษ)
      </label>
    </form>
    จาก สำนักงานวิชาการรัฐศาสตร์ ใบอนุญาตพิเศษเลขที่ .........................../......................... ดังนี้
    ...........................................................................................................................................................
  </h5>
  </div>

<form action="" method="post">
<table class="table-bordered ">
	<thead>
		<tr>
      <th>ลำดับ</th>
      <th class="noshow">รหัสนักศึกษา</th>
      <th>ชื่อผู้รับ</th>
      <th>รหัส พร. - รุ่น</th>
      <th>ปลายทาง</th>
      <th>เลขที่บาร์โค้ด</th>
      <th>น้ำหนัก</th>
      <th>ค่าบริการ</th>
      <th>หมายเหตุ</th>
		</tr>
	</thead>
	<tbody>
	<?php
		for($i=1;$i<=25;$i++)
		{
	?>
		<tr>
			<td width="5%"> <?php echo $i;?> </td>
			<td width="11%"  class="noshow"> <input type="text" id="ramid<?php echo $i;?>" name="ramid[]" class="ramid" placeholder="รหัสนักศึกษา" autofocus> </td>
			<td width="23%"> <input type="text" id="cusname<?php echo $i;?>" name="cusname[]" class="cusname"  > </td>
      <td width="14%"> <input type="text" id="cusid<?php echo $i;?>" name="cusid[]" class="cusid"></td>
			<td width="11%"> <input type="text" id="destination<?php echo $i;?>" name="destination[]" class="destination"> </td>
			<td width="16%"> <input type="text" id="trackcode<?php echo $i;?>" name="trackcode[]" class="trackcode" placeholder=""> </td>
			<td width=""><input type="hidden" class="senddate"> </td>
			<td width=""> </td>
			<td width=""> </td>
		</tr>
	<?php
		}
	?>
	</tbody>
  <tfoot>
    <th colspan="5" class="noboder">รวม __________ ฉบับ/ห่อ</th>
    <th>รวม</th>
    <td></td>
    <td></td>
  </tfoot>
</table>
</form><br>
<div class="foot-part">
  <p><strong> พนักงานรับฝาก ______________________________              <span class="noter" style="margin-right: 20px;">ตัวหนังสือ (_________________________________)</strong></span></p>
  <pre><br>  1. ใบรับนี้เป็นหลักฐานการฝากส่ง โปรดเก็บรักษาไว้จนแน่ใจว่าผู้รับได้รับสิ่งของแล้วหรือจนกว่าหมดอายุการขอสอบสวน
     คือ 6 เดือน สำหรับไปรษณียภัณฑ์ลงทะเบียน/พัสดุพัสดุไปรษณีย์ และ 4 เดือน สำหรับ EMS (ไปรษณีย์ด่วนพิเศษ)
  2. การขอสอบสวนและการสอบถามใด ๆ เกี่ยวกับสิ่งของที่ฝากส่งต้องนำใบรับนี้มาแสดงด้วยทุกครั้ง
  3. เลขที่เลขที่บาร์โค้ดต้องใส่หมวดอักษร และตัวเลขให้ครบ 9 หลัก หากใส่ไม่ครบไม่สามารถตรวจสอบได้
  </pre>

</div>

<div class="bottom">
  <div class="row">
    <div class="col-md-6" style="text-align: left;">
      <button type="button" class="btn btn-warning reset" name="reset" style="font-size:px;color:white">
        <i class="fas fa-sync-alt" style="font-size:24px;color:white"></i> รีเซ็ต
      </button>
    </div>
    <div class="col-md-6"style="text-align: right;">
      <button type="button" class="btn btn-success print" name="print">
        <i class="fa fa-print" style="font-size:24px;color:white"></i> พิมพ์
      </button>
    </div>
  </div>
</div>




</div>
<body>

</html>
