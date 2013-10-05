/*
This file is for including  parts from template sources
*/


$(document).ready(function () {


    jQuery.ajaxSetup({ async: false });
    $.get('template/header.html', '', function (data) { $(data).insertBefore("#pageContent"); });
    $.get('template/nav.html', '', function (data) { $(data).insertBefore("#pageContent"); });
    $.get('template/leftNav.html', '', function (data) {  $(data).insertBefore("#content"); });
    $.get('template/rightNav.html', '', function (data) { $(data).insertAfter("#content");});
    $.get('template/footer.html', '', function (data) { $("#page").append(data); });
    //reorderElements();

});

