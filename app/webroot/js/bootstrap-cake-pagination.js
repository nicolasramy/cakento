$(document).ready(function(){
    $('.pagination .active').html('<a href="#">' + $('.pagination .active').html() + '</a>');
    $('.pagination .prev.disabled').html('<a href="#">' + $('.pagination .prev.disabled').html() + '</a>');
    $('.pagination .next.disabled').html('<a href="#">' + $('.pagination .next.disabled').html() + '</a>');
});
