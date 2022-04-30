<?php 
    $errorMSG = "<div class='modal' tabindex='-1' role='dialog'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title'>Error</h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
				<p>Shop Could Not be found , please consider creating an account first.</p>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-primary'>Save changes</button>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
		</div>
	</div>
</div>";

function checkLoginDetails(){
    $conn = mysqli_connect("localhost","root","","izaapa");
    $email = $_POST['email'];
    $shop_name = $_POST['shop_name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `$shop_name`";
    if(mysqli_query($conn, $sql)){
        echo "";
    } else { 
        echo $errorMSG
        . mysqli_error($conn, $sql); 
    }
}
?>