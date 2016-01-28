<head>
  <meta charset="utf-8">
  <style>
  h1 {
    font-family: monospace;
    font-size: 38px;
    text-align: center;
    color: #ff6300;
    padding-top: 170px;
  }
  body {
    background-color: rgb(9, 232, 199);
  }
  #name1, #name2 {
    margin-left: 527px;
    width: 206px;
    height: 27px;
  }
  #name1 {
    margin-top: 100px;
  }
  p {
    color: rgb(129, 32, 32);
    font-family: monospace;
    font-size: 26px;
    font-weight: bold;
  }
  </style>
</head>
<form action="action.php" method="post">
  <input type="text" placeholder="ur name" name="name1" id="name1">
  <input type="text" placeholder="ur name again" name="name2" id="name2"><br><br><br>
  <center>
  <input type="submit" id="submit">
</form>
<p id="warning"></p>
<script>
var _warning = window.location.href.substr(37);
var warning = '';
_warning == "" ? warning = '' : warning =  "⚠️ " + _warning + " ⚠️"; 
document.getElementById("warning").innerHTML = warning.replace(/\+/g, " ");
</script>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
</center>
<!--<h1>⚠️ php practice underway ⚠️</h1>-->
