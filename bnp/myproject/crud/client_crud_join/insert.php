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
      $birthdate    = $_POST['birthdate'];
      $birthmonth   = $_POST['birthmonth'];
      $birthyear    = $_POST['birthyear'];

      $sql1 = "INSERT INTO client_data (id, gen, ram_id, pr_id, title, name, surname, postcode)
              values (:id, :gen, :ram_id, :pr_id, :title, :name, :surname, :postcode)
              ON DUPLICATE KEY UPDATE
              gen=:gen2, ram_id=:ram_id2, pr_id=:pr_id2, title=:title2, name=:name2,
              surname=:surname2, postcode=:postcode2";
              $stm=$conn->prepare($sql1);
              $stm->bindParam(":id",$id);
              $stm->bindParam(":gen",$gen);
              $stm->bindParam(":ram_id",$ramid);
              $stm->bindParam(":pr_id",$prid);
              $stm->bindParam(":title",$title);
              $stm->bindParam(":name",$name);
              $stm->bindParam(":surname",$surname);
              $stm->bindParam(":postcode",$postcode);
              $stm->bindParam(":gen2",$gen);
              $stm->bindParam(":ram_id2",$ramid);
              $stm->bindParam(":pr_id2",$prid);
              $stm->bindParam(":title2",$title);
              $stm->bindParam(":name2",$name);
              $stm->bindParam(":surname2",$surname);
              $stm->bindParam(":postcode2",$postcode);

        $sql2 = "INSERT INTO stupass (id, ram_id, p_id, e_pass, birth_date, birth_month, birth_year)
                values (:id, :ram_id, :p_id, :e_pass, :birth_date, :birth_month, :birth_year)
                ON DUPLICATE KEY UPDATE
                ram_id=:ram_id3, p_id=:p_id3, e_pass=:e_pass3, birth_date=:birth_date3, birth_month=:birth_month3, birth_year=:birth_year3";
                $stm2=$conn->prepare($sql2);
                $stm2->bindParam(":id",$id);
                $stm2->bindParam(":ram_id",$ramid);
                $stm2->bindParam(":p_id", $pid);
                $stm2->bindParam(":e_pass", $epass);
                $stm2->bindParam(":birth_date", $birthdate);
                $stm2->bindParam(":birth_month", $birthmonth);
                $stm2->bindParam(":birth_year", $birthyear);
                $stm2->bindParam(":ram_id3",$ramid);
                $stm2->bindParam(":p_id3", $pid);
                $stm2->bindParam(":e_pass3", $epass);
                $stm2->bindParam(":birth_date3", $birthdate);
                $stm2->bindParam(":birth_month3", $birthmonth);
                $stm2->bindParam(":birth_year3", $birthyear);

              try{
                $stm->execute();
                $stm2->execute();
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
