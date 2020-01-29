<?php

include("lo_mo_top-main-tlelb-16-pg3-mult.inc");

?>

<div style="position:absolute; left:200px; top:200px" style="color#000000">
    <span style="font-size:36px; font-weight:bold">Landscape Expo Registration</span> - (Add A Staff Member)
    <span style="line-height:40px">&nbsp;</span><br>



    <p><span style="font-size:36px; font-weight:bold">Staff Memmber Added</span></p>
    
<script>

										function close_window() {
										  if (confirm("Finished Adding Staff?")) {
											close();
										  }
										}

                                        function myButtonFunction8() {
                                            
                                            var comp = "<?php echo $comp_name ?>";
                                            var addr = "<?php echo $_GET[address4] ?>";
                                            var cona = "<?php echo $_GET[comp_nam4] ?>";
                                            var city = "<?php echo $_GET[city4] ?>";
                                            var state = "<?php echo $_GET[state4] ?>";
                                            var zip = "<?php echo $_GET[zip4] ?>";
                                            var phone = "<?php echo $_GET[phone4] ?>";
                                            var fax = "<?php echo $_GET[fax4] ?>";
											
                                            window.open("https://landscapearchitect.com/subscriptions/subscribe-lb-2016-js2-mult.php?action=new&address5="+addr+"&comp_nam5="+cona+"&city5="+city+"&state5="+state+"&zip5="+zip+"&phone5="+phone+"&fax5="+fax, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=1100,height=900");
                                           }
										   
										function Jump()
										{
											
                                            var comp = "<?php echo $_GET[comp_nam2] ?>";
                                            var addr = "<?php echo $_GET[address2] ?>";
                                            var cona = "<?php echo $_GET[comp_nam2] ?>";
                                            var city = "<?php echo $_GET[city2] ?>";
                                            var state = "<?php echo $_GET[state2] ?>";
                                            var zip = "<?php echo $_GET[zip2] ?>";
                                            var phone = "<?php echo $_GET[phone2] ?>";
                                            var fax = "<?php echo $_GET[fax2] ?>";											
											
											
											
											window.location.href = "https://landscapearchitect.com/subscriptions/subscribe-lb-2016-js2-mult.php?action=new&address5="+addr+"&comp_nam5="+cona+"&city5="+city+"&state5="+state+"&zip5="+zip+"&phone5="+phone+"&fax5="+fax;
										}										   
																				   
										   

</script>
    
    
    
    
    
    
    <button href="#" onClick="Jump()">Add Another Staff Member</button>
    
    <button href="#" onclick="close_window()">Finished Adding Staff Members</button>

</div>