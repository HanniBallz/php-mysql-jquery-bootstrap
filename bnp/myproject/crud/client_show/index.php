<?php
	session_start();
	if(@$_SESSION['username'] == "")
	{
		include $_SERVER['DOCUMENT_ROOT']."/login/header.php";
		echo '<script>
			setTimeout(function () {
				swal({
					title: "กรุณาเข้าสู่ระบบ",
					text: "",
					type: "warning",
					confirmButtonText: "กลับหน้า LOGIN"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = "/login/index.php";
					}
				}); }, 500);
				</script>';
		exit();
	}
		if($_SESSION['status'] == "user")
	{
		include $_SERVER['DOCUMENT_ROOT']."/login/header.php";
		echo '<script>
			setTimeout(function () {
				swal({
					title: "เฉพาะผู้ได้รับอนุญาตเท่านั้น",
					text: "",
					type: "warning",
					confirmButtonText: "กลับหน้า LOGIN"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = "/login/index.php";
					}
				}); }, 500);
				</script>';
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ค้นข้อมูลนักศึกษา</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="/home/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
  <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
  <script src="/home/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="/home/DataTables-1.10.18/css/jquery.dataTables.min.css">

  <style> @import "my_style.css?Ver0004"; </style>
<script type="text/javascript" charset="utf-8" >
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "server_processing_stu.php",
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
        },

        dom: '<"toolbar">frtip',
        fnInitComplete: function(){
            var CustomToolBar = '  <div id="non-printable" >' +
                '<a href="/home/myproject/crud/client_crud/insertform.php" target="_blank">'+
                  '<button class="btn btn-info" id="stop">' + 'เพิ่มข้อมูล' + ' '+
                    '<i class="fa fa-user-plus" style="font-size:px;color:white">'+'</i>' +
                  '</button>'+
                '</a>'+
              '</div>';
           $('div.toolbar').html(CustomToolBar);
         },

         "scrollY":        "400px",
         "scrollCollapse": true,
         "paging":         true,
         "order": [[ 12, "desc" ]],

        "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return row[3] + data + ' ' + row[5] ;
                },
                "targets": 4
            },
            {
                "render": function ( data, type, row ) {
                    return data + '<br> ' + row[6] ;
                },
                "targets": 1
            },
            {
                "render": function ( data, type, row ) {
                    return data + ' ' + row[9] + ' ' + row[10] ;
                },
                "targets": 8
            },
            { "visible": false,  "targets": [ 3,5,6,7,8,9,10,11,12 ] }
        ]
    } );
} );
</script>
</head>
<body>
<div class="container"><br>
  <!-- <h3 align="center">ค้นข้อมูลนักศึกษา</h3> -->
    <table id="example" class="display" cellspacing="0" width="100%">
      <thead class="">
		    <tr class="sticky">
		        <th width="7%">รุ่น</th>
			      <th width="15%">รหัสนักศึกษา<br>e-service</th>
			      <th width="10%">รหัส พ.ร.</th>
			      <th width=""></th>
			      <th width="20%">ชื่อ - นามสกุล</th>
			      <th width=""></th>
		        <th width=""></th>
            <th width="">เลขบัตร ป.ป.ช.</th>
            <th width="15%">วัน เดือน ปีเกิด</th>
            <th width=""></th>
            <th width=""></th>
            <th width="">เบอร์โทรศัพท์</th>
            <th width=""></th>
		    </tr>
      </thead>
      <tfoot>
		    <tr>
			      <th ></th>
            <th ></th>
            <th ></th>
            <th ></th>
            <th ></th>
			      <th ></th>
			      <th ></th>
			      <th ></th>
			      <th ></th>
			      <th ></th>
            <th ></th>
			      <th ></th>
            <th ></th>
		    </tr>
      </tfoot>
    </table>
</div>
</body>
</html>
