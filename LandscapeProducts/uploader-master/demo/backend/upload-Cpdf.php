<?php



include 'https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/backend/source.php';





$prodNum2 = $prodNum;

// $prodNum2 = $_POST['prodNum2'];

$prodNum3 = $_GET['prodNum'];

$venNum3 = $_GET['venNum'];


// $prodNum3 = "12345";

// Drag and Drop Upload Section Start


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

    $filepath = sprintf('../../../../LandscapeProducts/dfiles/%s-%s-%s', $venNum3, $prodNum3, $_FILES['file']['name']);

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

// Drag and Drop Upload Section End

// Write to vendor_product Start


        $pString = $filepath;
        $pString2 = substr($pString, 37);

           $filestring = substr($pString2, -3);

            if ($filestring != 'pdf') {

                echo 'Not a PDF File';

            } else {


                                        $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}


 


                // Attempt insert query execution
                $sql = "UPDATE vendor_product SET pdff='" . $pString2 . "' WHERE id='" . $prodNum3 . "'";

                if(mysqli_query($link, $sql)){
                    echo "<br><center><h3>Product has been updated.</h3><br></center>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);

            }

// Write to vendor_product End



// Email Notification Start

    $email='jshort@landscapeonline.com';
    $subject = 'Details Uploaded - CAD PDF ' . $venNum3 . '';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='jvictor@landscapeonline.com';
    $subject = 'Details Uploaded - CAD PDF ' . $venNum3 . '';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='slopez@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has uploaded a CAD PDF for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);

// Email Notification End

?>







