<!DOCTYPE html>
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
    <li><a class ="active">Form</a>
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
    <li><a>Database</a>
      <ul class="submenu">
        <li><a href="..\pages\reserved.html">(reserved)</a></li>
      </ul> 
    </li>
    <li><a href="..\pages\phpinfo.html">PHPinfo</a></li>
  </ul>
</nav>




<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2><?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?></h2>
</div>

</body>
</html>
