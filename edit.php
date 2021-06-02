<?php  


require_once('database.php');

if(isset($_POST['id'])){

    if(empty($_POST['id'])){


        echo '<div class="text-center"> No records found </div>';
    }else {



        $id = $_POST['id'];



        $sql = 'SELECT * FROM movies WHERE id = ' . $id;

        $result = $conn->query($sql);


        while($row = $result->fetch_assoc()){
?> 
<div class="form-inline" id="edit_data">

<div class="form-group col-md-3">
    <input type="text" name="title" value="<?= $row['title']?>" id="title" placeholder="Title" class="form-control" required>

</div>


<div class="form-group col-md-3">
    <input type="text" name="genre" value="<?= $row['genre']?>" id="genre" placeholder="Genre" class="form-control" required>

</div>
<div class="form-group col-md-3">
    <input type="text" name="year" value="<?= $row['year']?>" id="year" placeholder="Year" class="form-control" required>

</div>

<div class="form-group col-md-3">
    <button type="button" name="update" class=" update btn btn-outline-success mx-3 px-4" id="add_new"> Update</button>
    <button type="button" name="update" class="btn btn-outline-danger" href="javascript:void(0);" id="cancel" onclick="$('#link_add').slideUp(500); $('#show_add').show(500);"> Cancel</button>
</div>

</div>


<?php
            
        }
    }
}
 ?>