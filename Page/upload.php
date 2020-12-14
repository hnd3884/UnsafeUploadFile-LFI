<html>

<head>
    <title>Upload</title>
</head>

<body>
    <h1>Upload image service</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        Document upload: <input type="file" name="fileToUpload" accept="image/*"><br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}