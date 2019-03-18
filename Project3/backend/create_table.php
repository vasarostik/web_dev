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
        $databaseName = $_POST["Name"];
        $TableName = $_POST["TableName"];
        if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"]) && !isset($_SESSION["password"])&& (!isset($_SESSION["dbName"])&&($databaseName != $_POST["Name"]))){
          echo "Session is not set or there is no such database";
        }else {
          $servername = $_SESSION["servername"]; // localhost:3308
          $username = $_SESSION["username"]; // root
          $password = $_SESSION["password"];  // ""
        }
        // Create connection
        $conn = new mysqli($servername, $username, $password, $databaseName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // sql to create table
        $sql = "CREATE TABLE $TableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table $TableName created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        $_SESSION["TableName"] = $TableName;
        $_SESSION["dbName"] = $databaseName;
        $conn->close();
        ?></h2></div>


</body>
</html>