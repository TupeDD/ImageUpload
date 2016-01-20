<!DOCTYPE html>
<html>

<head>
  <style>
  img {
    border: 2px solid black;
    border-radius: 3000px;
    margin: auto;
    padding: 5px;
  }
  p {
    color: green;
  }
  </style>
</head>

<body bgcolor="black">



<form action="index.php" method="POST" enctype="multipart/form-data">

    Choose txt file to upload:
    <input type="file" name="image">
    <input type="submit" name="upload" value="Upload Image">

</form>



</body>

</html>

<?php
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
      move_uploaded_file($image_tmp_name, "uploads/$image_name");
      echo "<br><p>Image Uploaded Succesfully<p><br>";
      echo "<img src='uploads/$image_name'>";
    }
}
?>
