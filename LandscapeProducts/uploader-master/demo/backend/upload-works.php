<?php

/*
  This is a ***DEMO*** , the backend / PHP provided is very basic. You can use it as a starting point maybe, but ***do not use this on production***. It doesn't preform any server-side validation, checks, authentication, etc.

  For more read the README.md file on this folder.

  Based on the examples provided on:
  - http://php.net/manual/en/features.file-upload.php
*/

include 'https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/backend/source.php';





$prodNum2 = $prodNum;

// $prodNum2 = $_POST['prodNum2'];

$prodNum3 = $_GET['prodNum'];

$venNum3 = $_GET['venNum'];


// $prodNum3 = "12345";



header('Content-type:application/json;charset=utf-8');

try {
    if (
        !isset($_FILES['file']['error']) ||
        is_array($_FILES['file']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    switch ($_FILES['file']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    $filepath = sprintf('files/%s_%s-%s_%s', uniqid(), $venNum3, $prodNum3, $_FILES['file']['name']);

    if (!move_uploaded_file(
        $_FILES['file']['tmp_name'],
        $filepath
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    // All good, send the response
    echo json_encode([
        'status' => 'ok',
        'path' => $filepath
    ]);

} catch (RuntimeException $e) {
	// Something went wrong, send the err message as JSON
	http_response_code(400);

	echo json_encode([
		'status' => 'error',
		'message' => $e->getMessage()
	]);
}


// Email Notification Start

    $email='jshort@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='jvictor@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='slopez@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);

// Email Notification End










