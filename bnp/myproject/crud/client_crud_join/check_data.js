$(document).ready(function(){
  $('input[name*="ramid"]').on("keyup change", function() {
    $.ajax({
      url: "data.php",
      type: "POST",
            cache: false,
      data: 'ram_id=' +$("#ramid").val()
    })
    .success(function(result){
      var obj = jQuery.parseJSON(result);
        if(obj == '')
        {
          $("#gen").val('');
          $("#prid").val('');
          $("#title").val('');
          $("#name").val('');
          $("#surname").val('');
          $("#postcode").val('');
          $("#birthdate").val('');
          $("#birthmonth").val('');
          $("#birthyear").val('');
        }
        else
        {
        $.each(obj, function(key, inval){
          $("#gen").val(inval['gen']);
          $("#prid").val(inval['prid']);
          $("#title").val(inval['title']);
          $("#name").val(inval['name']);
          $("#surname").val(inval['surname']);
          $("#epass").val(inval['epass']);
          $("#pid").val(inval['pid']);
          $("#postcode").val(inval['postcode']);
          $("#birthdate").val(inval['birthdate']);
          $("#birthmonth").val(inval['birthmonth']);
          $("#birthyear").val(inval['birthyear']);
        });
      }
    });
  });
});
