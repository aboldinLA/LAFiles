
<?

include("lo_top-main2.inc");
session_start();
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	<?
	include $include_path . "lo_header-main2.inc";
	?>
	</div>

	<!-- Start Content Section -->




<? 
$db_username = 'landscap_lol';
$db_password = 'meow2meow';
$db_name = 'landscap_lollive';
$db_host = 'localhost';
$item_per_page = 15;

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');

//Limit our results within a specified range. 
$results = mysqli_query($connecDB,"select * from editorial WHERE subject = '1' ORDER by id DESC");

echo "<div style='position:absolute; left:25px'>";
echo "<ul>";
while($row = mysqli_fetch_array($results))
{

?>

		<li><a href="https://landscapearchitect.com/research/article.php/<? echo $row["id"] ?>" target="_blank"><?php echo $row["title"] ?></a></li>

<?
}

?>

	</ul>
    </div>
    
    
    	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:0px; top:60px">
    	<?
		include $include_path . "banner-ads2.inc";
		?>
	</div>        
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>