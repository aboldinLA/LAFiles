

<style>
    
.container{
    margin-top:50px;
    padding: 10px;
}
ul, ol, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.reorder_link {
    color: #3675B4;
    border: solid 2px #3675B4;
    border-radius: 3px;
    text-transform: uppercase;
    background: #fff;
    font-size: 18px;
    padding: 10px 20px;
    margin: 15px 15px 15px 0px;
    font-weight: bold;
    text-decoration: none;
    transition: all 0.35s;
    -moz-transition: all 0.35s;
    -webkit-transition: all 0.35s;
    -o-transition: all 0.35s;
    white-space: nowrap;
}
.reorder_link:hover {
    color: #fff;
    border: solid 2px #3675B4;
    background: #3675B4;
    box-shadow: none;
}
#reorder-helper{
    margin: 18px 10px;
    padding: 10px;
}
.light_box {
    background: #efefef;
    padding: 20px;
    margin: 15px 0;
    text-align: center;
    font-size: 1.2em;
}

/* image gallery */
.gallery{
    width:100%;
    float:left;
    margin-top:15px;
}
.gallery ul{
    margin:0;
    padding:0;
    list-style-type:none;
}
.gallery ul li{
    padding:7px;
    border:2px solid #ccc;
    float:left;
    margin:10px 7px;
    background:none;
    width:auto;
    height:auto;
}
.gallery img{
    width:250px;
}

/* notice box */
.notice, .notice a{
    color: #fff !important;
}
.notice {
    z-index: 8888;
    padding: 10px;
    margin-top: 20px;
}
.notice a {
    font-weight: bold;
}
.notice_error {
    background: #E46360;
}
.notice_success {
    background: #657E3F;
}    
    
    
    
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
    $('.reorder_link').on('click',function(){
        $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
        $('.reorder_link').html('save reordering');
        $('.reorder_link').attr("id","saveReorder");
        $('#reorderHelper').slideDown('slow');
        $('.image_link').attr("href","javascript:void(0);");
        $('.image_link').css("cursor","move");
        
        $("#saveReorder").click(function( e ){
            if( !$("#saveReorder i").length ){
                $(this).html('').prepend('<img src="images/refresh-animated.gif"/>');
                $("ul.reorder-photos-list").sortable('destroy');
                $("#reorderHelper").html("Reordering Photos - This could take a moment. Please don't navigate away from this page.").removeClass('light_box').addClass('notice notice_error');
                
                var h = [];
                $("ul.reorder-photos-list li").each(function() {
                    h.push($(this).attr('id').substr(9));
                });
                
                $.ajax({
                    type: "POST",
                    url: "orderUpdate.php",
                    data: {ids: " " + h + ""},
                    success: function(){
                        window.location.reload();
                    }
                });	
                return false;
            }	
            e.preventDefault();
        });
    });
});
</script>


<div class="container">
    <a href="javascript:void(0);" class="reorder_link" id="saveReorder"><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">reorder photos</span></a>
    <div id="reorderHelper" class="light_box" style="display:none;">1. Drag photos to reorder.<br>2. Click 'Save Reordering' when finished.</div>
    <div class="gallery">
        <ul class="reorder_ul reorder-photos-list">
        <?php 
        // Include and create instance of DB class 
        require_once 'DB.class.php'; 
        $db = new DB(); 
         
        // Fetch all images from database 
        $images = $db->getRows(); 
        if(!empty($images)){ 
            foreach($images as $row){ 
        ?>
            <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                <a href="javascript:void(0);" style="float:none;" class="image_link">
                    <img style="height: 150px" src="https://landscapearchitect.com/products/images/<?php echo $row['photo']; ?>" alt="">
                </a>
            </li>
        <?php } } ?>
        </ul>
    </div>
</div>















	
	