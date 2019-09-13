function Register() {
  $('input.ramid').on('keyup blur change', function () {
    var DayOnes = $('select#regis_date option:eq(1)').text(localStorage.getItem("key1"));
    var DayTwos = $('select#regis_date option:eq(2)').text(localStorage.getItem("key2"));
    var DayThrees = $('select#regis_date option:eq(3)').text(localStorage.getItem("key3"));
    var DayFours = $('select#regis_date option:eq(4)').text(localStorage.getItem("key4"));

    var DayOne = DayOnes.text();
    var DayTwo = DayTwos.text();
    var DayThree = DayThrees.text();
    var DayFour = DayFours.text();

    var Law_DayOne_First, Law_DayTwo_First, Law_DayThree_First, Law_DayFour_First,
      Law_DayOne_Last, Law_DayTwo_Last, Law_DayThree_Last, Law_DayFour_Last,
      Edu_DayOne_First, Edu_DayTwo_First, Edu_DayThree_First, Edu_DayFour_First,
      Edu_DayOne_Last, Edu_DayTwo_Last, Edu_DayThree_Last, Edu_DayFour_Last,
      Pol_DayOne_First, Pol_DayTwo_First, Pol_DayThree_First, Pol_DayFour_First,
      Pol_DayOne_Last, Pol_DayTwo_Last, Pol_DayThree_Last, Pol_DayFour_Last,
      Pre_DayOne_First, Pre_DayTwo_First, Pre_DayThree_First, Pre_DayFour_First;

    Law_DayOne_First = parseInt(localStorage.getItem("lawFirst-day1")); // กฎหมาย
    Law_DayTwo_First = parseInt(localStorage.getItem("lawFirst-day2"));
    Law_DayThree_First = parseInt(localStorage.getItem("lawFirst-day3"));
    Law_DayFour_First = parseInt(localStorage.getItem("lawFirst-day4"));
    Law_DayOne_Last = parseInt(localStorage.getItem("lawLast-day1"));
    Law_DayTwo_Last = parseInt(localStorage.getItem("lawLast-day2"));
    Law_DayThree_Last = parseInt(localStorage.getItem("lawLast-day3"));
    Law_DayFour_Last = parseInt(localStorage.getItem("lawLast-day4"));

    Edu_DayOne_First = parseInt(localStorage.getItem("eduFirst-day1")); // ศึกษาฯ
    Edu_DayTwo_First = parseInt(localStorage.getItem("eduFirst-day2"));
    Edu_DayThree_First = parseInt(localStorage.getItem("eduFirst-day3"));
    Edu_DayFour_First = parseInt(localStorage.getItem("eduFirst-day4"));
    Edu_DayOne_Last = parseInt(localStorage.getItem("eduLast-day1"));
    Edu_DayTwo_Last = parseInt(localStorage.getItem("eduLast-day2"));
    Edu_DayThree_Last = parseInt(localStorage.getItem("eduLast-day3"));
    Edu_DayFour_Last = parseInt(localStorage.getItem("eduLast-day4"));

    Pol_DayOne_First = parseInt(localStorage.getItem("polFirst-day1")); // รัฐศาสตร์
    Pol_DayTwo_First = parseInt(localStorage.getItem("polFirst-day2"));
    Pol_DayThree_First = parseInt(localStorage.getItem("polFirst-day3"));
    Pol_DayFour_First = parseInt(localStorage.getItem("polFirst-day4"));
    Pol_DayOne_Last = parseInt(localStorage.getItem("polLast-day1"));
    Pol_DayTwo_Last = parseInt(localStorage.getItem("polLast-day2"));
    Pol_DayThree_Last = parseInt(localStorage.getItem("polLast-day3"));
    Pol_DayFour_Last = parseInt(localStorage.getItem("polLast-day4"));

    Pre_DayOne_First = parseInt(localStorage.getItem("preFirst-day1")); // พรีดีกรี
    Pre_DayTwo_First = parseInt(localStorage.getItem("preFirst-day2"));
    Pre_DayThree_First = parseInt(localStorage.getItem("preFirst-day3"));
    Pre_DayFour_First = parseInt(localStorage.getItem("preFirst-day4"));
    Pre_DayOne_Last = parseInt(localStorage.getItem("preLast-day1"));
    Pre_DayTwo_Last = parseInt(localStorage.getItem("preLast-day2"));
    Pre_DayThree_Last = parseInt(localStorage.getItem("preLast-day3"));
    Pre_DayFour_Last = parseInt(localStorage.getItem("preLast-day4"));

    var ramid = $(this).closest('tr').find('.ramid').val();
    var regisdate = $(this).closest('tr').find('.regisdate');
    var datefee = $(this).closest('tr').find('.datefee');
    var credits = $(this).closest('tr').find('.credit');

    if (ramid == '') {
      regisdate.val('');
      credits.val('');
      datefee.val('');
    }

    //นักศึกษาปกติคณะนิติศาสตร์
    else if (ramid >= Law_DayOne_First && ramid <= Law_DayOne_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(1, 3) == 3) {
      regisdate.val(DayOne).css('color', 'red');
    } else if (ramid >= Law_DayTwo_First && ramid <= Law_DayTwo_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(1, 3) == 3) {
      regisdate.val(DayTwo).css('color', 'blue');
    } else if (ramid >= Law_DayThree_First && ramid <= Law_DayThree_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(1, 3) == 3) {
      regisdate.val(DayThree).css('color', 'green');
    } else if (ramid >= Law_DayFour_First && ramid <= Law_DayFour_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(1, 3) == 3) {
      regisdate.val(DayFour).css('color', 'purple');
    }

    //นักศึกษาปกติคณะศึกษาศาสตร์
    else if (ramid >= Edu_DayOne_First && ramid <= Edu_DayOne_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(4, 3) == 3) {
      regisdate.val(DayOne).css('color', 'red');
    } else if (ramid >= Edu_DayTwo_First && ramid <= Edu_DayTwo_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(4, 3) == 3) {
      regisdate.val(DayTwo).css('color', 'blue');
    } else if (ramid >= Edu_DayThree_First && ramid <= Edu_DayThree_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(4, 3) == 3) {
      regisdate.val(DayThree).css('color', 'green');
    } else if (ramid >= Edu_DayFour_First && ramid <= Edu_DayFour_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(4, 3) == 3) {
      regisdate.val(DayFour).css('color', 'purple');
    }

    //นักศึกษาปกติคณะรัฐศาสตร์
    else if (ramid >= Pol_DayOne_First && ramid <= Pol_DayOne_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(6, 3) == 3) {
      regisdate.val(DayOne).css('color', 'red');
    } else if (ramid >= Pol_DayTwo_First && ramid <= Pol_DayTwo_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(6, 3) == 3) {
      regisdate.val(DayTwo).css('color', 'blue');
    } else if (ramid >= Pol_DayThree_First && ramid <= Pol_DayThree_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(6, 3) == 3) {
      regisdate.val(DayThree).css('color', 'green');
    } else if (ramid >= Pol_DayFour_First && ramid <= Pol_DayFour_Last && ramid.indexOf(9, 2) !== 2 && ramid.indexOf(6, 3) == 3) {
      regisdate.val(DayFour).css('color', 'purple');
    }

    //นักศึกษาพรีดีกรี
    else if (ramid >= Pre_DayOne_First && ramid <= Pre_DayOne_Last && ramid.indexOf(9, 2) == 2 && ramid.indexOf(0, 3) == 3) {
      regisdate.val(DayOne).css('color', 'red');
    } else if (ramid >= Pre_DayTwo_First && ramid <= Pre_DayTwo_Last && ramid.indexOf(9, 2) == 2 && ramid.indexOf(0, 3) == 3) {
      regisdate.val(DayTwo).css('color', 'blue');
    } else if (ramid >= Pre_DayThree_First && ramid <= Pre_DayThree_Last && ramid.indexOf(9, 2) == 2 && ramid.indexOf(0, 3) == 3) {
      regisdate.val(DayThree).css('color', 'green');
    } else if (ramid >= Pre_DayFour_First && ramid <= Pre_DayFour_Last && ramid.indexOf(9, 2) == 2 && ramid.indexOf(0, 3) == 3) {
      regisdate.val(DayFour).css('color', 'purple');
    } else {
      regisdate.val('');
    }

  });
}

