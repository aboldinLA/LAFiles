<div id='pageBody'>
<br />           


<table width='100%' cellpadding='0' cellspacing='0'>
    <tr>
        <td colspan="2">
            <div style="text-align: left;">
                <? 
                    if($is_html == 0) { 
                        print(autoParagraph(cleanmeta($ed_text)));
                        //print(preg_replace("/\n/", "<p>" , $ed_text));
                    } else {
                        print(cleanmeta($ed_text));
                    }
                ?>
            </div>
        </td>
   </tr>

    
    <tr align='center'>
        <td colspan='2'>
        
			<p><font face="times" font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title='Add a Comment' href="/research/letter_sub.php?id=<?= $id ?>">Give us your feedback.</a>&nbsp;&nbsp;&nbsp;<a title='View Comments' href=		"/research/view_comments.php?art_id=<?= $id ?>">View comments.</a></font></p>
            
            <hr noshade />
            <div class='wrap1' style='width: 70%; margin-left: auto; margin-right: auto;'>
                <div class='wrap2'>
                    <div class='wrap3'>
                        
                                	<? 
			include "lol_common.inc";


			$secthdr = "Comments";

			$ai_id = $id;
			
			$week = 1;
			
			$space = " ";
			

			$sql    = 'SELECT * FROM research WHERE art_id = '.$ai_id.' AND active = '.$week.'';
			$result = mysql_query($sql);
			

				if (!$result) {
     				echo "Be the first to comment on this story";
				} 

			echo "<div id=\"table0\"><table width=\"675\">";
			echo "<tr><td colspan=\"3\" style=\"font-size:14px\"><strong>" . $secthdr . "</strong></td></tr>";
			echo "<tr><td colspan=\"3\" style=\"font-size:12px\"><strong>" . $space . "</strong></td></tr>";


			while ($row = mysql_fetch_assoc($result)) {
	
				echo "<tr><td valign=\"top\" width=\"100\" style=\"font-size:12px\"><strong>Name:</strong> ". $row['first_name']  . "&nbsp;" .  $row['last_name'] . "</td><td valign=\"top\" width=\"175\" style=\"font-size:12px\">Wrote in with <strong> ". $row['response'] . " comment</strong></td></tr>";

				echo "<tr><td colspan=\"4\" width=\"215\" style=\"font-size:12px\"><strong>Comment: </strong> ". $row['comment'] . "</td></tr>";
				echo "<tr><td colspan=\"4\" width=\"215\" style=\"font-size:12px\"><hr> </hr>" . "</td></tr>";



			}

		echo "</table></div>";

		mysql_free_result($result);
		
		?>
        
                        
                    </div>
                </div>
            </div>
        </td>
    <tr>
</table>
</div>
