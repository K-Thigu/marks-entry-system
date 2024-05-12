<?php
    session_start();

    session_destroy();
    $_SESSION["loggedin"] = false;
    header("location: index.php");
?>

