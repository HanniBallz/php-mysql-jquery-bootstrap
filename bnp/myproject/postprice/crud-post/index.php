<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ข้อมูลการส่งไปรษณีย์</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="../../../jQuery/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../../../DataTables-1.10.18/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
  <style> @import "my_style.css?Ver0004"; </style>
  <script src="../../../DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
  <script>
    $(document).ready(function(){
       $('#show_status_fee').DataTable({
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'print',
                 text: 'พิมพ์',
                 customize: function ( win ) {
                     $(win.document.body)
                         .css( 'font-size', '16pt' )
                         .prepend(
                             // '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                         );
                    $(win.document.body).find('.unprint').css('text-align','center');
                     $(win.document.body).find( 'table' )
                         .addClass( 'compact' )
                     },
                 exportOptions: {
                     columns: ':visible'
                 }
             },
             // 'colvis'
         ],
         columnDefs: [ {
             targets: [0,-1],
             visible: false
         } ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทั้งหมด"]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
        },
         // "scrollY":        "400px",
         // "scrollCollapse": true,
         "paging":         true,
         initComplete: function () {
             this.api().columns().every( function () {
                 var column = this;
                 var select = $('<select><option value=""></option></select>')
                     .appendTo( $(column.footer()).empty() )
                     .on( 'change', function () {
                         var val = $.fn.dataTable.util.escapeRegex(
                             $(this).val()
                         );

                         column
                             .search( val ? '^'+val+'$' : '', true, false )
                             .draw();
                     } );

                 column.data().unique().sort().each( function ( d, j ) {
                     select.append( '<option value="'+d+'">'+d+'</option>' )
                 } );
             } );
         }
       });
    });
  </script>

</head>
<body>
<div class="container">
  <br>
  <h2 class="unprint">ข้อมูลการส่งไปรษณีย์</h2>

  <table id="show_status_fee" class="display" cellspacing="0" width="100%" >
    <thead>
      <tr>
        <th width="5%">ลำดับ</th>
        <th width="">วันส่ง/ยิงบาร์โค้ด</th>
        <th width="10%">รุ่น</th>
        <th>รหัสนักศึกษา</th>
        <th>รหัส พ.ร.</th>
        <th>ชื่อ - นามสกุล</th>
        <th>รหัสบาร์โค้ดไปรษณีย์</th>
        <th class="noprint">ลบ</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include 'select.php';
      $i=1;
      while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
      ?>
      <tr>

        <td class="no"> <?php echo $i++;?> </td>
        <td class=""><?php echo $row['send_date'];?></td>
        <td class="gen"><?php echo $row['gen'];?></td>
        <td class="ramid"><?php echo $row['ram_id'];?></td>
        <td class="prid"><?php echo $row['pr_id'];?></td>
        <td class="fullname"><?php echo $row['title'].$row['name'].'  '.$row['surname'];?></td>
        <td class="keepfee"><?php echo $row['trackcode'];?></td>

         <td width="5%" align="center" class="noprint"> <a href="delete.php?id=<?php echo $row['id'];?>">
               <i class="fa fa-minus-circle" style="font-size:24px;color:red"></i>
             </a>
         </td>

      </tr>
    <?php
      }
    ?>
      <tbody>
        <tfoot>
          <tr>
            <th width="" class="invisible">ลำดับ</th>
            <th width="">วันส่ง/ยิงบาร์โค้ด</th>
            <th width="">รุ่น</th>
            <th class="invisible">รหัสนักศึกษา</th>
            <th class="invisible">รหัส พ.ร.</th>
            <th class="invisible">ชื่อ - นามสกุล</th>
            <th class="invisible">รหัสบาร์โค้ดไปรษณีย์</th>
            <th class="invisible">ลบ</th>
          </tr>
        </tfoot>
  </table>
</div>

</body>
</html>
