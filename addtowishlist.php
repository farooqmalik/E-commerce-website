<?php
ob_start();
session_start();
require_once 'config/connect.php';
$uid= $_SESSION['customerid'];
if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) {
    header('location:login.php');
}
if (isset($_GET['id']) & !empty(['$_GET'])) {
    $pid=$_GET['id'];
    $sql="INSERT INTO wishlist (pid, uid) VALUES($pid, $uid)";
    $res=mysqli_query($connection, $sql);
    if ($res) {
        header('location: wishlist.php');
        //echo "redirect to wishlist page";
    }
}else{
    header('location: wishlist.php');
}

?>