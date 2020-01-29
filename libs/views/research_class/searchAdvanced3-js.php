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
&nbsp;&nbsp;&nbsp;<strong>Find:</strong> <input type='text' name='searchFor' size='70' value='<?= stripslashes($searchFor) ?>' />
<input type='submit' value='Search' /><br />
<br /><br />