function Pressing() {
  // กำหนดทิศทางเครื่องยิงบาร์โค้ด
  $("tbody").on("keypress", ".ramid", function (e) {
    if (e.which === 13) {
      $(this).closest('tr').find('.credit').focus();
    }
  });
  $("tbody").on("keypress", ".credit", function (e) {
    if (e.which === 13) {
      $(this).closest('tr').next('tr').find('.ramid').focus();
    }
  });
}

function Clear() {
  // ล้างค่า
  $("#unprint").on("click", function () {
    $("table").find("input").empty();
    //$("#grandtotal").val("");
    $("#ramid1").focus();
  });
  $(".print").on("click", function () {
    var select_date = $("select#regis_date option:selected").val();
    if (select_date == 'no') {
      swal({
        title: "กรุณาระบุวันลงทะเบียน",
        text: "",
        icon: "warning",
        closeModal: false
      }).then(function () {
        swal.close();
        $('select#regis_date').focus();
      });
    } else {
      window.print();
    }

  });
}

function Ram_Cost() {
  // คำนวณค่าเทอมราม + ค่าปรับ + ค่ารักษาสถานภาพ
  $('table input, select#regis_date').on('keyup blur change', function () {
    $('input.datefee').each(function () {
      var CostNewer = 800; // ค่าบำรุง 60 ขึ้นไป
      var CostNew = 500; // ค่าบำรุง 55 - 59 และพรีดีกรี 60 ขึ้นไป
      var CostOld = 300; // ค่าบำรุงปี 54 ลงมาและพรีดีกรี 59 ลงมา
      var CreditPre = 50; // ค่าหน่วยกิตนักศึกษาพรีดีกรี
      var CreditNor = 25; // ค่าหน่วยกิตนักศึกษาปกติ
      var News = 100; // ค่าข่าวราม
      var cal = 0;
      var totals = 0;
      var ramid = $(this).closest('tr').find('.ramid').val();
      var credit = $(this).closest('tr').find('.credit').val();
      var datefee = $(this).closest('tr').find('.datefee').val();
      var datefees = parseInt(datefee) || 0;
      var keepcost = $(this).closest('tr').find('.keepcost').val();
      var keepcosts = parseInt(keepcost) || 0;
      var total = $(this).closest('tr').find('.total');

      if (ramid == '' || credit == '') {
        $(this).closest('tr').find('input').empty();
        total.val('');
      }

      if (ramid !== '' && credit !== '' && ramid < 6000000000 && ramid.indexOf(9, 2) == 2) //พรีดีกรีเก่ารหัส 59 ลงมา
      {
        cal = (credit * CreditPre) + CostOld + News + keepcosts + datefees;
        totals = cal.toLocaleString();
        total.val(totals);
      }
      if (ramid !== '' && credit !== '' && ramid >= 6000000000 && ramid.indexOf(9, 2) == 2) //พรีดีกรีใหม่รหัส 60 ขึ้นไป
      {
        cal = (credit * CreditPre) + CostNew + News + keepcosts + datefees;
        totals = cal.toLocaleString();
        total.val(totals);
      }
      if (ramid !== '' && credit !== '' && ramid < 5500000000 && ramid.indexOf(9, 2) !== 2) //นักศึกษาปกติรหัส 54 ลงมา
      {
        cal = (credit * CreditNor) + CostOld + News + keepcosts + datefees;
        totals = cal.toLocaleString();
        total.val(totals);
      }
      if (ramid !== '' && credit !== '' && ramid >= 5500000000 && ramid < 6000000000 && ramid.indexOf(9, 2) !== 2) // นักศึกษาปกติรหัส 55 ขึ้นไป
      {
        cal = (credit * CreditNor) + CostNew + News + keepcosts + datefees;
        totals = cal.toLocaleString();
        total.val(totals);
      }
      if (ramid !== '' && credit !== '' && ramid >= 6000000000 && ramid.indexOf(9, 2) !== 2) // นักศึกษาปกติรหัส 60 ขึ้นไป
      {
        cal = (credit * CreditNor) + CostNewer + News + keepcosts + datefees;
        totals = cal.toLocaleString();
        total.val(totals);
      }
    });
  });
}

