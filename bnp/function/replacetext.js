$(document).ready(function() {
  replace_number();
  replace_total();
});

function replace_number() {
  $('input.ramid').on('keypress keyup keydown', function(e) {
    var replacedText = $(this).val()
      .replace(/ๅ/g, 1)
      .replace(/\//g, 2)
      .replace(/-/g, 3)
      .replace(/ภ/g, 4)
      .replace(/ถ/g, 5)
      .replace(/ุ/g, 6)
      .replace(/\ึ/g, 7)
      .replace(/ค/g, 8)
      .replace(/ต/g, 9)
      .replace(/จ/g, 0);
    $(this).val(replacedText);
  });
}

function replace_total() {
  $('#myModal').on('shown.bs.modal', function() {
    var str = $('span#grandtotal').text().replace(/.$/, 0);
    $('span#grandtotal').text(str);
    console.log(str);
  });
}
