<?

include_once $include_path . "class/common_class.inc";

class proof_Class extends Common_Class

{

var $current;

var $company_name;

var $website;

var $represent;

var $date;





// constructor

function proof_class(&$db)

{	

	$this->db = &$db;

}



//proof help    

//************************************************************************************

  function proof_input($proof_id,$name,$email,$stamp,$approve,$purchase)

{  

     

	    $query= "SELECT count(*)  AS total FROM media_ad_rep WHERE proof_id  = $proof_id ";

		$result = $this->db->query($query);

		$data= $this->db->fetch_array($result);

		$total = $data['total']+1;

       

	  

	  $stamp = date("F j, Y ");

	 $query = "INSERT INTO media_ad_rep (proof_id, name, email, stamp, note, total, purchase) VALUES ('$proof_id','$name', '$email','$stamp', '$approve', '$total' ,'$purchase')";

		

		               $this->db->query($query);

					    return  $this->db->insert_id();



  

}//end	  

//************************************************************************************

  function find_proof($proof)

{

     		   echo "<table>";

			   echo "<tr>";

			   echo "<td colspan=2>This Proof is dated :</td>";

			   echo "</tr>";

     $query =" SELECT * FROM media_ad_rep WHERE proof_id = $proof ORDER BY total";

	 $res =$this->db->query($query);

	  while($row=$this->db->fetch_array($res))

      		{   $Th = $row['total'];

		  	    if ($Th > 3)

				   {  echo "<tr>";

					   echo "<td colspan=2><b>Additional charges will	accrue at a rate of $75.00 per hour, beginning with Proof #4</b></td>";

					    echo "</tr>";

				   }

			   

			   echo "<tr>";

			   echo "<td align=right><b>Proof #".($row['total'])."</b></td>";

               echo "<td>".$row['stamp']."</td>";

			   echo "</tr>";

			    

			  

            }

	          echo "</table>";

}//end



//************************************************************************************

  function  info_proofs($proof)

{

     		 

     $query =" SELECT * FROM media_ad WHERE id = $proof";

	 $res =$this->db->query($query);

	 $data = $this->db->fetch_array($res);

		 return  $data;

      		

}//end

//************************************************************************************

  function note($note_id)

{

     $query =" SELECT * FROM media_ad_rep WHERE id = $note_id ";

	 $res = $this->db->query($query);

	 $data = $this->db->fetch_array($res);

	return $data['note'];

       



}//end

//************************************************************************************

function change_mind($note_id)

{

     $query ="delete FROM media_ad_rep WHERE id = $note_id";

	 $res = $this->db->query($query);

	

	

}//end

//************************************************************************************

function mail_info($proof)

	{

         $query = "SELECT * FROM media_ad_rep WHERE proof_id = $proof ";

		

		           $res =$this->db->query($query);

				   $data = $this->db->fetch_array($res);

		         

				   $proof= $data['proof_id'];

				   $name = $data['name'];

				   $email = $data['email'];

				   $stamp = $data['stamp']; 

				   $note = $data['note'];

				   $purchase  = $data['purchase'];

				   //adaprroval@landscapeonline.com

				   $mail_to= "addapproval@landscapeonline.com";   

                   

									$to = $mail_to;

									$from =  "Landscaponline.com";

									$subject = "Ad Proof Form";



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $body ="  and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/



									

									$body = "Proof #:". $proof."\n"."name :".$name. "\n"."With e-mail :" .$email."\n"."on this date : ".$stamp ." \n"."notes : ".$note."\n"."Purchase :".$purchase;

		

					$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

	}//end mail send

//************************************************************************************

function login_proof($name,$password)

