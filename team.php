<?php
require_once ("database.php");
require_once ("head.php");

$sql = "SELECT id, firstname, lastname, email from users";
$result = $conn->query($sql);


//kontrolloj nese tabela eshte bosh

// if($result->num_rows > 0){

// //outputi per secilin nga rreshtat
// while($row = $result->fetch_assoc()){

//     echo "id: " . $row['id']. " - First name: " . $row['firstname']. 
//     " - Last name: " . $row['lastname']. "<br>";
// }

// }

// else echo "Oops, we found no results!";


?>


<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">E-mail</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>

<?php  

if($result->num_rows > 0){

    //outputi per secilin nga rreshtat
    while($row = $result->fetch_assoc()){
  
        echo' <tr> 
        <th scope="row">'. $row['id'].'</th>
        <td>'. $row['firstname'].'</td>
        <td>'. $row['lastname'].'</td>
        <td>'. $row['email'].'</td>
        <td>
        <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'. $row['id'].'">Edit </button></td>
        </tr>';
    }
    
    }

    else 
echo' <tr> 
<th scope="row">3</th>
<td>werwer</td>
<td>werwer</td>
<td>@werwer</td>
</tr>';
?>

</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3"></div>
</div>
