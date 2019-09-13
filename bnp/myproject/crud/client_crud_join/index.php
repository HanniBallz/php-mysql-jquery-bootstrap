<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> ข้อมูลนักศึกษา </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jQuery library -->
  <script src="/home/jQuery/jquery-3.3.1.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest jQuery -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/Javascript">
    function Conf(object) {
                if (confirm("โปรดยืนยันการลบ ?") == true) {
                  return true;
                  }
                  return false;
                  }
  </script>
  <style>
  @media print {
    .noprint {display: none;}
  }
    .disabled {
    pointer-events: none;
    cursor: default;
    }

  </style>
</head>
<body>
<div class="container">
  <h2 align="center">ข้อมูลนักศึกษา</h2>

    <div class="row">
      <div class="col-sm-4">
        <a href="insertform.php" target="_self">
          <button class="btn btn-info"> เพิ่มข้อมูล
            <i class="fa fa-user-plus" style="font-size:24px;color:white"></i>
          </button>
        </a>
      </div>
      <div class="col-sm-5">

      </div>
      <div class="col-sm-3">
        <form class="input-group" id ="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <input class="form-control" name="search" type="text" value="<?php echo @$_POST['search']?>" placeholder="ค้นหา">
         <div class="input-group-btn">
           <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
         </div>
        </form>
      </div>
    </div>

  <table class="table table-hover">
    <thead>
      <tr class="active">
      <th>ลำดับ</th>
      <th>รุ่นที่</th>
      <th>รหัสนักศึกษา</th>
      <th>รหัส พ.ร.</th>
      <th>ชื่อ - นามสกุล</th>
      <th>รหัส e-service</th>
      <th>รหัสบัตร ปปช.</th>
      <th>วัน/เดือน/ปีเกิด</th>
      <th class="noprint">แก้ไข</th>
      <!-- <th class="noprint">ลบ</th> -->
    </tr>
    </thead>
    <tbody>
      <?php
      include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";

$sql="SELECT client_data.ram_id,client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen,
             stupass.p_id,stupass.e_pass,stupass.birth_date,stupass.birth_month,stupass.birth_year

      FROM client_data
      LEFT JOIN stupass
      ON client_data.ram_id = stupass.ram_id
      WHERE client_data.ram_id LIKE :s1
      OR client_data.pr_id LIKE :s2
      OR client_data.name LIKE :s3
      OR client_data.surname LIKE :s4
      OR stupass.ram_id LIKE :s5
      ORDER BY client_data.current DESC LIMIT 10";

     $i=1;
     $stm=$conn->prepare($sql);
      $search11='%'.@$_POST['search'].'%';
      $search22='%'.@$_POST['search'].'%';
      $search33='%'.@$_POST['search'].'%';
      $search44='%'.@$_POST['search'].'%';
      $search55='%'.@$_POST['search'].'%';
      $search1 = preg_replace('/\s+/', '', $search11);
      $search2 = preg_replace('/\s+/', '', $search22);
      $search3 = preg_replace('/\s+/', '', $search33);
      $search4 = preg_replace('/\s+/', '', $search44);
      $search5 = preg_replace('/\s+/', '', $search55);
     $stm->bindParam(':s1',$search1);
     $stm->bindParam(':s2',$search2);
     $stm->bindParam(':s3',$search3);
     $stm->bindParam(':s4',$search4);
     $stm->bindParam(':s5',$search5);

     try{
     	$stm->execute();
     }catch (PDOException $e){
     	echo $e->getMessage().'<br>';
     }

     while($row=$stm->fetch(PDO::FETCH_ASSOC))
     	{
     ?>
     <tr>
       <td><?php echo $i++;?></td>
       <td><?php echo $row['gen'];?></td>
       <td><?php echo $row['ram_id'];?></td>
       <td><?php echo $row['pr_id'];?></td>
       <td><?php echo $row['title'].$row['name'].'  '.$row['surname'];?></td>
       <td><?php echo $row['e_pass']?></td>
       <td><?php echo $row['p_id']?></td>
       <td><?php echo $row['birth_date'].'  '.$row['birth_month'].'  '.$row['birth_year']?></td>
       <td class="noprint"><a href="updateform.php?id=<?php echo $row['id'];?>">
          <i class="fa fa-pencil-square-o" style="font-size:24px;color:green"></i>
          </a>
        </td>
        <!-- <td class="noprint"><a href="delete.php?del_id=<?php echo $row['ram_id'];?>" class="disabled"  OnClick="return Conf(this)">
              <i class="fa fa-minus-circle" style="font-size:24px;color:red"></i>
            </a>
        </td> -->
     <?php
     }
     ?>
    </tbody>
    <tfoot>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td colspan="2"><b><i>แสดงรายชื่อนักศึกษา 10 คนที่บันทึกล่าสุด </i></b> </td>

        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
    </tfoot>
  </table>
</div>
</body>
</html>
