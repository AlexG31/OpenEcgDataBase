<!DOCTYPE html>
<html>
<head>
<link href="/css/w3.css" rel = "stylesheet">
</head>
<title>选择上传文件</title>
<body>

<div class="w3-container w3-border w3-border-green">
<form action="lab_upload_file/upload_handler" method="post" enctype="multipart/form-data">
    <h3>选择将要上传的文件，并点击Upload按钮</h3>
    <div class= "w3-container w3-leftbar w3-border-red w3-pale-blue">
    <p>文件名中只能包含英文字母、数字和下划线！</p>
    </div>

    <div class="w3-container w3-padding-16">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit" class="w3-btn-float w3-border w3-border-blue w3-white">
    </div>
</form>
</div>

</body>

</html>
