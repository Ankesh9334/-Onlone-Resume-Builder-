<?php

function handleProfileImage($file)
{
    if (!$file || $file['error'] !== 0) {
        return "";  // no image
    }

    $upload_dir = __DIR__ . "/uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Check valid image
    $check = @getimagesize($file['tmp_name']);
    if ($check === false) {
        return ""; // invalid image
    }

    // Convert always to JPG
    $newname = "profile_" . time() . ".jpg";
    $target_file = $upload_dir . $newname;

    // Load image safely
    $img_data = file_get_contents($file['tmp_name']);
    $src = @imagecreatefromstring($img_data);

    if (!$src) {
        return ""; // GD extension off or invalid binary
    }

    // Save as JPEG
    imagejpeg($src, $target_file, 90);
    imagedestroy($src);

    return "uploads/" . $newname;   // Return relative path for FPDF
}
