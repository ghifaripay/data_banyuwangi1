$(function () {
    'use strict'
    $('[data-toggle="tooltip"]').tooltip()
});

function ajax_modal(urls){
    $('#ajax-modal').modal();
    load(urls, '#modal_content');
}

function ajax_delete(urls){
    $('#ajax-delete').modal();
    load(urls, '#modal_content');
}

function switch_menu(obj) {
    $(obj).toggleClass("active");
    $(obj).siblings().removeClass("active");
}

function load(page,div){
   var image_load = "<div align='center'><i class='fa fa-refresh fa-spin'></i></div>";
    $.ajax({
        url: site+page,
        beforeSend: function(){
            $(div).html(image_load);
        },

        success: function(response){
            $(div).html(response);
        },

        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        },
        dataType:"html"
    });
    return false;
}


function ajax_modal(urls){
    $('#ajax-modal').modal('show');
    load(urls, '#modal_content');
}


$('.scrollTop').click(function() {
    $("html, body").animate({scrollTop: 0});
});

function ajax_modal_flagging(urls){
    $('#ajax-modal-flagging').modal('show');
    load(urls, '#modal_content_flagging');
}


$('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function(e) {
    e.stopPropagation();
});

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });    
}

function multiCheck(tb_var) {
    tb_var.on("change", ".chk-parent", function() {
        var e=$(this).closest("table").find("td:first-child .child-chk"), a=$(this).is(":checked");
        $(e).each(function() {
            a?($(this).prop("checked", !0), $(this).closest("tr").addClass("active")): ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
        })
    }),
    tb_var.on("change", "tbody tr .new-control", function() {
        $(this).parents("tr").toggleClass("active")
    })
}

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });    
}

$('.bs-tooltip').tooltip();

$('.bs-popover').popover();

$('.t-dot').tooltip({
    template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
})

function GetIEVersion() {
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0) 
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)) 
    return 11;

  else
    return 0; //It is not IE
}