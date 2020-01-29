
</td>
</tr>
<tr> 
	<TD ALIGN="CENTER" colspan="2"><? 
	$p=strtotime("now");
	echo date("F j, Y, g:i a ",$p) ?></TD> 
	</TR> <tr>
	<td align="center" colspan="2">
	Website problems, <A HREF="mailto:webmaster@landscapeonline.com">report a bug</A>.<BR>
	Copyright &copy; 2015 Landscape Communications Inc.
	<br>
	<? if ($_SESSION['uid']){ ;?><FONT size="-2"><a href="/kill.php">Sign Out</a></font><img src="/imgz/spacer.gif" width=10 height=10 onMouseOver="window.status='uid=<?=$_SESSION['uid']?>'; return
true;" onMouseOut="window.status=''"><? } ?>
	</td>
</tr>
<!--<?= $uid?> <font size="-2">(User id test)--> 

</table>
</body>
</html>
