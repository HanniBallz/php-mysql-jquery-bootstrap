<?php

include $_SERVER['DOCUMENT_ROOT']."/home/connect/connect.php";

//$sql = "SELECT * FROM client_data
  $sql="SELECT stupass.ram_id,stupass.p_id,stupass.e_pass,stupass.birth_date,stupass.birth_month,stupass.birth_year,
              client_data.name,client_data.surname,client_data.pr_id,client_data.title,client_data.gen,client_data.postcode
        FROM client_data
        LEFT JOIN stupass
        ON stupass.ram_id=client_data.ram_id
        WHERE 1 AND client_data.ram_id = '".@$_POST["ram_id"]."'";


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
        'title'   =>  $row['title'],
        'name'    =>  $row['name'],
        'surname' =>  $row['surname'],
        'postcode'=>  $row['postcode'],
        'epass'   =>  $row['e_pass'],
        'pid'     =>  $row['p_id'],
        'birthdate'  =>  $row['birth_date'],
        'birthmonth' =>  $row['birth_month'],
        'birthyear'  =>  $row['birth_year']
    ];
}
$conn = null;

//header('Content-type: application/json');
echo json_encode($return);
?>
