<?

include "lol_common.inc";

include $include_path . "class/vendor_class.inc";

include $include_path . "class/media_class.inc";

$V = new vendor_class($db);

$M = new media_class($db);



if($REQUEST_METHOD=="POST")	{  

	$error = "";



	if(!is_array($xlist))	$error .= "- Must enter at least one category<br>";

	if(!strlen($error)){

		if(is_array($xlist)) $find=implode(",",$xlist);



        $V->input_values($id,$idParent,$find);

		$V->vendor_mail($id) ;



        /*

        if (isset($_REQUEST['vhot']) && $_REQUEST['vhot'] == 1) {

            $V->vendor_list($id,'go');

        } else {

            $V->vendor_list($id,0);

        }

        */



        //header("location:vendor_listing.php");



		if ($vst == 1 || $vst == 2)	{

            if(isset($_SESSION['vhot']) && $_SESSION['vhot'] == 1) {

                $V->vendor_list($id, 'go');

            } else {

                $V->vendor_list($id,'yes');

            }

			header("location: thank_you_vendor.php?action=$action"); 	

		}  else {

            if(isset($_SESSION['vhot']) && $_SESSION['vhot'] == 1) {

                $V->vendor_list($id,'go');

                // they want a hot link, take 'em through billing

                header("location:${lol_url_s}/bin/linkpoint/payment.php?pt=ven&id=${uid}");

            } else {

                $V->vendor_list($id,'yes');

                header("location: thank_you_vendor.php?action=$action"); 	

            }

		}

	}

}



include $include_path . "lol_header.inc";



if ($action == "edit") {

	$data = $V->vendor($uid);

	$xlist = explode(",",$data['xlist']);

}

include $include_path . "vendor_edit_categories.inc";

 include $include_path . "lol_footer.inc"; ?>

	

