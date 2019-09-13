$(document).ready(function() {
  Pressing();
  Show_Data();
  Counting();
  This_term();
});

function Show_Data() {
  // เรียกข้อมูลมาแสดง
  $('input[name*="ramid"]').on("change", function() {
    //var currentIndex = $(this).closest("tr")[0].rowIndex;
    $.ajax({
      url: "show_joindata.php",
      type: "POST",
      cache: false,
      data: 'ram_id=' + $("#ramid").val(),
      success: function(result) {
        var obj = jQuery.parseJSON(result);
        if (obj == '') {
          $("#name").val('');
          $("#statusfee").val('');
        } else {
          $.each(obj, function(key, inval) {
            $("#name").val(inval.name);
            $("#statusfee").val(inval.fee);
          });
        }
      }
    });
  });
}

function Pressing() {
  // กำหนดทิศทางเครื่องยิงบาร์โค้ด
  $('#ramid').on('keyup', function() {
    var inram = $('input#ramid').val().length;
    if ($('input#ramid').val().length == 10) {
      console.log('ok');
      $('#statusfee').focus();
    }

  });

  $("input").on("keypress", "#ramid", function(e) {
    e.preventDefault();
    if (e.which === 13) {
      $('#statusfee').focus();
    }
  });
  $("input").on("keypress", "#statusfee", function(e) {
    e.preventDefault();
    if (e.which === 13) {
      $('button#insert').focus();
    }
  });
}

function Counting() {
  var counting = $('td.no').length;
  console.log(counting);
  $('.counting').text(counting);
}

function This_term() {
  $.ajax({
    url: "select.php",
    method: "POST",
    data: $("#myForm").serialize(),
    success: function(data) {
      console.log(data);
    }
  });
}
