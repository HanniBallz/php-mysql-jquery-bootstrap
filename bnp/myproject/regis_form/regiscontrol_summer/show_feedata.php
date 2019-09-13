<?php

include('../../../connect/connect.php');

$thisterm = "1/2561";
$sql = "SELECT * FROM regis_fee WHERE 1 AND ram_id = '".@$_POST["ram_id"]."' AND term = '$thisterm' ";

$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//To output as-is json data result
//header('Content-type: application/json');
//echo json_encode($result);

//Or if you need to edit/manipulate the result before output
$return = [];
foreach ($result as $row) {
    $return[] = [
        'ramid' => $row['ram_id'],
        'term' => $row['term'],
        'fee' =>  $row['keep_fee']
    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
