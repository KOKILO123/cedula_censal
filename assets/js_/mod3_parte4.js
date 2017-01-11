$(function () {
    //TRIGGERS

    $('#frm_P312_1').trigger('change');
    $('#frm_P312_2').trigger('change');
    $('#frm_P312_3').trigger('change');
    $('#frm_P312_4').trigger('change');
    $('#frm_P312_5').trigger('change');
    $('#frm_P312_6').trigger('change');
    $('#frm_P313_5').trigger('change');

    flujo300_frm_P313_5();
})

$('#frm_P312_1').change(function () {
    var divs = 'div_P312A_1,div_P312B_1';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_2').change(function () {
    var divs = 'div_P312A_2,div_P312B_2';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_3').change(function () {
    var divs = 'div_P312A_3,div_P312B_3';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_4').change(function () {
    var divs = 'div_P312A_4,div_P312B_4';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_5').change(function () {
    var divs = 'div_P312A_5,div_P312B_5';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_6').change(function () {
    var divs = 'div_P312A_6,div_P312B_6';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
})
$('#frm_P312_6').change(function () {
    $(this).val() == 1 ? fn_showDiv('div_P312_6ESP') : fn_hideDiv('div_P312_6ESP');
});

$('#frm_P313_5').change(function () {
    $(this).val() == 1 ? fn_showDiv('div_P313_5ESP') : fn_hideDiv('div_P313_5ESP')
})


function flujo300_frm_P313_5() {
    var divs = 'div_P314,div_P314_ESP';
    var p1 = parseInt($('#frm_P313_1').val()) || 0;
    var p2 = parseInt($('#frm_P313_2').val()) || 0;
    var p3 = parseInt($('#frm_P313_3').val()) || 0;
    var p4 = parseInt($('#frm_P313_4').val()) || 0;
    var p5 = parseInt($('#frm_P313_5').val()) || 0;

    var suma = (p1 + p2 + p3 + p4 + p5);
    var division = suma / 5;
    division != 2 ? fn_hideDiv(divs) : fn_showDiv(divs);
}


