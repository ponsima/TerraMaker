$(function() {
    var h = $(window).height();
    $('#loading__wrapper').css('display','none');
    $('#is-loading ,#loading').height(h).css('display','block');
});

$(window).load(function () {
    $('#is-loading').delay(900).fadeOut(800);
    $('#loading').delay(600).fadeOut(300);
    $('#loading__wrapper').css('display', 'block');
});


$(function(){
    setTimeout('stopload()',10000);
});

function stopload(){
    $('#loading__wrapper').css('display','block');
    $('#is-loading').delay(900).fadeOut(800);
    $('#loading').delay(600).fadeOut(300);
}
