<?php require_once('manage/app/app_include/session.php'); ?>
<?php
     //destroy all sessions canceling the login session
     session_destroy();
     //Redirect with success message
     header('Location: index.php');
?>