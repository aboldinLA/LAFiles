<style type="text/css">
<!--

    div.searchHeader {
        margin-bottom: 5px;
        color: #cc3300;
        font-size: 120%;
        font-weight: bold;
        text-decoration: underline;
    }

    div.boxFloatRight {
        border: 2px solid green;
        float: right;
        padding: 5px;
    }

    div.indentLeft {
        margin-left: 15px;
    }

    div.searchOptions {
        float: right;
        border: 1px solid black;
        padding: 4px;
        background-color: #efefef;
    }

-->
</style>

<div class='boxFloatRight' style='width: 200px;'>
    foo<br />
    bar<br />
    bamph
</div>
<form method='get' action='<?= $this->baseLink() ?>'>
    <input type='hidden' name='searchType' value='simple' />
    <input type='hidden' name='searchBy' value='keywords' />
    <input type='hidden' name='action' value='search' />
    <div class='searchHeader'>Simple Search</div>
    <strong>Find:</strong> <input type='text' name='searchFor' size='20' value='' /><br />
    <br />
    <input type='submit' value='Search' />
</form>
<hr noshade>
<form method='get' action='<?= $this->baseLink() ?>'>
    <input type='hidden' name='searchType' value='advanced' />
    <input type='hidden' name='action' value='search' />
    <div class='searchOptions' style='width: 250px'>
        <strong>Search By Magazine</strong><br />
        <div class='indentLeft'>
            <input type='radio' name='searchSource' value='lasn' /> Landscape Architect &amp; Specifier News <br />
            <input type='radio' name='searchSource' value='lcn' /> Landscape Contractor National <br />
            <input type='radio' name='searchSource' value='lsmp' /> Landscape Superintendent &amp; Maintenance Professional <br />
            <input type='radio' name='searchSource' value='any' checked /> Any Source <br />
        </div>
        <strong>Search By Issue Date</strong><br />
        <div class='indentLeft'>
            <input type='radio' name='boolDate' value='1' />
            <?= $this->dateInputs(NULL, 'search', FALSE); ?>
            <br />
            <input type='radio' name='boolDate' value='0' checked /> Any Date
        </div>
    </div>
    <div class='searchHeader'>Advanced Search</div>
    <strong>Search Bys:</strong><br />
    <div class="indentLeft">
        <input type='radio' name='searchBy' value='title' /> Title <br />
        <input type='radio' name='searchBy' value='author' /> Author <br />
        <input type='radio' name='searchBy' value='keywords' checked /> Keywords <br />
    </div>
    <br />
    <strong>Find:</strong> <input type='text' name='searchFor' size='20' value='' />
    <input type='submit' value='Search' />
    <br />
</form>
<br />
