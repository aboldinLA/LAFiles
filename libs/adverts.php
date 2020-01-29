<?
$bannerCounter= 1; 

$bannerCode[$bannerCounter] = "put your ad code here";
$bannerCounter++;

$bannerAdTotals = $bannerCounter - 1;
if($bannerAdTotals>1)
{
   mt_srand((double)microtime() * 1234567);
   $bannerPicked = mt_rand(1, $bannerAdTotals);
}
else
{
   $bannerPicked = 1;
}
$bannerAd = $bannerCode[$bannerPicked]; 



?>
	
