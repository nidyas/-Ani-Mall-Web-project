<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
} elseif($_SESSION['login']['access_level'] == 'Guest') {
  header("Location:index.php");
}
$page_title = 'Add Delivery-man';
include('includes/head.php');
include('includes/nav.php');
?>
<main>
  <div class="container">
    <div class="box box-detail mt-s">
			<h2 class="txt-center">Add Delivery</h2>

      <form method="post" action="insertdel.php" enctype="multipart/form-data">
				<div class="mt-s form-flex">
					<label>ID</label>
					<input type="text" name="id" class="input-txt mt-xs" />
				</div>
				<div class="mt-s">
					<label>Name</label>
					<input type="text" name="name" class="input-txt mt-xs" />
				</div>
				
				<div class="mt-s">
					<label>Mobile</label>
					<input type="text" name="firstname" class="input-txt mt-xs" />
				</div>
				 
        <div class="mt-s">
					<label>City</label>
					<input type="text" name="city" class="input-txt mt-xs" />
				</div>
						
				<div class="mt-s txt-center">
            <button type="submit" name="submit1" class="btn btn-simple">Add Delivery-man</button>
				</div>
  		</form>

    </div>
	</div>
</main>
<?php
include('includes/footer.php');
?>
