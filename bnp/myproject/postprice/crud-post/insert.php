<?php
if(@$_POST['ramid'] != '' && @$_POST['trackcode'] != '')
{
	insertone();
}

function insertone(){
	include('../../../connect/connect.php');
	$query = "
	INSERT INTO tracking
	(ram_id, trackcode, send_date)
	VALUES (:ramid, :trackcode, :senddate)
	";

	for($count = 0; $count<count(@$_POST['ramid']); $count++)
	{
	 $data = array(
	  ':ramid' => $_POST['ramid'][$count],
	  ':trackcode' => $_POST['trackcode'][$count],
		':senddate' => $_POST['senddate'][$count]
	 );
	 $statement = $conn->prepare($query);
	 $statement->execute($data);
	}
}

 ?>
