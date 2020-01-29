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

    <script>
        function ValidateInput(ctrl) {
            if (event.keyCode == 8 ||event.keyCode == 46) {   //backspace pressed or delete key pressed
                //check whether the user is trying to delete the fixed text
                if (ctrl.selectionStart <= 6) return false;
            }

            return true;
        }
    </script>

<strong>Search By FASLA:</strong><br />
	<input type='hidden' name='searchBy' value='keywords' />
    Enter FASLA Member's first or last name with a quote at the end (example: David") <br />
	&nbsp;&nbsp;&nbsp;<strong>Find:</strong> 
    <input type='text' id="searchFor" name='searchFor' size='70' style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"  />
	&nbsp;&nbsp;<input type='submit' value='Search' style="height:22px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888" value='"FASLA' onkeydown="return ValidateInput(this);"/><br />
	<br /><br />


    




