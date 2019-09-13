<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>ฟอร์มควบคุมการลงทะเบียนเทอมซ่อม </title>
<link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">

<!-- jQuery library -->
<script src="../../../js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="../../../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="../../../bootstrap-4.3.1/js/bootstrap.min.js"></script>

<!-- Custom fonts for this template -->
<script src="../../../js/font-awesome-5-all.js"></script>

<script src="../../../js/sweetalert.js"></script>

<link rel="stylesheet" type="text/css" href="mystyle.css?Ver0012">
<script src="../../../function/replacetext.js?Ver=0000"></script>
<script src="../../../function/add_color.js?Ver0003"></script>
<script src="function.js?Ver=0005"></script>
<script src="callfunction.js?Ver=0005"></script>

</head>

<body>
<div class="container">

<h3 align="right">NO. <input class="no" type="text"></h3>
<h2 align="center"><i class="fas fa-anchor" id="noprints" style="font-size:24px;color:#ff9900"></i>
  ใบควบคุมการลงทะเบียนเทอม<span class="thisterm">ซ่อม </span> <i class="fas fa-anchor" style="font-size:24px;color:#ff9900" id="noprintss"></i>
</h2>

<div class="row">
  <div class="col-md-4">
    <div class="form-inline">
        <br><br><br><br>
        <select class="form-control" id="regis_date">
          <option value="no">สำหรับลงวันที่</option>
          <option value="14 ธ.ค. 61">14 ธันวาคม 61</option>
          <option value="15 ธ.ค. 61">15 ธันวาคม 61</option>
          <option value="16 ธ.ค. 61">16 ธันวาคม 61</option>
          <!-- <option value="7 ก.ค. 61">7 กรกฎาคม 61</option> -->
        </select>
      </div>
  </div>
  <div class="col-md-4 text-center" >
  	<a href="../storage-data/index.html" target="_blank">
      <button class="btn btn-success" id="stop"> บันทึกรหัสและวันลงทะเบียน
        <i class="fa fa-save" style="font-size:24px;color:white"></i>
      </button>
    </a>
  </div>
  <div class="col-md-4  text-right">
    <p class="number">ผู้ลงใบคุม <input class="check" type="text" value=""></p> <br>
    <p class="number">ผู้ตรวจใบเสร็จ <input class="check" type="text"></p>
  </div>

</div>

<form action="">
	<table class="table table-sm table-hover" >
		<thead>
			<tr class="active" id="borderer">
				<th >ลำดับ </th>
				<th >รหัสนักศึกษา </th>
				<th >รหัส พ.ร.</th>
        <th >รุ่น </th>
				<th >ชื่อ - นามสกุล </th>
				<th >หน่วยกิต </th>
				<th >วันลงทะเบียน </th>
        <th >ค่าปรับ </th>
				<th > </th>
				<th >ราคา </th>
			</tr>
		</thead>
		<tbody>
		<?php
			for($i=1;$i<=15;$i++)
			{
		?>
			<tr>
				<td width="5%" class="number" align="center" class="borderd" ><?php echo $i;?>  </td>
				<td width="14%" class="borderd"> <input type="text" id="ramid<?php echo $i;?>" name="ramid<?php echo $i;?>" class="ramid" maxlength="10" autofocus> </td>
				<td width="9%" class="borderd"> <input type="text" id="cusid<?php echo $i;?>" name="cusid<?php echo $i;?>" class="cusid"> </td>
        <td width="7%" class="borderd"> <input type="text" id="gen<?php echo $i;?>" name="gen<?php echo $i;?>" class="gen"> </td>
				<td width="22%" class="borderd"> <input type="text" id="cusname<?php echo $i;?>" name="cusname<?php echo $i;?>" class="cusname"> </td>
				<td width="" class="borderd"> <input type="text" id="credit<?php echo $i;?>" name="credit<?php echo $i;?>" class="credit" maxlength="2"> </td>
				<td width="13%" class="borderd"> <input type="" id="regisdate<?php echo $i;?>" name="regisdate<?php echo $i;?>" class="regisdate"></td>
        <td width="" class="borderd"> <input type="number" min="0" id="datefee<?php echo $i;?>" name="datefee<?php echo $i;?>" class="datefee"> </td>
				<td width="" class="borderd"> <input type="number" min="0" id="keepcost<?php echo $i;?>" name="keepcost<?php echo $i;?>" class="keepcost" disabled> </td>
				<td width="7%" class="borderd"> <input type="" id="total<?php echo $i;?>" name="" class="total" readonly> </td>
        <input type="hidden" name="thisterm" class="thisterm">
			</tr>
		<?php
			}
		?>
		</tbody>
		<tfoot>
			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
        <td> </td>
				<td colspan="3"> <p style="font-size: 20px"><strong>ราคารวมทั้งหมด </strong></p> </td>
				<td colspan="2" class="borderden"> <input type="" id="grandtotal" name="grandtotal" class="grandtotal" readonly> </td>
			</tr>
		</tfoot>
	</table>

<div class="row">
  <div align="" class="col-sm-3 col-md-6" > <button type="reset" class="btn btn-danger" id="unprint">
    <i class="fas fa-sync-alt"></i> รีเซ็ต </button>
  </div>
</form>
	<div align="" class="col-sm-3 col-md-6" > <button type="button" class="btn btn-info print" id="noprint" onclick="">
    <i class="fa fa-print" style="font-size:px"></i> พิมพ์ </button>
  </div>
</div>

</div>
</body>
<footer>
<div class="container">
  <br><br><br>
  <p class="number"><strong>ผู้ลงทะเบียน</strong> <input class="checked" type="text"></p>
</div>
</footer>
</html>
