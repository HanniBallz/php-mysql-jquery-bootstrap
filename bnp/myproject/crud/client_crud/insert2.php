<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Insert Data </title>
  <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> -->

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
  if(@$_POST["ramid"] !='')
    {
      $gen      = $_POST['gen'];
      $ramid    = $_POST['ramid'];
      $prid     = $_POST['prid'];
      $title    = $_POST['title'];
      $name     = $_POST['name'];
      $surname  = $_POST['surname'];
      $postcode = $_POST['postcode'];
      $pid      = $_POST['pid'];
      $epass    = $_POST['epass'];
      $telephone = $_POST['telephone'];
      $birthdate    = $_POST['birthdate'];
      $birthmonth   = $_POST['birthmonth'];
      $birthyear    = $_POST['birthyear'];
      $sql = "INSERT INTO client_data (id, gen, ram_id, pr_id, title, name, surname, postcode,p_id, e_pass, telephone, birth_date, birth_month, birth_year)
              values (:id, :gen, :ram_id, :pr_id, :title, :name, :surname, :postcode, :p_id, :e_pass, :telephone, :birth_date, :birth_month, :birth_year)
              ON DUPLICATE KEY UPDATE
              gen=:gen2, ram_id=:ram_id2, pr_id=:pr_id2, title=:title2, name=:name2, surname=:surname2, postcode=:postcode2,p_id=:p_id2, e_pass=:e_pass2,
              telephone=:telephone2, birth_date=:birth_date2, birth_month=:birth_month2, birth_year=:birth_year2";
              $stm=$conn->prepare($sql);
              $stm->bindParam(":id",$id);
              $stm->bindParam(":gen",$gen);
              $stm->bindParam(":ram_id",$ramid);
              $stm->bindParam(":pr_id",$prid);
              $stm->bindParam(":title",$title);
              $stm->bindParam(":name",$name);
              $stm->bindParam(":surname",$surname);
              $stm->bindParam(":postcode",$postcode);
              $stm->bindParam(":p_id", $pid);
              $stm->bindParam(":e_pass", $epass);
              $stm->bindParam(":telephone", $telephone);
              $stm->bindParam(":birth_date", $birthdate);
              $stm->bindParam(":birth_month", $birthmonth);
              $stm->bindParam(":birth_year", $birthyear);
              $stm->bindParam(":gen2",$gen);
              $stm->bindParam(":ram_id2",$ramid);
              $stm->bindParam(":pr_id2",$prid);
              $stm->bindParam(":title2",$title);
              $stm->bindParam(":name2",$name);
              $stm->bindParam(":surname2",$surname);
              $stm->bindParam(":postcode2",$postcode);
              $stm->bindParam(":p_id2", $pid);
              $stm->bindParam(":e_pass2", $epass);
              $stm->bindParam(":telephone2", $telephone);
              $stm->bindParam(":birth_date2", $birthdate);
              $stm->bindParam(":birth_month2", $birthmonth);
              $stm->bindParam(":birth_year2", $birthyear);
              try{
                $stm->execute();
                echo '<script>
                  setTimeout(function () {
                    swal({
                      title: "สำเร็จ!",
                      text: "บันทึกข้อมูลเรียบร้อยแล้ว",
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
