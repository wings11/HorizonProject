<?php  
session_start();
session_destroy();
session_regenerate_id();

//unset($_SESSION['A_UserName']);

echo "<script>window.alert('Logout Success.')</script>";
echo "<script>window.location='Login.php'</script>";
?>