<input type='hidden' name='searchType' value='advanced' />
    
<div style='float: right; width: 275px;'>
<!-- <div class='wrap1' style='width: 275px; margin-bottom: 5px;'>
    <div class='wrap2'>
        <div class='wrap3'>
            <div class='infobox'>
                <div class='infotitle'>Search by Magazine</div>
                <div class='infocontents'>
                    <?= $this->searchSourceInputs($searchSource); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='wrap1' style='width: 275px;'>
    <div class='wrap2'>
        <div class='wrap3'>
            <div class='infobox'>
                <div class='infotitle'>Search by Date </div>
                <div class='infocontents'>
                    <?= $this->searchDateInputs($boolDate, 'search', $searchmonth, $searchyear); ?>
                </div>
            </div>
        </div>
    </div>
</div> -->
</div>
    <strong>Search By Author:</strong><br />
	<input type='hidden' name='searchBy' value='keywords'  />Enter Author <br />
&nbsp;&nbsp;&nbsp;<strong>Find:</strong> <input type='text' name='searchFor' size='70' value='<?= stripslashes($searchFor) ?>' style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Author" />
<input type='submit' value='Search' style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; z-index:5000; cursor:pointer" /><br />
<br /><br />


