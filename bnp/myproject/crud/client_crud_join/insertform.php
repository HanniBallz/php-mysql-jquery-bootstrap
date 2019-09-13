<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> แบบบันทึกข้อมูลนักศึกษา </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script src="myjquery.js"></script>
<script src="check_data.js?Ver0009"></script>
</head>
<body>
<div class="container">
  <h2> แบบบันทึกข้อมูลนักศึกษา </h2>
    <div align="right">
      <a href="index.php">
        <p style="font-size:24px">ดูข้อมูล <i class="fa fa-user-circle"></i></p>
      </a>
    </div>
  <form action="insert.php" method="post">
    <table class="table-striped table-hover" >
      <tr>
        <td align="center">
          <label for="ramid"><span class="label label-danger">รหัสนักศึกษา :</span></label>
          <input type="number" min="4000000000" max="7000000000" class="form-control" name="ramid" id="ramid" placeholder="รหัสนักศึกษา 10 หลัก" required="required" autofocus>
        </td>

        <td width="5px">
        </td>
        <td width="px" >
          <label for="gen"><span class="label label-success">รุ่นที่</span> </label>
          <select name="gen" id="gen" class="form-control" required="required" >
          <option value="">--------- เลือกรุ่น ---------</option>
          <option value="8000">8000</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="28 ป.ตรี">28 ป.ตรี</option>
          <option value="28 ปวส.">28 ปวส.</option>
          <option value="29">29</option>
          <option value="29 ป.ตรี">29 ป.ตรี</option>
          <option value="29 ปวส.">29 ปวส.</option>
          <option value="30">30</option>
          <option value="30 ป.ตรี">30 ป.ตรี</option>
          <option value="30 ปวส.">30 ปวส.</option>
          <option value="31">31</option>
          <option value="31 ป.ตรี">31 ป.ตรี</option>
          <option value="31 ปวส.">31 ปวส.</option>
          <option value="32">32</option>
          <option value="32 ป.ตรี">32 ป.ตรี</option>
          <option value="32 ปวส.">32 ปวส.</option>
          <option value="33">33</option>
          <option value="33 ป.ตรี">33 ป.ตรี</option>
          <option value="33 ปวส.">33 ปวส.</option>
          <option value="34">34</option>
          <option value="34 ป.ตรี">34 ป.ตรี</option>
          <option value="34 ปวส.">34 ปวส.</option>
          <option value="35">35</option>
          <option value="35 ป.ตรี">35 ป.ตรี</option>
          <option value="35 ปวส.">35 ปวส.</option>
          </select>
        </td>
        <td width="10px">
        </td>
        <td>
          <label for="prid"><span class="label label-success">รหัสเพื่อนเรียน :</span></label>
          <input type="text" class="form-control" name="prid" id="prid" placeholder="รหัสเพื่อนเรียน" required>
        </td>
      </tr>
      <tr>
        <td width="px" align="center">
            <label for="title"><span class="label label-primary">คำนำหน้า</span> </label>
            <select name="title" id="title" class="form-control" required>
            <option value="">------ เลือกคำนำหน้า ------</option>
            <option value="คุณ">คุณ</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="น.ส.">นางสาว</option>
            <option value="พล.ต.อ.">พลตำรวจเอก</option>
            <option value="พล.ต.อ. หญิง">พลตำรวจเอก หญิง</option>
            <option value="พล.ต.ท">พลตำรวจโท</option>
            <option value="พล.ต.ท หญิง">พลตำรวจโท หญิง</option>
            <option value="พล.ต.ต">พลตำรวจตรี</option>
            <option value="พล.ต.ต หญิง">พลตำรวจตรี หญิง</option>
            <option value="พ.ต.อ.">พันตำรวจเอก</option>
            <option value="พ.ต.อ. หญิง">พันตำรวจเอก หญิง</option>
            <option value="พ.ต.อ.(พิเศษ)">พันตำรวจเอกพิเศษ</option>
            <option value="พ.ต.อ.(พิเศษ) หญิง">พันตำรวจเอกพิเศษ หญิง</option>
            <option value="พ.ต.ท.">พันตำรวจโท</option>
            <option value="พ.ต.ท. หญิง">พันตำรวจโท หญิง</option>
            <option value="พ.ต.ต.">พันตำรวจตรี</option>
            <option value="พ.ต.ต. หญิง">พันตำรวจตรี หญิง</option>
            <option value="ร.ต.อ.">ร้อยตำรวจเอก</option>
            <option value="ร.ต.อ. หญิง">ร้อยตำรวจเอก หญิง</option>
            <option value="ร.ต.ท.">ร้อยตำรวจโท</option>
            <option value="ร.ต.ท. หญิง">ร้อยตำรวจโท หญิง</option>
            <option value="ร.ต.ต.">ร้อยตำรวจตรี</option>
            <option value="ร.ต.ต. หญิง">ร้อยตำรวจตรี หญิง</option>
            <option value="ด.ต.">นายดาบตำรวจ</option>
            <option value="ด.ต. หญิง">ดาบตำรวจหญิง</option>
            <option value="ส.ต.อ.">สิบตำรวจเอก</option>
            <option value="ส.ต.อ. หญิง">สิบตำรวจเอก หญิง</option>
            <option value="ส.ต.ท.">สิบตำรวจโท</option>
            <option value="ส.ต.ท. หญิง">สิบตำรวจโท หญิง</option>
            <option value="ส.ต.ต.">สิบตำรวจตรี</option>
            <option value="ส.ต.ต. หญิง">สิบตำรวจตรี หญิง</option>
            <option value="จ.ส.ต.">จ่าสิบตำรวจ</option>
            <option value="จ.ส.ต. หญิง">จ่าสิบตำรวจ หญิง</option>
            <option value="พลฯ">พลตำรวจ</option>
            <option value="พลฯ หญิง">พลตำรวจ หญิง</option>
            <option value="พล.อ.">พลเอก</option>
            <option value="พล.อ. หญิง">พลเอก หญิง</option>
            <option value="พล.ท.">พลโท</option>
            <option value="พล.ท. หญิง">พลโท หญิง</option>
            <option value="พล.ต.">พลตรี</option>
            <option value="พล.ต.หญิง">พลตรี หญิง</option>
            <option value="พ.อ.">พันเอก</option>
            <option value="พ.อ.หญิง">พันเอก หญิง</option>
            <option value="พ.อ.(พิเศษ)">พันเอกพิเศษ</option>
            <option value="พ.อ.(พิเศษ) หญิง">พันเอกพิเศษ หญิง</option>
            <option value="พ.ท.">พันโท</option>
            <option value="พ.ท.หญิง">พันโท หญิง</option>
            <option value="พ.ต.">พันตรี</option>
            <option value="พ.ต.หญิง">พันตรี หญิง</option>
            <option value="ร.อ.">ร้อยเอก</option>
            <option value="ร.อ.หญิง">ร้อยเอก หญิง</option>
            <option value="ร.ท.">ร้อยโท</option>
            <option value="ร.ท.หญิง">ร้อยโท หญิง</option>
            <option value="ร.ต.">ร้อยตรี</option>
            <option value="ร.ต.หญิง">ร้อยตรี หญิง</option>
            <option value="ส.อ.">สิบเอก</option>
            <option value="ส.อ.หญิง">สิบเอก หญิง</option>
            <option value="ส.ท.">สิบโท</option>
            <option value="ส.ท.หญิง">สิบโท หญิง</option>
            <option value="ส.ต.">สิบตรี</option>
            <option value="ส.ต.หญิง">สิบตรี หญิง</option>
            <option value="จ.ส.อ.">จ่าสิบเอก</option>
            <option value="จ.ส.อ.หญิง">จ่าสิบเอก หญิง</option>
            <option value="จ.ส.ท.">จ่าสิบโท</option>
            <option value="จ.ส.ท.หญิง">จ่าสิบโท หญิง</option>
            <option value="จ.ส.ต.">จ่าสิบตรี</option>
            <option value="จ.ส.ต.หญิง">จ่าสิบตรี หญิง</option>
            <option value="พลฯ">พลทหารบก</option>
            <option value="ว่าที่ พ.ต.">ว่าที่ พ.ต.</option>
            <option value="ว่าที่ พ.ต. หญิง">ว่าที่ พ.ต. หญิง</option>
            <option value="ว่าที่ ร.อ.">ว่าที่ ร.อ.</option>
            <option value="ว่าที่ ร.อ. หญิง">ว่าที่ ร.อ. หญิง</option>
            <option value="ว่าที่ ร.ท.">ว่าที่ ร.ท.</option>
            <option value="ว่าที่ ร.ท. หญิง">ว่าที่ ร.ท. หญิง</option>
            <option value="ว่าที่ ร.ต.">ว่าที่ ร.ต.</option>
            <option value="ว่าที่ ร.ต. หญิง">ว่าที่ ร.ต. หญิง</option>
            <option value="พล.ร.อ.">พลเรือเอก</option>
            <option value="พล.ร.อ.หญิง">พลเรือเอก หญิง</option>
            <option value="พล.ร.ท.">พลเรือโท</option>
            <option value="พล.ร.ท.หญิง">พลเรือโท หญิง</option>
            <option value="พล.ร.ต.">พลเรือตรี</option>
            <option value="พล.ร.ต.หญิง">พลเรือตรี หญิง</option>
            <option value="น.อ.">นาวาเอก</option>
            <option value="น.อ.หญิง">นาวาเอก หญิง</option>
            <option value="น.อ.(พิเศษ)">นาวาเอกพิเศษ</option>
            <option value="น.อ.(พิเศษ) หญิง">นาวาเอกพิเศษ หญิง</option>
            <option value="น.ท.">นาวาโท</option>
            <option value="น.ท.หญิง">นาวาโท หญิง</option>
            <option value="น.ต.">นาวาตรี</option>
            <option value="น.ต.หญิง">นาวาตรี หญิง</option>
            <option value="ร.อ.">เรือเอก</option>
            <option value="ร.อ.หญิง">เรือเอก หญิง</option>
            <option value="ร.ท.">เรือโท</option>
            <option value="ร.ท.หญิง">เรือโท หญิง</option>
            <option value="ร.ต.">เรือตรี</option>
            <option value="ร.ต.หญิง">เรือตรี หญิง</option>
            <option value="พ.จ.อ.">พันจ่าเอก</option>
            <option value="พ.จ.อ.หญิง">พันจ่าเอก หญิง</option>
            <option value="พ.จ.ท.">พันจ่าโท</option>
            <option value="พ.จ.ท.หญิง">พันจ่าโท หญิง</option>
            <option value="พ.จ.ต.">พันจ่าตรี</option>
            <option value="พ.จ.ต.หญิง">พันจ่าตรี หญิง</option>
            <option value="จ.อ.">จ่าเอก</option>
            <option value="จ.อ.หญิง">จ่าเอก หญิง</option>
            <option value="จ.ท.">จ่าโท</option>
            <option value="จ.ท.หญิง">จ่าโท หญิง</option>
            <option value="จ.ต.">จ่าตรี</option>
            <option value="จ.ต.หญิง">จ่าตรี หญิง</option>
            <option value="พลฯ">พลทหารเรือ</option>
            <option value="พล.อ.อ.">พลอากาศเอก</option>
            <option value="พล.อ.อ.หญิง">พลอากาศเอก หญิง</option>
            <option value="พล.อ.ท.">พลอากาศโท</option>
            <option value="พล.อ.ท.หญิง">พลอากาศโท หญิง</option>
            <option value="พล.อ.ต.">พลอากาศตรี</option>
            <option value="พล.อ.ต.หญิง">พลอากาศตรี หญิง</option>
            <option value="น.อ.">นาวาอากาศเอก</option>
            <option value="น.อ.หญิง">นาวาอากาศเอก หญิง</option>
            <option value="น.อ.(พิเศษ)">นาวาอากาศเอกพิเศษ</option>
            <option value="น.อ.(พิเศษ) หญิง">นาวาอากาศเอกพิเศษ หญิง</option>
            <option value="น.ท.">นาวาอากาศโท</option>
            <option value="น.ท.หญิง">นาวาอากาศโท หญิง</option>
            <option value="น.ต.">นาวาอากาศตรี</option>
            <option value="น.ต.หญิง">นาวาอากาศตรี หญิง</option>
            <option value="ร.อ.">เรืออากาศเอก</option>
            <option value="ร.อ.หญิง">เรืออากาศเอก หญิง</option>
            <option value="ร.ท.">เรืออากาศโท</option>
            <option value="ร.ท.หญิง">เรืออากาศโท หญิง</option>
            <option value="ร.ต.">เรืออากาศตรี</option>
            <option value="ร.ต.หญิง">เรืออากาศตรี หญิง</option>
            <option value="พ.อ.อ.">พันจ่าอากาศเอก</option>
            <option value="พ.อ.อ.หญิง">พันจ่าอากาศเอก หญิง</option>
            <option value="พ.อ.ท.">พันจ่าอากาศโท</option>
            <option value="พ.อ.ท.หญิง">พันจ่าอากาศโท หญิง</option>
            <option value="พ.อ.ต.">พันจ่าอากาศตรี</option>
            <option value="พ.อ.ต.หญิง">พันจ่าอากาศตรี หญิง</option>
            <option value="จ.อ.">จ่าอากาศเอก</option>
            <option value="จ.อ.หญิง">จ่าอากาศเอก หญิง</option>
            <option value="จ.ท.">จ่าอากาศโท</option>
            <option value="จ.ท.หญิง">จ่าอากาศโท หญิง</option>
            <option value="จ.ต.">จ่าอากาศตรี</option>
            <option value="จ.ต.หญิง">จ่าอากาศตรี หญิง</option>
            <option value="พลฯ">พลทหารอากาศ</option>
            <option value="หม่อม">หม่อม</option>
            <option value="ม.จ.">หม่อมเจ้า</option>
            <option value="ม.ร.ว.">หม่อมราชวงศ์</option>
            <option value="ม.ล.">หม่อมหลวง</option>
            <option value="ดร.">ดร.</option>
            <option value="ศ.ดร.">ศ.ดร.</option>
            <option value="ศ.">ศ.</option>
            <option value="ผศ.ดร.">ผศ.ดร.</option>
            <option value="ผศ.">ผศ.</option>
            <option value="รศ.ดร.">รศ.ดร.</option>
            <option value="รศ.">รศ.</option>
            <option value="นพ.">นพ.</option>
            <option value="พญ.">แพทย์หญิง</option>
            <option value="นสพ.">สัตวแพทย์</option>
            <option value="สพญ.">สพญ.</option>
            <option value="ทพ.">ทพ.</option>
            <option value="ทพญ.">ทพญ.</option>
            <option value="ภก.">เภสัชกร</option>
            <option value="ภกญ.">ภกญ.</option>
            <option value="พระ">พระ</option>
            <option value="พระครู">พระครู</option>
            <option value="พระมหา">พระมหา</option>
            <option value="พระสมุห์">พระสมุห์</option>
            <option value="พระอธิการ">พระอธิการ</option>
            <option value="สามเณร">สามเณร</option>
            <option value="แม่ชี">แม่ชี</option>
            <option value="บาทหลวง">บาทหลวง</option>
            <option value="Mr.">MR</option>
            <option value="Mrs. ">MRS</option>
            <option value="Ms. ">MS</option>
            <option value="Miss">MISS</option>
            <option value="Dr.">Dr.</option>
            </select>
        </td>
        <td width="px">
        </td>
        <td>
          <label for="name"><span class="label label-primary">ชื่อ :</span></label>
          <input class="form-control" name="name" id="name" placeholder="ชื่อ" required>
        </td>
        <td width="px">
        </td>
        <td>
          <label for="surname"><span class="label label-primary">นามสกุล :</span></label>
          <input class="form-control" name="surname" id="surname" placeholder="นามสกุล" required>
        </td>
      </tr>
      <tr>
        <td colspan="" align="center">
          <label for="epass"><span class="label label-default">รหัส eservice :</span></label>
          <input class="form-control" name="epass" id="epass" placeholder="ใส่หรือไม่ก็ได้">
        </td>
        <td width="px">
        </td>
        <td>
          <label for="pid"><span class="label label-default">รหัสบัตรประจำตัวประชาชน :</span></label>
          <input class="form-control" name="pid" id="pid" placeholder="รหัสบัตรประจำตัวประชาชน">
        </td>
        <td>
        </td>
        <td colspan="">
            <label for="birth_date"><span class="label label-default">วัน เดือน ปีเกิด</span> </label>
          <div class="form-inline">

          <select name="birthdate" id="birthdate" class="form-control" required>
            <option value="">วันที่</option>
            <?php
        			for($n=1;$n<=31;$n++)
        			{
        		?>
            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
            <?php
              }
             ?>
          </select>
        </select>

          <select name="birthmonth" id="birthmonth" class="form-control" required>
          <option value="">เดือน</option>
          <option value="ม.ค.">มกราคม</option>
          <option value="ก.พ.">กุมภาพันธ์</option>
          <option value="มี.ค.">มีนาคม</option>
          <option value="เม.ย.">เมษายน</option>
          <option value="พ.ค.">พฤษภาคม</option>
          <option value="มิ.ย.">มิถุนายน</option>
          <option value="ก.ค.">กรกฎาคม</option>
          <option value="ส.ค.">สิงหาคม</option>
          <option value="ก.ย.">กันยายน</option>
          <option value="ต.ค.">ตุลาคม</option>
          <option value="พ.ย.">พฤศจิกายน</option>
          <option value="ธ.ค.">ธันวาคม</option>
        </select>

          <select name="birthyear" id="birthyear" class="form-control" required>
          <option value="">ปี</option>
          <?php
            for($n=2561;$n>=2460;$n--)
            {
          ?>
          <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
          <?php
            }
           ?>
        </select>
      </div>
        </td>
      </tr>
      <tr>
        <td colspan="" align="center">
          <label for="surname"><span class="label label-warning">รหัสไปรษณีย์ :</span></label>
          <input type="number" min="10000" max="99999" class="form-control" name="postcode" id="postcode" placeholder="ใส่หรือไม่ก็ได้">
        </td>
      </tr>
      <tfoot>
        <tr>
          <td colspan="5" align="right">
            <br>
          <button type="submit" class="btn btn-info" id="save">
            <span class="glyphicon glyphicon-floppy-save"></span> บันทึก
          </button>
          </td>
        </tr>
      </tfoot>
    </table>
  </form>

</div>
</body>
</html>
