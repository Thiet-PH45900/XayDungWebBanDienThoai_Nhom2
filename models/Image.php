<?php

function uploadImage($file)
{
  $targetDir = PATH_UPLOADS;
  $targetFile = basename($file['name']);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $newFileName = uniqid() . '.' . $imageFileType;
  $newTargetFile = $targetDir . $newFileName;
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

  if (!in_array($imageFileType, $allowTypes)) {
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    return false;
  } else {
    move_uploaded_file($file['tmp_name'], $newTargetFile);
    return $newFileName;
  }
}
