<?php
session_start();
header('Content-type:text/html;charset=utf-8');
if(isset($_SESSION['username']) && $_SESSION['username']==='Ribery'){
    session_unset();
    session_destroy();
    setcookie(session_name(), '', time()-3600, '/');
    header('Location: skip.php?url=index.php&info=logout sucessfully');
}else{
    header('Location: skip.php?url=index.php&info=logout failed');

}
?>