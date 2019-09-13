$(document).ready(function() {

  $("tbody").on("keypress", ".ramid", function(e) {
    if (e.which === 13) {
      $(this).closest('tr').find('.trackcode').focus();
    }
  });

  $("tbody").on("keypress", ".trackcode", function(e) {
    if (e.which === 13) {
      $(this).closest('tr').next('tr').find('.ramid').focus();
    }
  });

  $('button.print').on('click', function(){
    window.print();
  });
  $('button.reset').on('click', function(){
    $('input[type=text]').val('');
    $('.ramid')[0].focus();
  });

  $('input[name*="ramid"]').on("change", function() {
    var currentIndex = $(this).closest("tr")[0].rowIndex;
    $.ajax({
      url: "postdata.php",
      type: "POST",
      cache: false,
      data: 'ram_id=' + $("#ramid" + currentIndex).val(),
      success: function(result) {
        var obj = jQuery.parseJSON(result);
        if (obj == '') {
          $("#cusname" + currentIndex).val('');
          $("#destination" + currentIndex).val('');
          $("#cusid" + currentIndex).val('');
        } else {
          $.each(obj, function(key, inval) {
            $("#cusname" + currentIndex).val(inval.$name);
            $("#destination" + currentIndex).val(inval.$destination);
            $("#cusid" + currentIndex).val(inval.$prid);
          });
        }
      }
    });

  });

});
