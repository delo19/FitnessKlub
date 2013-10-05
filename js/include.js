/*
This file is for including  parts from template sources
*/


$(document).ready(function () {


    jQuery.ajaxSetup({ async: false });
    $.get('template/header.html', '', function (data) { $("#page").append(data); });
    $.get('template/nav.html', '', function (data) { $("#page").append(data); });
    $.get('template/leftNav.html', '', function (data) { $("#pageContent").append(data); });
    $.get('template/rightNav.html', '', function (data) { $("#pageContent").append(data); });
    $.get('template/footer.html', '', function (data) { $("#page").append(data); });
    reorderElements();

});

function reorderElements(){
        //$('#rightNav').insertBefore('#footer');
        $('#nav').insertBefore('#pageContent');

        $('#leftNav').insertBefore('#content');
        //$('#nav').insertBefore('#leftNav');
        $('#header').insertBefore('#nav');
}
