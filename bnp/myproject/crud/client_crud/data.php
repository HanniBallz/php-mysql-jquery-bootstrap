<?php

include('../../../connect/connect.php');

$sql = "SELECT * FROM client_data WHERE 1 AND ram_id = '".@$_POST["ram_id"]."'";

$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//To output as-is json data result
//header('Content-type: application/json');
//echo json_encode($result);

//Or if you need to edit/manipulate the result before output
$return = [];
foreach ($result as $row) {
    $return[] = [
        'gen'     => $row['gen'],
        'ramid'   =>  $row['ram_id'],
        'prid'    =>  $row['pr_id'],
        'title'   =>  $row['title'],
        'name'    =>  $row['name'],
        'surname' =>  $row['surname'],
        'postcode'=>  $row['postcode'],
        'epass'   =>  $row['e_pass'],
        'pid'     =>  $row['p_id'],
        'birthdate'  =>  $row['birth_date'],
        'birthmonth' =>  $row['birth_month'],
        'birthyear'  =>  $row['birth_year'],
        'telephone'  =>  $row['telephone']
    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
