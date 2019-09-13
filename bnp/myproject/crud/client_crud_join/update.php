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

  if(isset($_POST['update']))
  {
  $gen = $_POST['gen'];
  $ramid = $_POST['ramid'];
  $prid = $_POST['prid'];
  $title = $_POST['title'];
  $name = $_POST['name'];
  $surname  = $_POST['surname'];
  $postcode = $_POST['postcode'];
  $id = $_REQUEST['id'];

  // แก้ไขข้อมูล
  $sql_edit = "update client_data set
        gen = '$gen' , ram_id = '$ramid', pr_id = '$prid' , title = '$title' ,
        name = '$name' , surname = '$surname' , postcode = '$postcode' where id = '$id'";
  $stm=$conn->prepare($sql_edit);
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
}
?>
</body>
</html>
