

<div align="center">
<table>
<tr>
	<td align="center" colspan="5">	
	    <br />
	    <?= date("F j, Y, g:i a "); ?>EST
        <p>
            Website problems, <a href="mailto:webmaster@landscapeonline.com">report a bug</a>.<br />
            Copyright &copy; 2013 Landscape Communications Inc.<br />
		<a href="/research/Privacy-Policies/LCI-Privacy-Statement.pdf">Never Sold or Given to 3rd Party (See Privacy Policy)</a>
        </p>
        <br />
	    <? if ($_SESSION['uid']){ ;?><!-- <FONT size="-2"><a href="/kill.php">Sign Out</a></font> -->
	    <img src="/imgz/spacer.gif" width=10 height=10 onMouseOver="window.status='uid=<?=$_SESSION['uid']?>'; return true;" onMouseOut="window.status=''"><? } ?>
	</td>
</tr>	
</table>
			</td>
		</tr>
	</table>
</div>

<div>
<script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?style=normal"></script>
</div>


<!-- New Tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2956957-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Old Tracking -->
<!-- <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2956957-1";
urchinTracker();
</script> -->

</div>
</body>
</html>
