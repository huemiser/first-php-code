<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if ($_POST["name1"] == $_POST["name2"]) {
  echo "<h1>all good.</h1>";
}
else {
  header("Location: /phpinfo.php?warning=names+dont+match");
}
?>
<style>
h1 {
  font-family: monospace;
  font-size: 47px;
  text-align: center;
  color: #ff6300;
  padding-top: 170px;
}
body {
  background-color: rgb(9, 232, 199);
}
</style>
