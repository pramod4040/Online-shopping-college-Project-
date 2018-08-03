<?php

if(isset($_SESSION['order_success'])){
	?>
	<div class="alert alert-success">
		<?php echo $_SESSION['order_success']; 

		unset($_SESSION['order_success']);

		unset($_SESSION['cart']);

		?>
	</div>
 <?php }


if(isset($_SESSION['order_error'])){ ?>

  <div class="alert alert-danger">
  	<?php echo $_SESSION['order_error'];

  	unset($_SESSION['order_error']);

	unset($_SESSION['cart']);
  	 ?>

  	</div>

<?php  }

if(isset($_SESSION['success'])){ ?>

   <div class="alert alert-success">

   	<?php echo $_SESSION['success'];

   	unset($_SESSION['success']);
   	 ?>

   	</div>
 <?php }

if(isset($_SESSION['error'])){ ?>

   <div class="alert alert-danger">
   	
   	<?php echo $_SESSION['error'];
   	unset($_SESSION['error']);
   	 ?>

   	</div>
 <?php } ?>