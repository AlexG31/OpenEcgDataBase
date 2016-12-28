<?php
$target_dir = __DIR__ . "/../../../uploads/";
$uploaded_base_name = basename($_FILES["fileToUpload"]["name"]);

# Format upload basename
if (strlen($uploaded_base_name) == 0 || strcmp(substr($uploaded_base_name,0,1), ".") == 0) {
    $timestamp = strtotime("now");
    echo "<h3> Timestamp:$timestamp</h3>";
    $uploaded_base_name = $timestamp . $uploaded_base_name;
}

$target_file = $target_dir . $uploaded_base_name;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = True;
    echo "<p>";
    if($check !== false) {
        echo "File is an legal file - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an legal file.";
        $uploadOk = 0;
    }
    echo "</p>";
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<p>Sorry, file already exists.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is > 50MB.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    echo "Warning: Not an image extension:$imageFileType";
    $uploadOk = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
