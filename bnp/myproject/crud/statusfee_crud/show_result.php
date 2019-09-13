<?php

include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";

  $thisterm = '1/2561';
  $sql="SELECT regis_fee.ram_id,regis_fee.term,regis_fee.keep_fee,
              client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen
        FROM client_data
        LEFT JOIN regis_fee
        ON regis_fee.ram_id=client_data.ram_id
        WHERE regis_fee.term = '$thisterm' ";


$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
        'term'    =>  $row['term'],
        'fee'     =>  $row['keep_fee']

    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
