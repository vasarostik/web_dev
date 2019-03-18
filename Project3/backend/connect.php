<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="..\css\style.css">
<style>
h2{
  color:#000;
  font-family: 'Open Sans', sans-serif;
  font-weight: bold;
}
</style>
</head>
<body>

<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="..\index.html">Home</a></li>
    <li><a>Form</a>
       <ul class="submenu">
        <li><a href="..\pages\get.html">GET</a></li>
        <li><a href="..\pages\post.html">POST</a></li>
        <li><a href="..\pages\file-upload.html">File Upload</a></li>
      </ul>
    </li> 
    <li><a>Cookies</a>
<ul class="submenu">
        <li><a href="..\pages\enabled-disabled.html">Enabled/Disabled</a></li>
        <li><a href="..\pages\create-retrieve.html">Create/Retrieve</a></li>
        <li><a href="..\pages\modify-delete.html">Modify/Delete</a></li>
      </ul>
    </li>
    <li><a>Sessions</a>
      <ul class="submenu">
        <li><a href="..\pages\start.html">Start</a></li>
        <li><a href="..\pages\get-modify.html">Get/Modify</a></li>
        <li><a href="..\pages\destroy.html">Destroy</a></li>
      </ul>
    </li>
    <li><a>Date/Time</a>
      <ul class="submenu">
        <li><a href="..\pages\today-is.html">Today is</a></li>
        <li><a href="..\pages\timezone.html">Timezone</a></li>
        <li><a href="..\pages\timestamp.html">Timestamp</a></li>
      </ul> 
    </li>
    <li><a class ="active" href="..\pages\reserved.html">Database</a></li>
    <li><a href="..\pages\phpinfo.html">PHPinfo</a></li>
  </ul>
</nav>


<div style="margin-left:18%;padding:1px 16px;height:60px;">
  <nav class="bar"><a href="..\pages\connect.html">Connect</a>
  <a href="..\pages\create_database.html">Create DataBase</a>
  <a href="..\pages\create_table.html">Create Table</a>
  <a href="..\pages\create_data.html">Create Data</a>
  <a href="..\pages\read_data.html">Read Data</a>
  <a href="..\pages\update_data.html">Update Data</a>
  <a href="..\pages\delete_data.html">Delete Data</a></nav>
</div>

<div style="margin-left:25%;padding:1px 16px;">
<h2> <?php
$servername = $_POST["DB"]; // localhost by default
$username = $_POST["DBuser"];
$password = $_POST["DBpass"];
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) { // Check connection
  die("Connection failed: " . mysqli_connect_error());
 }
echo "Connected successfully";

// Set session variables
  $_SESSION["servername"] = $servername;
  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;
  $conn->close();
?></h2></div>


</body>
</html>