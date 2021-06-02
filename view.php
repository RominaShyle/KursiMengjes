<?php 

require_once ('database.php');
$result = $conn->query('SELECT * FROM movies ORDER BY id');

?>

<table class="table table-bordered">

<tr class="info">
<th>ID</th>
<th>Title</th>
<th>Genre</th>
<th>Year</th>
<th>Actions</th>

</tr>
<?php 

if($result->num_rows > 0 ){

while($row = $result->fetch_assoc()){

echo '
<tr>
<td>'.$row["id"] .'</td>
<td>'.$row["title"] .'</td>
<td>'.$row["genre"] .'</td>
<td>'.$row["year"] .'</td>
<td>
<button class="btn btn-outline-info btn-sm edit" id="edit" data-id="'.$row["id"] .'"><i class="fa fa-edit" ></i>
</button>
<button class="btn btn-outline-danger btn-sm delete"  data-id="'.$row["id"] .'"><i class="fa fa-close"></i></button>

</td>

</tr>

';


}
}

?>

</table>


<script type="text/javascript">

$('.edit').click(function(){


    var id = $(this).attr('data-id');
    $('#show_add').hide(500);
    // $('#link_add').show();


    $.ajax({

        url:"edit.php",
        type:"POST",
        data: {id:id},
        success: function(response){
     $('#link_add').html(response);
     $('#link_add').show();

        }



    })

})








</script>