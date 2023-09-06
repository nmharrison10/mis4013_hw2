<?php
$pagetitle = "Post Results";
include "view-header.php";

?>

<h1>Post Results</h1>

<?php
if (isset($_GET["my_name"])) {
  ?>
  <p>The value sent is: <?php echo $_GET["my_name"]</p>
}
else {
  ?>
<p>Nothing sent to the page.</p>
    <?php
}

include "view-footer.php";
?>
