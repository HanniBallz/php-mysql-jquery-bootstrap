(function setItem() {
    $('input.showDate').on('change', function () {
        localStorage.setItem("key1", $('input#date1').val());
        localStorage.setItem("key2", $('input#date2').val());
        localStorage.setItem("key3", $('input#date3').val());
        localStorage.setItem("key4", $('input#date4').val());
    });
    $('input.showCode').on('change', function () {
        localStorage.setItem("lawFirst-day1", $('#lawFirst-day1').val());
        localStorage.setItem("lawFirst-day2", $('#lawFirst-day2').val());
        localStorage.setItem("lawFirst-day3", $('#lawFirst-day3').val());
        localStorage.setItem("lawFirst-day4", $('#lawFirst-day4').val());
        localStorage.setItem("lawLast-day1", $('#lawLast-day1').val());
        localStorage.setItem("lawLast-day2", $('#lawLast-day2').val());
        localStorage.setItem("lawLast-day3", $('#lawLast-day3').val());
        localStorage.setItem("lawLast-day4", $('#lawLast-day4').val());

        localStorage.setItem("eduFirst-day1", $('#eduFirst-day1').val());
        localStorage.setItem("eduFirst-day2", $('#eduFirst-day2').val());
        localStorage.setItem("eduFirst-day3", $('#eduFirst-day3').val());
        localStorage.setItem("eduFirst-day4", $('#eduFirst-day4').val());
        localStorage.setItem("eduFirst-day4", $('#eduFirst-day4').val());
        localStorage.setItem("eduLast-day1", $('#eduLast-day1').val());
        localStorage.setItem("eduLast-day2", $('#eduLast-day2').val());
        localStorage.setItem("eduLast-day3", $('#eduLast-day3').val());
        localStorage.setItem("eduLast-day4", $('#eduLast-day4').val());

        localStorage.setItem("polFirst-day1", $('#polFirst-day1').val());
        localStorage.setItem("polFirst-day2", $('#polFirst-day2').val());
        localStorage.setItem("polFirst-day3", $('#polFirst-day3').val());
        localStorage.setItem("polFirst-day4", $('#polFirst-day4').val());
        localStorage.setItem("polLast-day1", $('#polLast-day1').val());
        localStorage.setItem("polLast-day2", $('#polLast-day2').val());
        localStorage.setItem("polLast-day3", $('#polLast-day3').val());
        localStorage.setItem("polLast-day4", $('#polLast-day4').val());

        localStorage.setItem("preFirst-day1", $('#preFirst-day1').val());
        localStorage.setItem("preFirst-day2", $('#preFirst-day2').val());
        localStorage.setItem("preFirst-day3", $('#preFirst-day3').val());
        localStorage.setItem("preFirst-day4", $('#preFirst-day4').val());
        localStorage.setItem("preLast-day1", $('#preLast-day1').val());
        localStorage.setItem("preLast-day2", $('#preLast-day2').val());
        localStorage.setItem("preLast-day3", $('#preLast-day3').val());
        localStorage.setItem("preLast-day4", $('#preLast-day4').val());

    });
})();

(function getItem() {
    if(localStorage !== undefined){
        $('input#date1').val(localStorage.getItem("key1"));
        $('input#date2').val(localStorage.getItem("key2"));
        $('input#date3').val(localStorage.getItem("key3"));
        $('input#date4').val(localStorage.getItem("key4"));

        $('#lawFirst-day1').val(localStorage.getItem("lawFirst-day1"));
        $('#lawFirst-day2').val(localStorage.getItem("lawFirst-day2"));
        $('#lawFirst-day3').val(localStorage.getItem("lawFirst-day3"));
        $('#lawFirst-day4').val(localStorage.getItem("lawFirst-day4"));
        $('#lawLast-day1').val(localStorage.getItem("lawLast-day1"));
        $('#lawLast-day2').val(localStorage.getItem("lawLast-day2"));
        $('#lawLast-day3').val(localStorage.getItem("lawLast-day3"));
        $('#lawLast-day4').val(localStorage.getItem("lawLast-day4"));

        $('#eduFirst-day1').val(localStorage.getItem("eduFirst-day1"));
        $('#eduFirst-day2').val(localStorage.getItem("eduFirst-day2"));
        $('#eduFirst-day3').val(localStorage.getItem("eduFirst-day3"));
        $('#eduFirst-day4').val(localStorage.getItem("eduFirst-day4"));
        $('#eduLast-day1').val(localStorage.getItem("eduLast-day1"));
        $('#eduLast-day2').val(localStorage.getItem("eduLast-day2"));
        $('#eduLast-day3').val(localStorage.getItem("eduLast-day3"));
        $('#eduLast-day4').val(localStorage.getItem("eduLast-day4"));

        $('#polFirst-day1').val(localStorage.getItem("polFirst-day1"));
        $('#polFirst-day2').val(localStorage.getItem("polFirst-day2"));
        $('#polFirst-day3').val(localStorage.getItem("polFirst-day3"));
        $('#polFirst-day4').val(localStorage.getItem("polFirst-day4"));
        $('#polLast-day1').val(localStorage.getItem("polLast-day1"));
        $('#polLast-day2').val(localStorage.getItem("polLast-day2"));
        $('#polLast-day3').val(localStorage.getItem("polLast-day3"));
        $('#polLast-day4').val(localStorage.getItem("polLast-day4"));

        $('#preFirst-day1').val(localStorage.getItem("preFirst-day1"));
        $('#preFirst-day2').val(localStorage.getItem("preFirst-day2"));
        $('#preFirst-day3').val(localStorage.getItem("preFirst-day3"));
        $('#preFirst-day4').val(localStorage.getItem("preFirst-day4"));
        $('#preLast-day1').val(localStorage.getItem("preLast-day1"));
        $('#preLast-day2').val(localStorage.getItem("preLast-day2"));
        $('#preLast-day3').val(localStorage.getItem("preLast-day3"));
        $('#preLast-day4').val(localStorage.getItem("preLast-day4"));
    }
})();

(function button() {
    $('#save').on('click', function () {
        swal({
            title: "เรียบร้อย!",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว",
            icon: "success",
            button: "ตกลง",
        }).then((value) => {
            location.reload()
        });
    });

    $('#clear').on('click', function () {
        swal({
                title: "ลบข้อมูลทั้งหมดหรือไม่ ?",
                text: "ข้อมูลทั้งหมดจะถูกลบและไม่สามารถกู้คืนได้!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    localStorage.clear();
                    swal("ข้อมูลทั้งหมดถูกลบเรียบร้อยแล้ว!", {
                        icon: "success",
                    }).then((value) => {
                        location.reload()
                    });
                } else {

                }
            });;
    });
})();