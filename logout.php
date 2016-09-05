<?php
/**
 * Created by PhpStorm.
 * User: ShahAli Bogdadi
 * Date: 9/5/2016
 * Time: 11:47 AM
 */

    session_start();

    $_SESSION['user'] = "";
    $_SESSION['login'] = "False";
    echo "<script>location.href='login.php'</script>";

?>