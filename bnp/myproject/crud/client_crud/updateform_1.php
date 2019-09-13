<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> แก้ไขข้อมูลนักศึกษา </title>
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">

  <!-- jQuery library -->
  <script src="../../../js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="../../../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="../../../bootstrap-4.3.1/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <script src="../../../js/font-awesome-5-all.js"></script>

  <script src="../../../js/sweetalert.js"></script>

<!-- <script src="check_data.js?Ver0013"></script> -->
<style>
  input[type=""]
  {
  font-size:px;
  }
</style>

</head>
<body>
  <?php
  include('../../../connect/connect.php');
  //เรียกข้อมูลจาก รหัส มาแสดงใน textbox
  if(@$_REQUEST['id'] != "")
  {
    $id = $_REQUEST['id'];

    $sql_show = "select * from client_data where id = '$id'";
    $stm=$conn->prepare($sql_show);
    $stm->execute();
    $row_show=$stm->fetch(PDO::FETCH_ASSOC);
  }
?>

<div class="container">
  <h2> แก้ไขข้อมูลนักศึกษา </h2>
    <div align="right">
      <a href="index.php">
        ดูข้อมูล <i class="fa fa-user-circle"></i>
      </a>
    </div>

  <form class=""  action="update.php" method="post">
    <section class="form-inline first">
      <label class="sr-only" for="inlineFormInputName2">รหัสนักศึกษา</label>
      <input type="text" maxlength="10" pattern=".{10,}" required title="โปรดกรอกให้ครบ 10 หลัก" class="form-control mb-2 mr-sm-2" name="ramid" id="ramid" value="<?php echo $row_show['ram_id']?>" placeholder="รหัสนักศึกษา 10 หลัก" required="required" autofocus>
      <label class="sr-only" for="inlineFormInputName2">รหัส พ.ร.</label>
      <input type="text" value="<?php echo $row_show['pr_id']?>" class="form-control mb-2 mr-sm-2" name="prid" id="prid" placeholder="รหัส พ.ร." required>

      <div class="input-group mb-2 mr-sm-2">
         <div class="input-group-prepend">
           <div class="input-group-text">รุ่น </div>
         </div>
      <select name="gen" id="gen" class="custom-select" required="required" >
      <option value="<?php echo $row_show['gen']?>"><?php echo $row_show['gen']?></option>
      <option value="8000">8000</option>
      <?php
        for($n=20;$n<=50;$n++)
        {
      ?>
      <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
      <option value="<?php echo $n." "."ปวส."; ?>"><?php echo $n." "."ปวส."; ?></option>
      <option value="<?php echo $n." "."ป.ตรี"; ?>"><?php echo $n." "."ป.ตรี"; ?></option>
      <?php
        }
       ?>
      </select>
    </div>
    </section>
    <section class="second">

    </section>
    <section class="form-inline third">
      <div class="input-group mb-2 mr-sm-2">
         <div class="input-group-prepend">
           <div class="input-group-text">*</div>
         </div>
         <select name="title" id="title" class="custom-select" required>
           <option value="<?php echo $row_show['title']?>"><?php echo $row_show['title']?></option>
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
    </div>

      <label class="sr-only" for="inlineFormInputName2">ชื่อ</label>
      <input type="text" value="<?php echo $row_show['name']?>" class="form-control mb-2 mr-sm-2" name="name" id="name" placeholder="ชื่อ" required>

      <label class="sr-only" for="inlineFormInputName2">นามสกุล</label>
      <input type="text" value="<?php echo $row_show['surname']?>" class="form-control mb-2 mr-sm-2" name="surname" id="surname" placeholder="นามสกุล" required>


    </section>

    <section class="form-inline third">
      <label class="sr-only" for="inlineFormInputName2">รหัสไปรษณีย์</label>
      <input type="number" value="<?php echo $row_show['postcode']?>" min="10000" max="99999" class="form-control mb-3 mr-sm-3" name="postcode" id="postcode" placeholder="รหัส ป.ณ.">

    </section>

    <section class="fouth">
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              </div>
              <input type="hidden" name="id" value=<?php echo @$_GET["id"];?>>
              <button type="submit" class="btn btn-info" id="update" name="update">
                <i class="fas fa-save"></i> บันทึก
              </button>
            </div>
    </section>
  </form>

</div>
</body>
</html>
