<?php
$pageTitle = "Post Results";
include "view-header.php";
?>
<h1>Post Results</h1>
<?php
if (isset($_POST['my_name'])) {
  ?>
  <p>The value sent is: </p>
<?php
$_POST['my_name'];
} else {
  ?>
  <p>Nothing posted to this page.</p>
<?php
}
include "view-footer.php";
?>
