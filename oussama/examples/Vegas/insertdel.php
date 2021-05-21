<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
}
$connection = new dbController(HOST, USER, PASS, DB);
if(isset($_POST['submit1'])) {
  // cleanUp method not used
  // avoid dboule-escaping
  $id = trim(htmlentities($_POST['id']));
  $name = trim(htmlentities($_POST['name']));
  $firstname = trim(htmlentities($_POST['firstname']));
  $city = trim(htmlentities($_POST['city']));
 // $page_title = 'Add Result of ' . $city;
}
include('includes/head.php');
include('includes/nav.php');

$result = false; // used to change css color
$result_msg = ''; // result message to show user
if(!isset($_POST['submit1'])) { // check if form is submitted
  $result_msg = "Unauthorised access.";
} elseif(
  empty($id) ||
  empty($name) ||
  empty($firstname) ||
  empty($city) 

) {
  $result_msg = 'Please fill in all form fields with valid format.';

} else {
  $sql = "INSERT INTO livreur(id, name, firstname, city) VALUES (?,?,?,?)";
  if($connection->prepareQuery($sql, $id, $name, $firstname, $city)) {
    $result_msg = 'New deliverer successfully added.';
	

    $result = true;
  } else {
    $result_msg = 'New deliverer not added.';

  }
}
?>

<main class="content-center">
  <div class="container">
    <div class="box">
      <div class="result-msg mt-m <?php if($result){ echo 'result-green'; } else { echo 'result-red'; } ?>">
        <p class="my-s <?php if($result){ echo 'txt-green'; } else { echo 'txt-red'; } ?>"><?php echo $result_msg; ?>
      </div>
    </div>
  </div>
</main>

<?php
include('includes/footer.php');
?>
