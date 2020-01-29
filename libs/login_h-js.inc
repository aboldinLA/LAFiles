<?php
#error_reporting(-1);

include("../../includes/class/user_class.inc");
$U = new user_class($db);
#if($REQUEST_METHOD=="POST") {
    If($_SERVER['REQUEST_METHOD']=="POST"){
   #print_r($_POST); # die('end');
   extract($_POST);
    #echo "dddd====".$password;
    if ($action == "login") {
        switch ($t) {
            case "ad"   : $uid = $U->login_admin($email,$password); break;
            case "as"   : $uid = $U->login_association($password); break;
            case "v"    : $uid = $U->login_vendor($password); break;
            case "s"    : $uid = '$U->login_subscriber($password)'; break;
        } 
         # print_r($uid); die;
        // possible universal login scheme: 
         $arr = $U->login_admin($email,$password); 
         # $_SESSION['uid'] = $arr['uid'];
         # $_SESSION['auth'] = $arr['auth']; 
        // 'auth' can be a combination of the above codes. using a single accounts DB
        if ($uid) {
            if ($t == "ad") {
                #session_register("admin_id");
                #session_register("admin_auth");
                $_SESSION['admin_id'] = $admin_id;
                $_SESSION['admin_auth'] = $admin_auth; 
                $_SESSION['admin_auth'] = $t; 
            } else {            
                #session_register("uid");
                #session_register("auth");

                $_SESSION['uid'] = $uid;
                $_SESSION['auth'] = $auth;  

                $_SESSION['uid'] = $uid; 
                $_SESSION['auth'] = $t; 
            }
            # die('dddd');
            #header("location: ". $lol_url . $npage);
            
            
            echo '<script>
            window.location.replace("https://landscapearchitect.com/'.$npage.'");
            </script>';
        } else {
                if($t == "s") {
                    if(strtoupper($password) == "AAA000000") {
                        header("location: ". $lol_url . "/subscriptions/index.php?action=subscribe&defaultp=1");
                    }  else {
                                $error .= "Invalid E-Mail address or password ";
                    } 
                } else {
                    $error .= "Invalid E-mail address or password ";
                }
        }
    } 
}
?>