<?php

if (isset($_FILES['img'])) {
    $image = $_FILES['img'];
    $imageName = $image['name'];
    $imageTempName = $image['tmp_name'];

    $uploadDirectory = "./";
    $newImgName = basename($imageName);

    if (move_uploaded_file($imageTempName, $uploadDirectory . $newImgName)) {
        $imagepath = $newImgName;
        echo "Image uploaded successfully";
    } else {
        echo "Not uploaded";
    }
}
