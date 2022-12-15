<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<style>

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed; //positioned relative to the viewport, which means it always stays in the same place even if the page is scrolled
  z-index: 0; //overlaping-higher index on top
  top: 0;
  left: 0;
  background-color: #FFFFFF;
  padding-top: 60px; //xoros apo pano
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none; //u,b,-
  font-size: 25px;
  color: #818181;
  display: block; // ana block 
}

.sidenav a:hover {
  color: #5da6f0;
}
.sidenav b{
  padding: 8px 8px 8px 32px;
  text-decoration: none; //u,b,-
  font-size: 25px;
  color: #000000;
  display: block; // ana block 
}



</style>
</head>
<body>
<?php

$username = $_SESSION['session_username'];

if(!($_SESSION['loggedIn'])){
      header('Location: login_form.php');  
}
date_default_timezone_set('Europe/Athens');
$today = date("m.d.y");

?>
<div id="mySidenav" class="sidenav">
  <a href="u_index.php"><img src="logo.png"style="width:70px; height:120px;"></a>
  <b>Καλωσόρισες,<?php echo $username;?>.</b>
  <a href="profile.php">Προφίλ</a>
  <a href="upload.php">Upload</a>
  <a href="heatmap.php">Heatmap</a>
  <a href="settings.php">Ρυθμίσεις</a>
  <a href="logoff.php">Αποσύνδεση</a>
</div>

</body>
</html> 