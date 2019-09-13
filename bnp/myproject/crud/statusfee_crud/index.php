<!DOCTYPE html>
<html lang="en">
<head>
  <title>แบบบันทึกข้อมูลค่ารักษาสถานภาพนักศึกษา</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="/home/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
  <script src="/home/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="/home/DataTables-1.10.18/css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <style> @import "my_style.css?Ver0002"; </style>
  <script src="check_data.js?Ver0006"></script>
  <script>
    $(document).ready(function(){
       $('#show_status_fee').DataTable({
        "lengthMenu": [[7, 25, 50, -1], [7, 25, 50, "All"]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
        },

         "scrollY":        "400px",
         "scrollCollapse": true,
         "paging":         true
       });
    });
  </script>
</head>
<body>
  <div class="container">
    <h2 align="center"> แบบบันทึกข้อมูลค่ารักษาสถานภาพนักศึกษาเทอม <span class="term">2/2561</span></h2> <br>

    <form class="form-inline" name="myForm" id="myForm" method="post" action="insert.php">
      <div class="form-group">
        <label for="thisterm" class="badge badge-info">เทอม : </label>
        <input type="text" class="form-control" id="thisterm" name="thisterm" value="2/2561" size="5" placeholder="" readonly>&nbsp;&nbsp;
      </div>
      <div class="form-group">
        <label for="ramid" class="badge badge-info">รหัสนักศึกษา : </label>
        <input type="text" class="form-control" id="ramid" name="ramid" placeholder="รหัสนักศึกษา 10 หลัก"  minlength="10" maxlength="10" required autofocus>&nbsp;&nbsp;
      </div>
      <div class="form-group">
        <label for="name" class="badge badge-info">ชื่อ - นามสกุล : </label>
        <input type="text" class="form-control" id="name" name="name" value="" placeholder="" size=""  readonly>&nbsp;&nbsp;
      </div>
      <div class="form-group">
        <label for="StatusFee" class="badge badge-info">ค่ารักษาสถานภาพ : </label>
        <input type="text" class="form-control" id="statusfee" name="statusfee" placeholder="ค่ารักษาฯ"   size="10" required ="ระบุค่ารักษา" autocomplete="off">&nbsp;&nbsp;&nbsp;
      </div>
      <div>
        <button type="submit" class="btn btn-primary" id="insert" >บันทึก</button>
    </div>
  </form><br>
    <table id="show_status_fee" class="display" cellspacing="0" width="100%" >
      <thead>
        <tr>
          <th width="5%">ลำดับ</th>
          <th width="10%">รุ่น</th>
          <th>รหัสนักศึกษา</th>
          <th>รหัส พ.ร.</th>
          <th>ชื่อ - นามสกุล</th>
          <th>ค่ารักษา</th>
          <th class="noprint">ลบ</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include 'select.php';
        $i=1;
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        	{
        ?>
        <tr>

          <td class="no"><?php echo $i++;?></td>
          <td class="gen"><?php echo $row['gen'];?></td>
          <td class="ramid"><?php echo $row['ram_id'];?></td>
          <td class="prid"><?php echo $row['pr_id'];?></td>
          <td class="fullname"><?php echo $row['title'].$row['name'].'  '.$row['surname'];?></td>
          <td class="keepfee"><?php echo $row['keep_fee'];?></td>

           <td width="5%" align="center" class="noprint"><a href="delete.php?del_id=<?php echo $row['ram_id'];?>" class=""  OnClick="return Conf(this)">
                 <i class="fa fa-minus-circle" style="font-size:24px;color:red"></i>
               </a>
           </td>

        </tr>
      <?php
        }
      ?>
        <tbody>
          <tfoot>
            <tr>
              <th ></th>
              <th ></th>
              <th ></th>
              <th ></th>
              <th colspan="3" class="" style="text-align:right;">รวมทั้งสิ้น <span class="counting"></span> คน</th>
            </tr>
          </tfoot>
    </table>
  </div>
</body>
</html>
