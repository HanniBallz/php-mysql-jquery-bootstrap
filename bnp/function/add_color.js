$(document).ready(function() {
  color_date();
  add_date_color();
});

function color_date() {
  $('select#regis_date option:eq(1)').css('color', 'red');
  $('select#regis_date option:eq(2)').css('color', 'blue');
  $('select#regis_date option:eq(3)').css('color', 'green');
  $('select#regis_date option:eq(4)').css('color', 'purple');
  $('.datefee, .keepcost').css('color', 'red');
}

function add_date_color() {
  $('select#regis_date').on('change', function() {
    var dayone = $('select#regis_date option:eq(1)').text();
    var daytwo = $('select#regis_date option:eq(2)').text();
    var daythree = $('select#regis_date option:eq(3)').text();
    var dayfour = $('select#regis_date option:eq(4)').text();
    var choosing = $('option:selected').text();

    if (choosing == dayone) {
      $(this).css('color', 'red');
    }
    if (choosing == daytwo) {
      $(this).css('color', 'blue');
    }
    if (choosing == daythree) {
      $(this).css('color', 'green');
    }
    if (choosing == dayfour) {
      $(this).css('color', 'purple');
    }
  });
}
