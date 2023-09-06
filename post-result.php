<?php
$pagetitle = "Post Results";
include "view-header.php";

?>

<h1>Post Results</h1>

<?php
echo getDisplay;
include "view-footer.php";

  function getDisplay() {
    if (isset($_POST["my_name"])) {
  return "The value sent is:" : $_POST["my_name"];
  }
else {
  return "Nothing posted to this page.";
}
  }
  
?>
