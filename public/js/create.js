$(document).ready(function(){
    $('select').formSelect();
});


$('#next').on('click', function(){
    $('main').stop(true).animate({'width': 'toggle'});
});
