$(document).ready(function(){
  $('.zon').hide();
    formshow();

    $("#ramid").on("keypress",function(e){
      if(e.which === 13){
        $('#new_sub').focus();
      }
    });
    $("#new_sub").on("keypress",function(e){
      if(e.which === 13){
        $('#old_sub').focus();
      }
    });
    $("#old_sub").on("keypress",function(e){
      if(e.which === 13){
        $('.call').focus();
      }
    });

  $('button.call').on('click', function (){
    if ($('input#ramid').val().length !== 5)
    {
      swal({
        title: "โปรดระบุรหัสนักศึกษา",
        text: "ระบุให้ครบหรือเพียง 5 ตัวหน้า",
        type: "error",
        confirmButtonText: "ตกลง"
      });
      return false;
    }
    if (!$('input[name=status]:checked').val() )
    {
      swal({
        title: "โปรดเลือกประเภทนักศึกษา",
        text: " (โปรดเลือกประเภทนักศึกษา)",
        type: "error",
        confirmButtonText: "ตกลง"
      });
      return false;
    }

      if ($('input#new_sub').val() == '' && $('input#old_sub').val() == '')
      {
        swal({
          title: "โปรดระบุจำนวนวิชา",
          text: "ลงใหม่หรือลงกันกี่ตัว",
          type: "error",
          confirmButtonText: "ตกลง"
        });
        return false;
      }
      var new_sub   = parseInt($('input#new_sub').val()) || 0;
      var old_sub   = parseInt($('input#old_sub').val()) || 0;
      var total_sub = new_sub + old_sub;
      if (($('input#ramid').val().indexOf(9,2) == 2 && total_sub > 8) || ($('input#ramid').val().indexOf(9,2) == 2 && old_sub != ''))
      {
        swal({
          title: "นักศึกษา PRE-DEGREE?",
          text: "ไม่สามารถขอจบหรือลงกันได้ ต้องการคำนวณต่อหรือไม่ ?",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "คำนวณ",
          cancelButtonText: "กลับ !",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm) {
          if (isConfirm) {
            //swal("Deleted!", "Your imaginary file has been deleted.", "success");
            $('#myModal').modal('show');
          } else {
            //swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      }
      else
      {
        $('#myModal').modal('show');
      }
    });

    $('#myModal').on('shown.bs.modal', function () {
      detail();
      prprize();
      ramprize();
      grandtotal();
    });

    $(document).on('hidden.bs.modal', function () {
      location.reload();
    });

    $('.comeback, #comeback').on('change keyup blur', function (){
     var value = $(this).closest('.radio').find('input[name=getback]').val();
       $('.comeback').val(value);
   });
   // ส่วนของราม
    var CostNewer	 =	800;	// ค่าบำรุง 60 ขึ้นไป
    var CostNew	   =	500;	// ค่าบำรุง 55 - 59 และพรีดีกรี 60 ขึ้นไป
    var CostOld	   =	300;	// ค่าบำรุงปี 54 ลงมาและพรีดีกรี 59 ลงมา
    var News		   = 	100;	// ค่าข่าวราม
    var CreditPre	 =	150;	// ค่าหน่วยกิตนักศึกษาพรีดีกรี ต่อ เล่ม
    var CreditNor	 =	75;		// ค่าหน่วยกิตนักศึกษาปกติ ต่อ เล่ม
   // ส่วนของเพื่อนเรียน
    var New_Officer = 700;    // ราคาตำรวจ/ทหาร รหัส 60 ขึ้นไป
    var Old_Officer = 612.5;  // ราคาตำรวจ/ทหาร รหัส 59 ลงมา
    var New_Person  = 842.86; // ราคาบุคคลทั่วไป รหัส 60 ขึ้นไป
    var Old_Person  = 737.5;    // ราคาบุคคลทั่วไป รหัส 59 ลงมา
    var keep_cost   = 500;    // ราคาลงกัน

    function formshow(){
      $('#ramid').on('keyup keydown change', function () {
        var ramid     = $('input#ramid').val();
        if(ramid.length !== 5)
          {
            $('.zon').hide();
          }
        if(ramid < 60065 && ramid.length == 5)
          {
            $('.zon').show();
            $('.minizon').show();
            $("input[name=status][rel='person']").prop("checked",false);
          }
        if(ramid >= 60065 && ramid.length == 5)
         {
          $('.zon').show();
          $('.minizon').hide();
          $("input[name=status][rel='person']").prop("checked",true);
         }
       });
     }

    function prprize() {
      var status_type   = $("input[name=status]:checked").attr("rel");
      var ramid     = $('input#ramid').val();
      var new_sub   = parseInt($('input#new_sub').val()) || 0;
      var old_sub   = parseInt($('input#old_sub').val()) || 0;
      var cost;
        if(status_type == 'officer' && ramid >= 60000 && old_sub != '') //ตำรวจ/ทหาร รหัส 60 ขึ้นไป
        {
           cost = parseFloat((new_sub*New_Officer)+keep_cost);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'officer' && ramid >= 60000 && old_sub == '')
        {
           cost = parseFloat(new_sub*New_Officer);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'officer' && ramid < 60000 && old_sub != '') //ตำรวจ/ทหาร รหัส 59 ลงมา
        {
           cost = parseFloat((new_sub*Old_Officer)+keep_cost);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'officer' && ramid < 60000 && old_sub == '')
        {
           cost = parseFloat(new_sub*Old_Officer);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'person' && ramid >= 60000 && old_sub != '') // บุคคลธรรมดา รหัส 60 ขึ้นไป
        {
           cost = parseFloat((new_sub*New_Person)+keep_cost);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'person' && ramid >= 60000 && old_sub == '')
        {
           cost = parseFloat(new_sub*New_Person);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'person' && ramid < 60000 && old_sub != '') // บุคคลธรรมดา รหัส 59 ลงมา
        {
           cost = parseFloat((new_sub*Old_Person)+keep_cost);
          $('span#pr_cost').text(cost);
        }
        if(status_type == 'person' && ramid < 60000 && old_sub == '')
        {
           cost = parseFloat(new_sub*Old_Person);
          $('span#pr_cost').text(cost);
        }
    }

    function ramprize() {
      var ramid     = $('input#ramid').val();
      var new_sub   = parseInt($('input#new_sub').val()) || 0;
      var old_sub   = parseInt($('input#old_sub').val()) || 0;
      var cost;
        if(ramid !== '' && ramid > 60000  && ramid.indexOf(9,2) == 2) 							//พรีดีกรี 60 ขึ้นไป
        {
           cost = (new_sub+old_sub)*CreditPre+CostNew+News;
          $('span#student_type').text('PRE-DEGREE รหัส 60 ขึ้นไป');
          $('span#ram_cost').text(cost);
        }
        if(ramid !== '' && ramid < 60000  && ramid.indexOf(9,2) == 2) 							//พรีดีกรี 59 ลงมา
        {
           cost = (new_sub+old_sub)*CreditPre+CostOld+News;
          $('span#student_type').text('PRE-DEGREE รหัส 59 ลงมา');
          $('span#ram_cost').text(cost);
        }
        if(ramid !== '' && ramid >= 60000 && ramid.indexOf(9,2) !== 2) 							// นักศึกษาปกติรหัส 60 ขึ้นไป
        {
           cost = (new_sub+old_sub)*CreditNor+CostNewer+News;
          $('span#student_type').text('นักศึกษาปกติ รหัส 60 ขึ้นไป');
          $('span#ram_cost').text(cost);
        }
        if(ramid !== '' && ramid >= 55000 && ramid < 60000 && ramid.indexOf(9,2) !== 2) 	// นักศึกษาปกติรหัส 55 -59
        {
           cost = (new_sub+old_sub)*CreditNor+CostNew+News;
          $('span#student_type').text('นักศึกษาปกติ รหัส 55 -59');
          $('span#ram_cost').text(cost);
        }
        if(ramid !== ''&& ramid < 55000 && ramid.indexOf(9,2) !== 2) 							//นักศึกษาปกติรหัส 54 ลงมา
        {
           cost = (new_sub+old_sub)*CreditNor+CostOld+News;
          $('span#student_type').text('นักศึกษาปกติ รหัส 54 ลงมา');
          $('span#ram_cost').text(cost);
        }
    }

    function detail() {
      var sending_val  = $("input[name=sending]:checked").val();
      var keeping_val  = $("input[name=keeping]:checked").val();
      var comeback_val = $("input[name=comeback]:checked").val();
      var status_val   = $("input[name=status]:checked").val();
      var ramid     = $('input#ramid').val();
      var new_sub   = parseInt($('input#new_sub').val()) || 0;
      var old_sub   = parseInt($('input#old_sub').val()) || 0;
      var total_sub = new_sub + old_sub;
      var total_credit = (total_sub*3);
      if(ramid < 60065)
        {
          $('span#client_type').text(status_val);
        }
      if(ramid >= 60065)
        {
          $('span#client_type').text('ทุกสถานะ (ทหาร ตำรวจ บุคคลธรรมดา ราคาเดียวกัน)');
        }

        $('span#sending_cost').text(sending_val);
        $('span#keeping_cost').text(keeping_val);
        $('span#comeback_cost').text(comeback_val);
        $('span#total_sub').text(total_sub);
        $('span#total_credit').text(total_credit);
    }

    function grandtotal() {
      var sum = 0;
      $('.badge').each(function(){
        var each = parseInt($(this).text()) || 0;
        sum += each;
        var sums = sum.toLocaleString();
        $('span#grandtotal').text(sums);
      });
    }

});
