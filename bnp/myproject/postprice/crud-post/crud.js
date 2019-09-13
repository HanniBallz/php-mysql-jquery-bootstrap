$(document).ready(function() {
  var dt = new Date();
  var months = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
  var newdt = dt.getDate() + " " + months[dt.getMonth()] + " " + (dt.getFullYear() + 543);
  $('.day').text(newdt);
  $('.senddate').val(newdt);
  window.onafterprint = function afterprint() {

    var ramid = [];
    var trackcode = [];
    var senddate = [];

    $('.ramid').each(function() {
      if ($(this).val() != '') {
        ramid.push($(this).val());
      }
    });
    $('.trackcode').each(function() {
      if ($(this).val() != '') {
        trackcode.push($(this).val());
      }
    });
    $('.senddate').each(function() {
      if ($(this).closest('tr').find('.ramid').val() != '') {
        senddate.push($(this).val());
      }

    });

    $.ajax({
      url: "/ann/myproject/postprice/crud-post/insert.php",
      method: "POST",
      data: {
        ramid: ramid,
        trackcode: trackcode,
        senddate: senddate
      },
      success: function(data) {
        console.log(data);
      }
    });
  };

});


function nortilus() {
  $('button.print').on('click', function() {
    var ramid = [];
    var trackcode = [];
    $('.ramid').each(function() {
      if ($(this).val() != '') {
        ramid.push($(this).val());
        console.log(ramid);
      }
    });
    $('.trackcode').each(function() {
      if ($(this).val() != '') {
        trackcode.push($(this).val());
        console.log(trackcode);
      }
    });
    $.ajax({
      url: "/ann/myproject/postprice/crud-post/insert.php",
      method: "POST",
      data: {
        ramid: ramid,
        trackcode: trackcode
      },
      success: function(data) {
        alert(data);
        console.log(data);
      }
    });

  });
}