	{

	    $query ="SELECT * FROM media_ad WHERE login = '$name' AND pass = '$password' ";

    	$result = $this->db->query($query);

       	$row = $this->db->fetch_array($result);

		

		if (is_array($row))

			{

			return "yes";

		    }

          else

		    return $error.= "- No Way";

   

   

   }//end

//************************************************************************************

function proofn($name,$password)

{

        $query ="SELECT * FROM media_ad WHERE login = '$name' AND pass = '$password' ";

    	$result = $this->db->query($query);

		     	$row = $this->db->fetch_array($result);

				return $row['media_id'];



}

//************************************************************************************

function buyit($note_id)

{

	           $query ="SELECT * FROM media_ad_rep WHERE id = $note_id ";

            	$result = $this->db->query($query);

			   	$row = $this->db->fetch_array($result);

				return $row['purchase'];

}

//************************************************************************************

function ads($id)

{

	            $query ="SELECT * FROM media_cost WHERE ad = 1";

            	$result = $this->db->query($query);

				



					echo "<TABLE align=center width=60%>";

					echo "<TR>";

					echo "<TD ><b>Display Ads</b></TD>";

					//echo "<TD>Cost ($)</TD>";

					echo "</TR>";

					echo "<TR>";

					echo "<TD colspan=2></TD>";

                    echo "</TR>";

					while($row=$this->db->fetch_array($result))

					{

					echo "<TR>";

					echo "<TD  VALIGN=top>&nbsp;&nbsp;<INPUT TYPE=radio  NAME= ads value=".$row['id'].">".$row['ads']."</TD>";

					//echo "<TD NAME= cost[] value=".$row['cost']." >".$row['cost']."</TD>"; 

					echo "</TR>";

					}

					echo "<TR>";

					echo "<TD colspan=2></TD>";

                    echo "</TR>";

					echo "<TR>";

					echo "<TD colspan=2><b>Marketplace Ads</b></TD>";

                    echo "</TR>";

					echo "<TR>";

					echo "<TD colspan=2></TD>";

                    echo "</TR>";

					

					$query ="SELECT * FROM media_cost WHERE ad = 2";

								$result = $this->db->query($query);

					while($row=$this->db->fetch_array($result))

					{

					echo "<TR>";

					echo "<TD ALIGN=LEFT  VALIGN=top>&nbsp;&nbsp;<INPUT TYPE=radio NAME= ads value=".$row['id'].">".$row['ads']."</TD>";

					//echo "<TD  NAME= cost[] value=".$row['cost']." >".$row['cost']."</TD>"; 

					echo "</TR>";

					}

					

					echo "</TABLE>";

   

                

}//end fuction

//************************************************************************************

function media_info($media_id)

{

			$query ="SELECT * FROM media_ad WHERE id  = $media_id ";

			$result = $this->db->query($query);

			$data = $this->db->fetch_array($result);

			return $data;



}//end

//************************************************************************************

function media_info_buy($media_id)

{

			$query ="SELECT * FROM media_buy WHERE id  = $media_id ";

			$result = $this->db->query($query);

			$data = $this->db->fetch_array($result);

			 

			 return $data;



}//end



//************************************************************************************

function media_info_cost($media_id)

{

			$query ="SELECT * FROM media_buy WHERE id  = $media_id ";

			$result = $this->db->query($query);

			$data = $this->db->fetch_array($result);

			

			$ids = $data['ads'];

		  		   

		   $res = $this->media_cost($ids);

					  

			return $res;



}//end



//************************************************************************************

function info_buy($media_id)

{

			$query ="SELECT ads FROM media_buy WHERE id = $media_id ";

			$result = $this->db->query($query);

            $row = $this->db->fetch_array($result);

           

			$ad = $row['ads'];

              $ad = explode(",", $ad);

			 for($i=0;$i<count($ad);$i++)

			  $condition[] =" id = ".$ad[$i];





               $query ="SELECT * FROM media_cost WHERE ".implode(" OR",$condition);

			   $result = $this->db->query($query);

                      

						  echo "<table>";

               while($row=$this->db->fetch_array($result))

					{   

			             echo "<tr>";

                    	 echo "<td nowrwp align=left>".$row['ads']."</td>";

						 echo "<td align=right>&nbsp; $".$row['cost']."</td>";

						 echo "</tr>";

				    }

						echo "<tr>";

						echo "<td align=right>&nbsp; <b>Total</b></td>";

						   $query ="SELECT sum(cost) AS total FROM media_cost WHERE ".implode(" OR",$condition);

			               $result = $this->db->query($query);

                      	   while($row=$this->db->fetch_array($result))

                       

						

						echo "<td align=right ><input type=hidden name=amount  value=".$row['total'].">&nbsp; $".$row['total']."</td>";

						 echo "<tr>";

 

                         echo "</table>";

                       

}//end



//************************************************************************************

function media_buy($proof_id, $comp_name ,$first_name ,$last_name ,$address ,$address_2 ,$city ,$state ,$zip ,$country ,$area_code, $phone ,$fax ,$email, $ads)

{

   

	

	$query = "INSERT INTO media_buy(proof_id, comp_name, first_name, last_name, address, address_2, city, state, zip, country, area_code, phone, fax, email, ads ) VALUES ('$proof_id', '$comp_name', '$first_name', '$last_name', '$address', '$address_2', '$city' , '$state', '$zip', '$country','$area_code', '$phone', '$fax', '$email', '$ads')";

	  $this->db->query($query);

	  



	 

  return  $this->db->insert_id();

}//end

//************************************************************************************

function  trans_input($ecom_trans_id,$uid)

{          

	              $query = "UPDATE media_buy SET trans_id  = '$ecom_trans_id' WHERE id = $uid";

				  $result = $this->db->query($query);

		 



}//end

 //************************************************************************************

