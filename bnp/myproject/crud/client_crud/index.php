<?php
/*
	session_start();
	if(@$_SESSION['username'] == "")
	{
		include $_SERVER['DOCUMENT_ROOT']."/login/header.php";
		echo '<script>
			setTimeout(function () {
				swal({
					title: "กรุณาเข้าสู่ระบบ",
					text: "",
					type: "warning",
					confirmButtonText: "กลับหน้า LOGIN"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = "/login/index.php";
					}
				}); }, 500);
				</script>';
		exit();
	}
	if($_SESSION['status'] == "user")
	{
		include $_SERVER['DOCUMENT_ROOT']."/login/header.php";
		echo '<script>
			setTimeout(function () {
				swal({
					title: "เฉพาะผู้ได้รับอนุญาตเท่านั้น",
					text: "",
					type: "warning",
					confirmButtonText: "กลับหน้า LOGIN"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = "/login/index.php";
					}
				}); }, 500);
				</script>';
		exit();
	}
	*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> ข้อมูลนักศึกษา </title>
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">

  <!-- jQuery library -->
  <script src="../../../js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="../../../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="../../../bootstrap-4.3.1/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <!-- <link href="../../../css/all.css" rel="stylesheet"> -->
  <script src="../../../js/font-awesome-5-all.js"></script>

  <script src="../../../js/sweetalert.js"></script>

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
    @font-face {
      font-family: PrintAble4U;
      src: url('../../../font/PrintAble4U.ttf')format('truetype');
    }
    body{
      font-family: 'PrintAble4U';
      font-size: 1.5rem;
      /* line-height: 1.5rem;
      letter-spacing: 0.8rem; */
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
           <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
         </div>
        </form>
      </div>
    </div>

  <table class="table table-hover">
    <thead>
      <tr class="active">
      <th>ลำดับ</th>
      <th>รุ่นที่</th>
      <th>รหัส น.ศ.</th>
      <th>รหัส พ.ร.</th>
      <th>ชื่อ - นามสกุล</th>
      <!-- <th width="10%">เบอร์โทรศัพท์</th> -->
      <!-- <th>เลขบัตร ปปช.</th>
      <th>วัน/เดือน/ปีเกิด</th> -->
      <th class="noprint">แก้ไข</th>
      <!-- <th class="noprint">ลบ</th> -->
    </tr>
    </thead>
    <tbody>
      <?php
      include('../../../connect/connect.php');

     $sql="SELECT * FROM client_data
      WHERE ram_id LIKE :s1
      OR pr_id LIKE :s2
      OR name LIKE :s3
      OR surname LIKE :s4
      ORDER BY current DESC LIMIT 5";

     $i=1;
     $stm=$conn->prepare($sql);
      $search11='%'.@$_POST['search'].'%';
      $search22='%'.@$_POST['search'].'%';
      $search33='%'.@$_POST['search'].'%';
      $search44='%'.@$_POST['search'].'%';
      $search1 = preg_replace('/\s+/', '', $search11);
      $search2 = preg_replace('/\s+/', '', $search22);
      $search3 = preg_replace('/\s+/', '', $search33);
      $search4 = preg_replace('/\s+/', '', $search44);
     $stm->bindParam(':s1',$search1);
     $stm->bindParam(':s2',$search2);
     $stm->bindParam(':s3',$search3);
     $stm->bindParam(':s4',$search4);
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
       <!-- <td><?php echo $row['telephone'];?></td> -->
       <!-- <td><?php echo $row['p_id'];?></td> -->
       <!-- <td><?php echo $row['birth_date'].' '.$row['birth_month'].' '.$row['birth_year'];?></td> -->
       <td class="noprint"><a href="updateform_1.php?id=<?php echo $row['id'];?>">
          <!-- <i class="fa fa-edit-square-o" style="font-size:24px;color:green"></i> -->
          <i class="fas fa-pen-square"style="font-size:24px;color:green"></i>
          </a>
        </td>
        <!-- <td class="noprint"><a href="delete.php?del_id=<?php echo $row['ram_id'];?>" class="disabled"  OnClick="return Conf(this)">
              <i class="fa fa-minus-circle" style="font-size:24px;color:red"></i>
            </a>
        </td> -->
        </tr>
     <?php
     }
     ?>
    </tbody>
    <tfoot>
      <tr>

        <td colspan="8" style="text-align:center;"><b><i>แสดงรายชื่อนักศึกษา 5 คนที่บันทึกล่าสุด </i></b> </td>

      </tr>
    </tfoot>
  </table>
</div>
</body>
</html>
