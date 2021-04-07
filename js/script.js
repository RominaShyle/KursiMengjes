$(document).ready(function(){

$.ajax({
    url:"http://api.tvmaze.com/schedule?country=US",
    type:"GET",
    success: function(data){

        console.log(data)
    }
})






})