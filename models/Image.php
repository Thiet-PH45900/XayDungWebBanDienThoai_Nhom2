<?php

function uploadImage($file)
{
  $target_dir = PATH_UPLOADS;
  $target_file = $target_dir . basename($file['name']);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $newFileName = uniqid() . '.' . $imageFileType;
  $newTargetFile = $target_dir . $newFileName;

  $check = getimagesize($file['tmp_name']);
  if ($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

  if ($file['size'] > 500000) {
    $uploadOk = 0;
  }

  if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    return false;
  } else {
    move_uploaded_file($file['tmp_name'], $newTargetFile);
    return $newFileName;
  }
}
