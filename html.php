<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
    {
        $name = $_FILES["filename"]["name"];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
        echo "file upload";
    }
    ?>
    <h2>File uploading...</h2>
    <form method="post" enctype="multipart/form-data">
        Choose file: <input type="file" name="filename" size="10" /><br /><br />
        <input type="submit" value="download">
    </form>

</body>
</html>