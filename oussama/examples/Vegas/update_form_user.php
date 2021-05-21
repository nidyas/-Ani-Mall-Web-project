<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
} elseif($_SESSION['login']['access_level'] == 'Guest') {
  header("Location:index.php");
}
$connection = new dbController('localhost', 'root', '', 'centravel');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = '1';
}
$sql = "SELECT * FROM users WHERE id=1".$id;
$row = $connection->getOneRecord($sql);
if(!empty($row)) {
  $page_title = 'Update users of ' . $row['username'];
}
include('includes/head.php');
include('includes/nav.php');
?>

<main>
  <div class="container">
    <div class="box box-detail mt-s">
      <?php if(!empty($row)) { ?>
      <form action="update_form_user.php" method="get" class="txt-r mt-s">
        <div class="list-label">Choose another profile to update</div>
        <div class="selection">
          <select name="id" class="select-simple">
            <?php
            $sqlAll = "SELECT id, username FROM users";
            $records = $connection->getAllRecords($sqlAll);
            foreach($records as $record){
              echo "<option value='{$record['id']}'";
              if($id==$record['id']) { echo 'selected'; };
              echo ">{$record['username']}</option>";
            };
            ?>
          </select>
          <button type="submit" class="btn btn-simple">Go</button>
        </div>
      </form>

			<h2 class="mt-s txt-center">Update profile of <?php echo $row['username'] ?></h2>
      <form method="post" action="updt.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				<div class="mt-s">
					<label>username(This input cannot be modified)</label>
					<input type="text" name="username" value="<?php echo $row['username'] ?>" class="input-txt mt-xs txt-gray" readonly />
				</div>
				<div class="mt-s form-flex">
					<label>firstname</label>
					<input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" class="input-txt mt-xs" />
				</div>
				
				<div class="mt-s">
					<label>lastname</label>
					<textarea name="lastname" class="input-txtarea mt-xs"><?php echo $row['lastname'] ?></textarea>
				</div>
        <div class="mt-s">
					<label>password</label>
					<input type="text" name="password" value="<?php echo $row['password'] ?>" class="input-txt mt-xs" />
				</div>
				<div class="mt-s">
					<label>Phone  (Number Format Only)</label>
					<input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="input-txt mt-xs" />
				</div>
				<div class="mt-s">
          <label>Image File (200KB Maximum)</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
          <p class="my-xs txt-gray">Current File <?php echo $row['image'] ?></p>
					<input type="file" name="image" class="btn input-file mt-xs" />
				</div>
				<div class="mt-s txt-center">
            <button type="submit" name="submit" class="btn btn-simple">Update user</button>
				</div>
  		</form>
    <?php } else { ?>
        <div class="mt-s txt-center">
          There was a problem retrieving the user data.
        </div>
    <?php } ?>
    </div>
	</div>
</main>

<?php
include('includes/footer.php');
?>
