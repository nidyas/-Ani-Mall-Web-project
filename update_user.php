<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
} elseif($_SESSION['login']['access_level'] == 'Guest') {
  header("Location:index.php");
}
$page_title = 'Update users';
include('includes/head.php');
include('includes/nav.php');

$connection = new dbController('localhost', 'root', '', 'centravel');
$sql = "SELECT id,username ,lastname, firstname,phone,image FROM users where access_level='Guest'";
$records = $connection->getAllRecords($sql);
?>

<main>
  <div class="container">
    <div class="box">
      <h2 class="my-s txt-center">Update users</h2>
      <?php
      if(!empty($records)) {
      ?><table>
          <thead>
            <tr class="table-head">
              <th class='id'>Id</th>
			  <th>Image</th>
              <th>username</th>
              <th>firstname</th>
			  <th>lastname</th>
			  <th>phone</th>
              <th class='update'>Update</th>
              <th class='delete'>Delete</th>
            </tr>
          </thead>
          <tbody><tr>
            <td class='id'><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['lastname']; ?></td>
			<td><?php echo $row['phone']; ?></td>
            <td class='table-img'><img src='<?php echo $row['image']; ?>'  class='img-s'></td>
            <td class='update'><a href='update_form_user.php?id=<?php echo $row['id']; ?>' class='detail-link'>Update</a></td>
            <td class='delete'><a href='delete_form_user.php?id=<?php echo $row['id']; ?>' class='detail-link'>Delete</a></td>
            </tr>
        </tbody>
      </table><?php
      } else {
      ?>
      <p class="txt-center mt-m">
        No user found.
      </p>
      <?php
      }
      ?>
    </div>
  </div>
</main>

<?php
include('includes/footer.php');
?>

