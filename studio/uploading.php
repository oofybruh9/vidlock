<?php
include_once("./include/header.php");

$target_dir = "../videos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, video already exists. This might be my bad coding skills lol. Please submit a github issue over here.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 25000000) {
  echo "Sorry, you somehow managed to upload a file that isn't less than 25 megabytes (MB). How impressive.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "webm" && $imageFileType != "mov") {
  echo "Sorry, you somehow managed to upload a file that isn't a mp4, a webm, or a mov. If this file <i>IS</i> a valid video, please submit a GitHub Issue over here.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded, probably beacuse of my bad frontend coding lol.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Your video has been uploaded. It's video ID is this:". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). ".";
    echo "You will be redirected to the edit page for more customization.";
  } else {
    echo "look above.";
  }
}
?>
<!doctype html>
<body>
</body>
<?php
include_once("../assets/include/footer.php");
?>