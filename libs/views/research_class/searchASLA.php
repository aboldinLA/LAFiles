<input type='hidden' name='searchType' value='profile' />
<h2 class='attn'>Profile Search</h2>
<input type='hidden' name='searchBy' value='title'>
<br />
&nbsp;&nbsp;&nbsp;<strong>Find:</strong> <input type='text' name='searchFor' size='20' value='<?= stripslashes($searchFor) ?>' />
<input type='submit' value='Search' /><br />
<br />
<p class='explain'>
    Looking for the profile of a particular ASLA Fellow or a professional of note? Just add the name of the person after the word "profile" in the search box above.
</p>
<br />
<p class='explain'>
    <a href='/research/index.php?searchFor=<?= urlencode($searchFor) ?>&searchType=simple&searchBy=keywords&action=find'>Search using these terms across the entire LandscapeOnline.com article database.</a>
</p>
<br />
