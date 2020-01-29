<?php session_start();//to ensure you are using same session
session_unset();
session_destroy();
session_write_close(); //destroy the session
session_regenerate_id(true);
header("Location: /");
exit();
?>

