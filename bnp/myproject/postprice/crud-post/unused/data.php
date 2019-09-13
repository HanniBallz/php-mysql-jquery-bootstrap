<?php

include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";

  // $senddate = ".@$_POST['ramid'].";
  // $gen      = ".@$_POST['gen'].";
  $sql="SELECT tracking.ram_id,tracking.trackcode,tracking.send_date,
              client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen
        FROM  tracking
        LEFT JOIN client_data
        ON tracking.ram_id=client_data.ram_id

        GROUP BY tracking.send_date
        ORDER BY tracking.send_date DESC ";


$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  //WHERE tracking.send_date = '$senddate' OR client_data.gen = '$gen'
//To output as-is json data result
//header('Content-type: application/json');
//echo json_encode($result);

//Or if you need to edit/manipulate the result before output
$return = [];
foreach ($result as $row) {
    $return[] = [
        'gen'     =>  $row['gen'],
        'ramid'   =>  $row['ram_id'],
        'prid'    =>  $row['pr_id'],
        'name'    =>  $row['title'].$row['name'].' '.$row['surname'],
        'trackcode'    =>  $row['trackcode'],
        'senddate'     =>  $row['send_date']

    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