function Date_Fee() {
  //ค่าปรับรายวัน
  $('input.credit').on('keyup blur change', function () {
    var select_date = $("select#regis_date option:selected").text();
    var regisdate = $(this).closest('tr').find('.regisdate').val();
    var ramid = $(this).closest('tr').find('.ramid').val();
    var datefee = $(this).closest('tr').find('.datefee');

    if (ramid !== '' && select_date !== regisdate && select_date !== 'สำหรับลงวันที่') {
      datefee.val('30');
    } else {
      datefee.val('');
    }
  });

  $('select#regis_date').on('change', function () {
    $('input.regisdate').each(function () {
      var select_date = $("select#regis_date option:selected").text();
      var datefee = $(this).closest('tr').find('.datefee');

      if ($(this).val() !== '' && $(this).val() !== select_date) {
        datefee.val('30');
      } else {
        datefee.val('');
      }

    });

  });
}

function Total() {
  // คำนวณผลรวมทั้งหมด
  $('table input, select#regis_date').on('keyup blur change', function () {
    var inputs = $('input[class=total]');
    var result = 0;
    inputs.each(function (i, value) {
      result += parseInt($(value).val().replace(',', '') || 0, 10);
    });
    var results = result.toLocaleString();
    $('.grandtotal').attr('value', results);
  });

}

