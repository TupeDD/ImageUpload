<?php
/*

Dont Mind !!!!!. This was only giving u hope to do it yourself.......lazy F#&%.

$file_result = "";

if ($_FILES["file"]["error"] > 0)
{
  $file_result .= "No file or Invalid file ";
  $file_result .= "Error Code: " . $_FILES["file"]["error"] . "<br>";
} else {

  $file_result .=
  "Upload: " . $_FILES["file"]["name"] . "<br>" .
  "Type: " . $_FILES["file"]["type"] . "<br>" .
  "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>" .
  "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

  move_uploaded_file($_FILES["file"]["tmp_name"],
  "/full/path/on/server/" . $_FILES["file"]["name"]);

  $file_result .= "File Uploaded Successful!";
}
if(isset($_POST['upload'])) {
  $image_name = $_FILES["image"]["name"];
  $image_type = $_FILES["image"]["type"];
  $image_size = $_FILES["image"]["size"];
  $image_tmp_name = $_FILES["image"]["tmp_name"];

  if($image_name=='') {
    echo "<script>alert('Please Select an Image')</script>";
    exit();
  }
    else {
      move_uploaded_file($image_tmp_name, "Desktop/$image_name");
      echo "Image Uploaded Succesfully<br>";
      echo "<img src='photos/$image_name'>";
    }
}


?>
*/
