<?php

include('../../connect/connect.php');

$sql = "SELECT * FROM client_data WHERE 1 AND ram_id = '".@$_POST["ram_id"]."'";

$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//To output as-is json data result
//header('Content-type: application/json');
//echo json_encode($result);

//Or if you need to edit/manipulate the result before output
$return = [];
foreach ($result as $row) {
    $return[] = [
        '$ramid' => $row['ram_id'],
        '$name' => $row['title'].$row['name'].' '.$row['surname'],
        '$prid' => $row['pr_id'].' - '.$row['gen'],
        '$destination' => $row['postcode']
    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
