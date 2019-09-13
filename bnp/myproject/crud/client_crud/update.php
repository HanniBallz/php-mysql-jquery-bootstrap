<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Update Data </title>
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon">

  <!-- jQuery library -->
  <script src="../../../js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="../../../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="../../../bootstrap-4.3.1/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <!-- <link href="../../../css/all.css" rel="stylesheet"> -->
  <script src="../../../js/font-awesome-5-all.js"></script>
  <!--SweetAlert -->
  <link rel="stylesheet" href="../../../css/sweetalert-1.1.3.css">
  <script src="../../../js/sweetalert-1.1.3.js"></script>

</head>
<body>
  <?php
  include('../../../connect/connect.php');

  if(isset($_POST['update']))
  {
    $gen      = $_POST['gen'];
    $ramid    = $_POST['ramid'];
    $prid     = $_POST['prid'];
    $title    = $_POST['title'];
    $name     = $_POST['name'];
    $surname  = $_POST['surname'];
    $postcode = $_POST['postcode'];

  $id = $_REQUEST['id'];

  // แก้ไขข้อมูล
  $sql_edit = "update client_data set
  gen = '$gen' , ram_id = '$ramid', pr_id = '$prid' , title = '$title' ,
  name = '$name' ,surname = '$surname' , postcode = '$postcode'
  where id = '$id'";

  $stm=$conn->prepare($sql_edit);
  try{
  $stm->execute();

  echo '<script>
    setTimeout(function () {
        swal({
          title: "สำเร็จ!",
          text: "แก้ไขข้อมูลเรียบร้อยแล้ว",
          type: "success",
          confirmButtonText: "ตกลง"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = "index.php";
          }
        }); }, 500);
    </script>';

    }catch(PDOException $e){
      echo '<script>
      setTimeout(function () {
      swal({
        title: "ผิดพลาด!",
        text: "ไม่สามารถบันทึกข้อมูลได้",
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