  function  info_proof($proof)

{

     		 

     $query =" SELECT * FROM media_ad_rep WHERE proof_id = $proof";

	 $res =$this->db->query($query);

     

	 if ($res == false)

	{

        echo "<table width=100% align=center cellpadding=20>";

		echo "<tr>";

		echo "<td align=center><h2><b>Invaled proof #</b></h2></td>";			   

	    echo "</tr>";

		echo "</table>";

	}else{





	 $data = $this->db->fetch_array($res);









	 $query =" SELECT * FROM media_ad  WHERE proof_id = $proof";

	 $res =$this->db->query($query);

	 $datas = $this->db->fetch_array($res);



		



				echo "<TABLE ALIGN=center BORDER=1 CELLPADDING=7  rules=none border=1 bordercolor=#3399ff width=60% bgcolor=#ffffff >";

				echo "<TR>";

				echo "<TD align=center  COLSPAN=2><B>Ad Proof </B></td></tr>";

				echo "<TR>"; 

				echo "<TD VALIGN=TOP ALIGN=CENTER COLSPAN=2><IMG SRC=../../ad_proof/proof/".$datas['logo']." ALIGN=BOTTOM WIDTH=200 HEIGHT=140 BORDER=0><BR></TD>";

				echo "</TR>";

				echo "<TR>";

				echo "<TD VALIGN=TOP COLSPAN=2 >".$data['note']."</TD>";

				echo "</TR>";

				echo "<TR>";

				echo "<TD ALIGN=CENTER COLSPAN=2>The ad was Last sent to:</TD></TR>"; 

				echo "<TR><TD align=right><B>Name</B>:</TD>";

				

				echo"<TD>".$datas['name']."</TD>"; 

				echo"</TR><TR>";

				echo "<TD align=right><B>Email</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$datas['email']."</TD> ";

				echo"</TR><TR>";

				echo "<TD align=right><B>Date</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".date("F j, Y ",$datas['stamp'])."</TD> ";

				echo"</TR>";

				echo"<TR>";

				echo "<TD align=right><B>Notes</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$datas['note']."</TD> ";

				echo"</TR>";

				echo"<TR>";

				echo "<TD align=right><B>Times Changed</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$datas['total']."</TD> ";

				echo"</TR>";

				echo "<TR>";

				echo "<TD ALIGN=CENTER COLSPAN=2>The ad was reviewed/approved by:</TD></TR>"; 

				echo "<TR><TD align=right><B>Name</B>:</TD>";

				

				echo"<TD>".$data['name']."</TD>"; 

				echo"</TR><TR>";

				echo "<TD align=right><B>Email</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$data['email']."</TD> ";

				echo"</TR><TR>";

				echo "<TD align=right><B>Date</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$data['stamp']."</TD> ";

				echo"</TR>";

				echo"<TR>";

				echo "<TD align=right><B>Notes</B>:</TD>";

				echo "<TD VALIGN=BOTTOM>".$data['note']."</TD> ";

				echo"</TR>";

				echo "</TABLE>";

	}

      		

}//end



//************************************************************************************

function review($id)

{



$query = "SELECT * FROM media_ad "; 

  $result = $this->db->query($query);



?>

   <FORM METHOD="post" ACTION="<?echo $PHP_SELF ?>"  > 

  <TABLE ALIGN="center" BORDER="1" CELLPADDING="7" rules="none" BORDERCOLOR="#70a183" width="80%" bgcolor="#ffffff" > 

  <?



		     

  while($row = $this->db->fetch_array($result)) 

	{      

	echo "<tr>";

	echo "<td>Proof ID : ".$row['proof_id']."</td>";

	echo "<td>Name : ".$row['name']."</td>";

	echo "<td>Email  : ".$row['email']."</td>";

	echo "<td align=\"center\"><a href=\"javascript:conf_redir('review_action.php?proof=".$row['proof_id']."','Are you sure you would like to delete Proof ID : ".$row['proof_id']."')\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>"; 

    echo "<td><a href=review_ad.php?action=edit&proof=".$row['id']."><IMG SRC=\"/imgz/view.gif\" border=0 alt=view></a></td>";

   echo "</tr>"; 

	}

		  

		   echo "</table></form>";

			

	

}//end 



//************************************************************************************

function delete_proof($proof)

{

     $query =" DELETE FROM media_ad_rep WHERE proof_id = $proof";

	 $this->db->query($query);

	 

	 $query =" DELETE FROM media_ad  WHERE proof_id = $proof";

	 $this->db->query($query);

	 

}//end	



//****************************************************************************

function media_cost($id)

{



   $query = "SELECT * FROM media_cost WHERE id = $id "; 

   $result = $this->db->query($query);

  

   $data = $this->db->fetch_array($result);

   return $data;





}// end function

//*****************************************************************************

function delete_file($logo)

{

   

    

       delete("landscapeonline/web/ad_proof/proof ".$logo);



}//end function



}

