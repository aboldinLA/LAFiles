// this code isn't likely to work anymore
    <?=$C->sitenav_jsarray();?>
    function findleft(obj) {
        var leftsum = 0;
        for(i=0;i<topnav_keys.length;i++) {
            if (obj.id == topnav_keys[i]) {
                return leftsum;
            } else {
                if (navigator) {

                    leftsum = leftsum + document.getElementById(topnav_keys[i]).offsetWidth;
                } else {
                leftsum = leftsum + document.getElementById(topnav_keys[i]).clientWidth; }
            }
            //alert(leftsum);
        }

        return leftsum;
    }

    function lol_menuover(obj) { 
        if (document.cur_obj) { 
            if (document.cur_obj==document.start_obj) {
                //document.cur_obj.style.background = '#70A183'; //green
            } else {
                document.cur_obj.style.background = '#67645F'; //gray 
            }
        }
        if (!obj.id) { //find by string
            obj = document.getElementById(obj);
            if (!obj) {
                return;
            }
            document.start_obj=obj;
            //obj.style.background = '#70A183'; //green
        } else {
            if (!document.start_obj) { obj.style.background = '#383838'; } else {
            if (obj.id != document.start_obj.id) {
                obj.style.background = '#383838'; //dark-gray
            } }
        
        }
        document.cur_obj=obj;

        var sub_left = findleft(obj);
        for(i=0;i<topnav_keys.length;i++) {
            if (obj.id == topnav_keys[i])  {
                if (document.cur_nav) {  document.cur_nav.style.display='none'; }
                nav=document.getElementById(obj.id + '_div');
                navtab=document.getElementById(obj.id + '_tab');
                navspacer=document.getElementById('navspacertd');
                nav.style.display='block';
                if (navigator) {
                    nw=(sub_left + (obj.offsetWidth/2)) - (navtab.offsetWidth/2);
                } else {
                    nw=(sub_left + (obj.clientWidth/2)) - (navtab.clientWidth/2);
                }// centers subnav div
                if (nw > 0) { navspacer.style.width=nw; }
                else { navspacer.style.width=3; }
                //alert(sub_left);
                document.cur_nav=nav;
            }
        }
    }

    function restoreSubnav() {
        if (document.start_obj) { lol_menuover(document.start_obj) } 
        else if (document.cur_nav) {  
            document.cur_nav.style.display='none'; };
    }
    

