<?php
if (isset($_POST["submit"])) {

    $file = $_FILES['fileToUpload'];
    $filename = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fname = '';

    $tmp = explode('.', $filename);
    $file_ext = strtolower(end($tmp));

    $target_dir = "assets/img/blog/cards/";

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions)) {
        if ($fileError === 0) {
            if ($fileSize <= 500000) {
                $fname = str_replace(' ', '', trim(ucwords($_POST['title']))) . "." . $file_ext;
                $target_file = $target_dir . $fname;

                // Check if file already exists
                if (file_exists($target_file)) {
                    $fname = str_replace(' ', '', trim($_POST['title'])) . uniqid() . "." . $file_ext;
                    $target_file = $target_dir . $fname;
                }

                if (move_uploaded_file($fileTmpName, $target_file)) {
                    echo "The file " . htmlspecialchars($fname) . " has been uploaded.";
                } else {
                    $errors['fname'] = "Sorry, there was an error uploading your file.";
                }
            } else {
                $errors['fname'] = "Sorry, your file is too large.";
            }
        } else {
            $errors['fname'] = "An error occured while uploading a file.";
        }
    } else {
        $errors['fname'] = "Extension not allowed, please choose a JPEG or PNG file.";
    }
}
