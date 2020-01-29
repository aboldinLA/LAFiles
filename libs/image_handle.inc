<?



// returns array of files for given directory;

function directorylist($dir_name = ".")

{

	/* Create a handle, the result of opening the given directory */ 

	$file_list = array();

	$dir = opendir($dir_name); 

	

	while ($file_name = readdir($dir))

	{ 

		if (($file_name != ".") && ($file_name != ".."))

			$file_list[] = $file_name; 

	} 

	closedir($dir); 



	if(count($file_list))

		return $file_list;

	else

		return false;

}









/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Description: Input of GIF or JPEG files and output of specified type.

// External Dependency! - Image Magic

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function create_thumbnail( $in_file, $out_path, $width, $height )

{

	// LOCATION OF THE IMAGEMAGICK CONVERT UTILITY

	$imagemagick = "/usr/local/X11R6/bin/convert";



	$type = substr( $in_file, -3 );



	$out_file = $in_file;

		

	while($str_find = strstr( $out_file, "/" ) )

		$out_file = substr( $str_find, 1 );

	

	exec( $imagemagick . " -geometry " . $width . "x" . $height . " -dither " . $in_file . " " . $out_path . $out_file );

	//echo  $imagemagick . " -geometry " . $width . "x" . $height . " -dither " . $in_file . " " . $out_path . $out_file ."<br>";

}



////////////////////////////////////////////////////////////////////////////////////////



function handleImageFiles($dir) {

    // we only handle one image



    if(count($_FILES) > 1) {

        return(FALSE);

    }



    foreach($_FILES as $file) {

        if(substr_count($file['type'], 'image') || substr_count($file['type'], 'flash')) {

            if(move_uploaded_file($file['tmp_name'], $dir . $file['name'])) {

                return($file['name']);

            } else {

                return(FALSE);

            }

        }

    }

}



function upload_image_file($input_file, $input_file_name, $type, $size, $max_size, $dest_dir)

{

	echo "<!-- $dirToStore$input_file_name -->";

	// check the mime type

	if (substr_count($type,"image"))

	{

        // THIS WON'T WORK -- no dirToStore

		//if one is already there create a new name

		if(file_exists($dirToStore.$input_file_name))

		{

			$i=0;

			$newfile_name=sprintf("%s%s",$i,$input_file_name);

			while(file_exists($dirToStore.$newfile_name))

			{

				$i++;

				$newfile_name=sprintf("%s%s",$i,$input_file_name);

			}

			  



			$input_file_name = $newfile_name;



		} //end copy if



		if(!copy($input_file,$dest_dir.$input_file_name))

			return false;

		else	

			return $input_file_name;

	

	}	// end the if image mime type

	else

		return false;

}



/** 



 * Copies and give it an incremented name - returns the new name 



 * @param     string 



 * @param     string 



 * @access    public 



 * @return    string 



 */ 



function copy_rename($in_file, $dir) { 

            if(file_exists($dir.$in_file)) { 

                        $i=0; 

                        $newfile_name=sprintf("%s%s",$i,$in_file); 

                        while(file_exists($dir.$newfile_name)) { 

                                    $i++; 

                                    $newfile_name=sprintf("%s%s",$i,$in_file); 

                        } 



                        if(copy($dir.$in_file,$dir.$newfile_name)) 

                                    return $newfile_name; 

                        else 

                                    return ""; 

            } //end copy if 

} // end func 





?>

