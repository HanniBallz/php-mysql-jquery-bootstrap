<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Insert Data </title>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
<?php
include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";
  if(@$_POST["ramid"] !='')
    {
        $ramid    = $_POST['ramid'];
        $term     = $_POST['thisterm'];
        $fee      = $_POST['statusfee'];

      $sql = "INSERT INTO regis_fee (id, term, ram_id, keep_fee)
      VALUES ('', '$term', '$ramid', '$fee')";
      $stm=$conn->prepare($sql);
      try{
        $stm->execute();
        echo '<script>
              window.location.href = "index.php";
              </script>';
        // echo '<script>
        //   setTimeout(function () {
        //     swal({
        //       title: "สำเร็จ!",
        //       text: "บันทึกข้อมูลเรียบร้อยแล้ว",
        //       type: "success",
        //       confirmButtonText: "ตกลง"
        //       },
        //     function(isConfirm){
        //       if (isConfirm) {
        //         window.location.href = "index.php";
        //       }
        //     }); }, 500);
        //     </script>';

        }catch(PDOException $e){
        echo '<script>
          setTimeout(function () {
            swal({
              title: "ไม่สามารถบันทึกข้อมูลได้!",
              text: "บันทึกข้อมูลซ้ำ โปรดตรวจสอบ",
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
