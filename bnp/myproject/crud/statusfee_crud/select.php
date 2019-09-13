<?php
include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";
$thisterm = '2/2561';
$sql="SELECT regis_fee.ram_id,regis_fee.term,regis_fee.keep_fee,
            client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen
      FROM regis_fee
      LEFT JOIN  client_data
      ON regis_fee.ram_id=client_data.ram_id
      WHERE regis_fee.term = '$thisterm'
      ORDER BY regis_fee.id DESC ";
      $result = $conn->query($sql);
 ?>
