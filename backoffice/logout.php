<?php
if(isset($_GET['id'])) {
session_start();
unset($_SESSION['client']);
session_destroy();
header('Location:../index');
    
}
else {
session_start();
unset($_SESSION['login']);
 session_destroy();
 header('Location: index');
} 
?>