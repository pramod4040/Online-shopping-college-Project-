<?php

if(isset($_SESSION['error'])){
	?>
	<div class="alert alert-danger">
	<?php echo $_SESSION['error']; ?>
	</div>
	<?php
	unset($_SESSION['error']);
}

if(isset($_SESSION['success'])){
	?>

	<div class="alert alert-success">
	<?php 
	echo $_SESSION['success']; ?>
	</div>
	<?php
	unset($_SESSION['success']);
} 

if(isset($errors)){

	foreach($errors as $e)
	{  ?>
      <div class="alert alert-danger">
      <?php echo $e;?>
      </div>

      <?php
    }
}

?>




