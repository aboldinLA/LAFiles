<?

//path to directory to scan
$directory = "dfiles/";
 
//get all image files with a .jpg extension.
$images = glob($directory . "*.*");
 
//print each file name
foreach($images as $image)
{
echo $image . "<br>";
}
			


?>