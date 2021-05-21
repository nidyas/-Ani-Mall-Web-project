<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
} elseif($_SESSION['login']['access_level'] == 'Guest') {
  header("Location:index.php");
}
$connection = new dbController('localhost','root','','centravel');
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $username = $connection->cleanUp($_POST['username']);
  $firstname = $connection->cleanUp($_POST['firstname']);
  $lastname = $connection->cleanUp($_POST['lastname']);
  $password = $connection->cleanUp($_POST['password']);
  $phone = (double)$connection->cleanUp($_POST['phone']);
  $image = 'images/' . $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];
  $page_title = 'Update Result of ' . $city;
}
include('includes/head.php');
include('includes/nav.php');

$result = false; // used to change css color
$result_msg = ''; // result message to show user
if(!isset($_POST['submit'])) { // check if form is submitted
  $result_msg = "Unauthorised access.";
} elseif(
  empty($username) ||
  empty($firstname) ||
  empty($lastname) ||
  empty($phone) ||
  !is_float($phone)
) {
  $result_msg = 'Please fill in all form fields with valid format.';
  if($error != 0 && $error != 20) { $result_msg .= '<br />' . $connection->checkImage($error)['msg']; }
} else {
  if($_FILES['image']['error'] == 4) { // check if the image is attached
    $sql = "UPDATE users SET
            username = '$username',
            firstname = '$firstname',
            lastname = '$lastname',
            phone = '$phone',
            WHERE id = '$id' LIMIT 1";
  } else {
    $sql = "UPDATE users SET
            username = '$username',
            firstname = '$firstname',
            lastname = '$lastname',
            phone = '$phone',
            WHERE id = '$id' LIMIT 1";
    $image_result = $connection->uploadImage($temp, $image); // store result array
  }
  $update_result = $connection->runQuery($sql); // store result array
  if($update_result['result']) { // check if the record inserted successfully
    $result_msg = 'user successfully updated.';
    if(isset($image_result['result'])) { // check if uploadImage method executed
      $result_msg .= '<br />' . $image_result['msg'];
    }
    $result = true;
  } else {
    $result_msg = 'user not updated.';
    $result_msg .= '<br />' . $update_result['msg'];
  }
}
?>

<main class="content-center">
  <div class="container">
    <div class="box box-detail">
      <div class="result-msg mt-m <?php if($result){ echo 'result-green'; } else { echo 'result-red'; } ?>">
        <p class="my-s <?php if($result){ echo 'txt-green'; } else { echo 'txt-red'; } ?>"><?php echo $result_msg; ?></p>
      </div>
    </div>
  </div>
</main>

<?php
include('includes/footer.php');
?>
