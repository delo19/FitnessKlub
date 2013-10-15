/*
This file is for including  parts from template sources
*/
$(document).ready(function () {
    includeDataSources();
    includeParts();
});


/*
Here we have page parts include
*/
function includeParts() {


    jQuery.ajaxSetup({ async: false });
    $.get('template/header.html', '', function (data) { $(data).insertBefore("#pageContent"); });
    $.get('template/nav.html', '', function (data) { $(data).insertBefore("#pageContent"); });
    $.get('template/leftNav.html', '', function (data) {  $(data).insertBefore("#pageContent"); });
    $.get('template/rightNav.html', '', function (data) { $(data).insertAfter("#pageContent");});
    $.get('template/footer.html', '', function (data) { $('body').append(data); });

}



/*
Here we have css i js files include
*/

function includeDataSources(){
    $.get('template/head.html', '', function (data) { $('head').append(data); });
}