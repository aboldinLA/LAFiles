<?

// Top Section - HTML


$fileType = '4251-49871-test-CAD-PDF.png';


echo $fileType . '<br>';

$newstring = substr($fileType, -3);

echo $newstring . '<br>';


if ($newstring != 'pdf') {
    
    echo 'Not a PDF File';
    
} 



?>
	
	