function Show_Data() {
  // เรียกข้อมูลมาแสดง
  $('input[name*="ramid"]').on("change", function () {
    var currentIndex = $(this).closest("tr")[0].rowIndex;
    $.ajax({
      url: "show_data.php",
      type: "POST",
      cache: false,
      data: 'ram_id=' + $("#ramid" + currentIndex).val(),

      success: function (result) {
        var obj = jQuery.parseJSON(result);
        if (obj == '') {
          $("#cusname" + currentIndex).val('');
          $("#gen" + currentIndex).val('');
          $("#cusid" + currentIndex).val('');
        } else {
          $.each(obj, function (key, inval) {
            $("#cusname" + currentIndex).val(inval.name);
            $("#gen" + currentIndex).val(inval.gen);
            $("#cusid" + currentIndex).val(inval.prid);
          });
        }
      }
    });
  });
}

function Show_Fee() {
  // เรียกข้อมูลมาแสดง
  $('input[name*="ramid"]').on("change", function () {
    var currentIndex = $(this).closest("tr")[0].rowIndex;

    $.ajax({
      url: "show_feedata.php",
      type: "POST",
      cache: false,
      data: 'ram_id=' + $("#ramid" + currentIndex).val(),
      success: function (result) {
        var obj = jQuery.parseJSON(result);
        if (obj == '') {
          $("#keepcost" + currentIndex).val('');
        } else {
          $.each(obj, function (key, inval) {
            $("#keepcost" + currentIndex).val(inval.fee);
          });
        }
      }
    });
  });
}

function Check_Credit() {
  $('input.credit').on('change', function () {
    var credit = $(this).closest('tr').find('.credit').val();
    if (credit.length != 2) {
      swal({
        title: "โปรดตรวจสอบหน่วยกิต",
        text: "",
        icon: "warning",
        closeModal: false
      }).then(function () {
        swal.close();
        $('table').find('input.credit').each(function () {
          if ($(this).val().length != 2 && $(this).val().length != 0) {
            $(this).focus();
          }
        });
      });
    }
  });
}