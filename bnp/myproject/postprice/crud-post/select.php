<?php
include('../../../connect/connect.php');
$thisterm = '2/2561';
$sql="SELECT tracking.id, tracking.ram_id, tracking.trackcode, tracking.send_date, tracking.current,
            client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen
      FROM  tracking
      LEFT JOIN client_data
      ON tracking.ram_id=client_data.ram_id
      ORDER BY tracking.id DESC
      LIMIT 1000 ";
      $result = $conn->query($sql);
 ?>
