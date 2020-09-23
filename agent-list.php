<?php 
session_start();
require("session.php");
if (admin::isloggedA()){
}
else{
    header('location:admin-login.php');
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/agent-list.css">
	<link rel="stylesheet" href="css/font.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Admin</title>
   <body>
  <?php  require_once('navbar.php')?>

<div class="content">
<div class="card">

</div>

<button id="myBtn" class="btn"><i class="fa fa-plus"></i> Ajouter un Agent</button>
  <?php
  include "cnx.php";
   $query ="SELECT * from agent";
   $query_run =mysqli_query($con,$query);
	 ?>
  <div class="card">
	<div class="wrap-table100">
		<div class="table100">
			<table>
				<thead>
					<tr class="table100-head">
						<th class="column1">Nom</th>
						<th class="column2">Service</th>
						<th class="column3">Email</th>
						<th class="column5">Mot de passe</th>
						<th class="column6">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php
		     if (mysqli_num_rows($query_run)>0) {
			 while ($row = mysqli_fetch_assoc($query_run)) {
				$id = $row['id'];

		        ?>
						<tr>
							<td class="column1"><?php echo $row['nom_a'];  ?></td>
							<td class="column2"><?php echo $row['srv'];  ?></td>
							<td class="column3"><?php echo $row['email'];  ?></td>
							<td class="column5"><?php echo $row['pass'];  ?></td>
							<td class="column6">
							<a href="modif-agent.php?modif=$row['id']"><i class="fas fa-edit"></i></a>
							<a onclick="delet()"><i class="fas fa-trash"></i></a>
						</td>
						</tr>
						<?php 
						  }
						 }
					 else {echo "aucun enregistrement";}
						 ?>
				</tbody>
			</table>
		</div>
	</div>
<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
	<span class="close">&times;</span>
	<h2>Ajouter un Agent</h2>
  </div>
  <div class="modal-body">
        </div>
        <form id="validateForm" action="agent.php"  method="post"class="frm" >
            <div class="frm-control">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nomag"  id="nom" required/>
			</div>
			<div class="frm-control">
                <label for="nom">Service </label>
                <input type="text" name="service"  id="nom" required/>
               
			</div>
			<div class="frm-control">
                <label for="nom">Email</label>
                <input type="email" name="mail"  id="nom" required/>
               
            </div>
            <div class="frm-control">
                <label for="tel">Mot de passe</label>
                <input type="text" name="pass" id="tel" required/>
              
            </div>
           <div class="foot">
            <button type="submit" name="ajout">Ajouter</button>           
            <button type="reset" class="bt-rs">Annuler</button>
			</div>
        </form>
  </div>
  
</div>

</div>

</div>


<script>

function delet(){
            swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (!willDelete) {
    swal("Your imaginary file is safe!");
  } else {
	  <?php
		 echo 'window.location = "supp-agent.php?supp=$id" '?>
      ;

  }
});
}
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>

</body>
</html>
 
