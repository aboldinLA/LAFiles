<?

?>
<script src="/js/fontawesome-all.js" type="text/javascript"></script>

<style>
	
	.footer {
		background-color: #000000;
		color: #ffffff;
		padding-top: 25px;
	}
	
	.footer ul {
		padding-left: 0px;	
	}
	
	.footer li {
		font-family: Helvetica, Arial, sans-serif;
	}
	
	.footer a {
		color: white;
		text-decoration: none;
	}
	
	.footerAbout {
		width: 13%
	}
	
	.footerBadTree {
		width: 15%;
	}
	
	.footerLogo {
		width: 25%;
	}
	
	.footerLogo p {
		text-align: center;
	}
	
	.footerContact {
		width: 20%;
	}
	
	.footer .containerMain a:hover {
		color: #9d9d9d;
	}
	
	.footer .containerMain .footerQuickLinks {
		width: 13%;
	}
	
	
	.footer li, .footer p {
		font-size: 14px;
	
		line-height: 1.5;
	}
	
	.footerAbout .footer p {
		margin-bottom: 20px;
	}

	.footer .containerMain {
		display: flex;
		justify-content: space-between;
		width: 1375px;
		margin: 0 auto 30px;
	}
	
	.footerHeader {
		font-size: 24px;
		color: #fffff;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	
	.footerLogo img {
		width: 100%;
	}
	
	.footerSocial {
		display: flex;
		justify-content: space-around;
		margin-top: 15px;
		font-size: 46px;
	}
	
	.footerSocialItem {
		width: 40px;
		
	}
	
	.footerMenuItem {
		list-style-type: none;
		font-family: Helvetica, Arial, sans-serif;
	}
	
	.footerBottom {
		color: #ffffff;
		font-size: 10px;
		text-align: center;
		background-color: #398439;
		padding: 10px 50px 1px;
	}
	
	.footerBottom p {
		font-size: 10px;
	}
	
	.footerContactItem {
		list-style-type: none;
	}
	
	.footerContact p {
		margin-bottom: 0px;
	}
	
	 @media screen and (max-width: 1100px) {
		 .footerSocial {
			justify-content: space-between;
			font-size: 3em;
		 }
	}
	
	@media screen and (max-width: 971px) {
		.footer p {
			font-size: 12px;
		}
	}

</style>

<div class="footer">
	<div class="containerMain">
		<div class="footerLogo">
			<a href="https://landscapearchitect.com/research/shop-a.php"><img src="https://landscapearchitect.com/lol-logos/LAcom-WHITE.png"/></a>
			<div class="footerSocial">
				<div class="footerSocialItem"><a href="https://landscapearchitect.com/social/index.php#LO" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
				<div class="footerSocialItem"><a href="https://landscapearchitect.com/social/index.php#LO" target="_blank"><i class="fab fa-twitter-square"></i></a></div>
				<div class="footerSocialItem"><a href="https://landscapearchitect.com/social/index.php#LO" target="_blank"><i class="fab fa-linkedin"></i></a></div>
				<div class="footerSocialItem"><a href="https://landscapearchitect.com/social/index.php#LO" target="_blank"><i class="fab fa-instagram"></i></a></div>
			</div>
			<div><p>14771 Plaza Drive, Suite. A, <br>Tustin, CA 92780</p></div>

		</div>
		<div class="footerQuickLinks">
			<h3 class="footerHeader">Quick Links</h3>
			<ul class="footerMenu">
				<li class="footerMenuItem"><a href="https://www.landscapeonline.com">LandscapeOnline</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/research/shop-a.php">LA Details</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/research/shop-a.php">Tools &amp; Equipment</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/research/index-js2.php">Article Search</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/digital-mags/index.php">Digital Magazines</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/member/login3.php?t=s">User Profile Management</a></li>
				<li class="footerMenuItem"><a href="https://landscapearchitect.com/member/login2.php?t=v">Vendor Profile Management</a></li>
			</ul>
		</div>
		<div class="footerAbout">
			<h3 class="footerHeader">We Support</h3>
			<p>
LO financially supports many associations through either the payment of dues, conference exhibits and/or discounted advertising.</p>
			<div style="display: flex;">
				<div style="width:30%;"><a href="/lcc/lcc.html" target="_blank"><img src="https://landscapearchitect.com/imgz2/fish.jpg"></a></div>
				<div style="width: "><script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?style=normal"></script></div>
			</div>
			
		</div>
		<div class="footerBadTree">
		<center><a href="/bad-tree/index.php" target="_blank"><img src="https://landscapearchitect.com/imgz/bad-tree-banner-sm.gif" width="200" border="0" /></a><br><br>
					Last Updated 08-08-19<br>
					New Comic Every Monday &amp; Thursday.</center>
		</div>	
		<div class="footerContact">
			<h3 class="footerHeader">Contact Information</h3>
			<ul class="footerContactList">
				<li class="footerContactItem"><strong>Advertising (By Company Name)</strong></li>
				<li class="footerContactItem">A-L &nbsp;714-979-5276 x111</li>
				<li class="footerContactItem">M-Z &nbsp;714-979-5276 x114</li>
				<li class="footerContactItem"><a href="mailto:all.sales@landscapeonline.com">all.sales@landscapeonline.com</a></li>
				<br>
				<li class="footerContactItem"><strong>General</strong></li>
				<li class="footerContactItem">714-979-5276</li>
			</ul>

		</div>
	</div>

			<div class="footerBottom">
				<p style="margin-bottom: 11px;">
			<? date_default_timezone_set("America/Los_Angeles"); ?>
				<?= date("F j, Y, g:i a "); ?>PDT
				
				Website problems, <a href="https://landscapearchitect.com/bug/bug-report.php" target="_blank">report a bug</a>. At Landscape Communications, Inc. we are committed to protecting consumers from fraudulent or inappropriate offers - <a href="https://landscapearchitect.com/research/Ad-Transfer/transfer/Privacy-Policies/LCI-Privacy-Statement.pdf" target="_blank"><u>Privacy Policy</u></a><br /> 	
				Copyright &copy; 2019 Landscape Communications Inc.<br />
				</p>
				<? if ($_SESSION['uid']){ ;?><!-- <FONT size="-2"><a href="/kill.php">Sign Out</a></font> -->
				<img src="/imgz/spacer.gif" style="background-color:black;" width=10 height=10 onMouseOver="window.status='uid=<?=$_SESSION['uid']?>'; return true;" onMouseOut="window.status=''"><? } ?>
			</div>
	
	
</div>





</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="/js/bootstrap-lad.js"></script>
</body>
</html>
