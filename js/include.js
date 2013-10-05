/*
This file is for including  parts from template sources
*/


$(document).ready(function () {


    jQuery.ajaxSetup({ async: false }); 
    $.get('template/nav.html', '', function (data) { $('body').append(data); });
    $.get('template/rightNav.html', '', function (data) { $('body').append(data); });
    $.get('template/leftNav.html', '', function (data) { $('body').append(data); });
    $.get('template/header.html', '', function (data) { $('body').append(data); });
    $.get('template/footer.html', '', function (data) { $('body').append(data); });



});

