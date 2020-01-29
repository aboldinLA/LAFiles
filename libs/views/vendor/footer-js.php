

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


<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2956957-1";
urchinTracker();
</script>
</div>
</body>
</html>
