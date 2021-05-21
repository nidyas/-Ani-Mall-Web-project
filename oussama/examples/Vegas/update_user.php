<?php
session_start();
require_once('initialize.php');
if(!isset($_SESSION['login'])) { // check if user logged in
  header("Location:login_form.php");
} elseif($_SESSION['login']['access_level'] == 'Guest') {
  header("Location:index.php");
}
$page_title = 'Update devilery-man';
include('includes/head.php');
include('includes/nav.php');

$connection = new dbController('localhost', 'root', '', 'centravel');
$sql = "SELECT id, name ,firstname,city FROM livreur ";
$records = $connection->getAllRecords($sql);
?>

<main>
  <div class="container">
    <div class="box">
      <h2 class="my-s txt-center">Update Delivery man</h2>
      <?php
      if(!empty($records)) {
      ?><table>
          <thead>
            <tr class="table-head">
              <th class='id'>Id</th>
			  
              <th>name</th>
              <th>Mobile</th>
			        <th>city</th>
              <th class='update'>Update</th>
              <th class='delete'>Delete</th>
            </tr>
          </thead>
          <tbody><tr>
            <td class='id'><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['city']; ?></td>
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

