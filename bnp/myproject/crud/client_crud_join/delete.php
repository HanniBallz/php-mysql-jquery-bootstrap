<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Angularjs Sweet Alert </title>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";

  if(@$_REQUEST['del_id'] != "") //ถ้า ค่า del_id ไม่เท่ากับค่าว่างเปล่า
  {
  $del_id = $_REQUEST['del_id'];
  $sql_del = "delete from client_data where ram_id = '$del_id'";
  $stmt=$conn->prepare($sql_del);
  try{
  	//$stmt->execute();
  $stmt->execute(array('$del_id'=>1));
  //echo "complete";
  }
  catch(PDOException $e){ echo $e;}

  if($stmt->rowCount()>0) {
    echo '<script>
      setTimeout(function () {
          swal({
            title: "สำเร็จ!",
            text: "ลบข้อมูลเรียบร้อยแล้ว",
            type: "success",
            confirmButtonText: "ตกลง"
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = "index.php";
            }
          }); }, 500);
      </script>';
    }else {
      echo '<script>
        setTimeout(function () {
            swal({
              title: "ผิดพลาด!",
              text: "ลบข้อมูลไม่ได้",
              type: "error",
              confirmButtonText: "กลับ"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "index.php";
              }
            }); }, 500);
        </script>';
    }
  }
    ?>
</body>
</html>
