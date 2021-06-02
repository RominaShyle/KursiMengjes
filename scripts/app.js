$(document).ready(function(){

$.get('view.php', function(data){


    // console.log(data);
    $('#table_content').html(data);




});






$('#link_add').hide();


$('#show_add').on('click', function(){
    $('#show_add').hide();

    $('#link_add').slideDown(500);
    $('#title').val('');
    $('#genre').val('');
    $('#plot').val('');



})







});