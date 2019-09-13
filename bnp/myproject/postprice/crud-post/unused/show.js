$(document).ready(function() {
  Show_Data();
});

function fill_datatable(filter_gender, filter_country) {
  var dataTable = $('#customer_data').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "searching": false,
    "ajax": {
      url: "data.php",
      type: "POST",
      data: {
        filter_gender: filter_gender,
        filter_country: filter_country
      }
    },
    success: function(result) {
      var obj = jQuery.parseJSON(result);

      if (obj != '') {
        $.each(obj, function(key, inval) {
          // $("#cusname"+currentIndex).val(inval.name);
          // $("#gen"+currentIndex).val(inval.gen);
          // $("#cusid"+currentIndex).val(inval.prid);
          //$("#keepcost"+currentIndex).val(inval['fee']);
          $('table').append('<tr><td>' + inval.name + '</td></tr><tr><td>' + inval.prid + '</td></tr>');
        });
      }
    }

  });
}

function Show_Data() {
  var dataTable = $('#customer_data').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "searching": false,
    "ajax": {
      url: "data.php",
      type: "POST",
      cache: false,
      data: {},
      success: function(result) {
        var obj = jQuery.parseJSON(result);

        if (obj != '') {
          $.each(obj, function(key, inval) {
            // $("#cusname"+currentIndex).val(inval.name);
            // $("#gen"+currentIndex).val(inval.gen);
            // $("#cusid"+currentIndex).val(inval.prid);
            //$("#keepcost"+currentIndex).val(inval['fee']);
            $('select').append(
              '<option value="">' + inval.senddate + '</option>' +
              '</select>'
            );
            $('table').append('<tr>' +
              '<td>' + inval.name + '</td>' +
              '<td>' + inval.prid + '</td>' +
              '</tr>');
          });
        }
      }
    }
  });
}
