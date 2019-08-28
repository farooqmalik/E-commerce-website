<?php
ob_start();
session_start();
require_once 'config/connect.php';
$uid= $_SESSION['customerid'];
if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) {
    header('location:login.php');
}
if (isset($_GET['id']) & !empty(['$_GET'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM wishlist WHERE id=$id";
    $res=mysqli_query($connection, $sql);
    if ($res) {
        header('location: wishlist.php');
        //echo "redirect to wishlist page";
    }
}else{
    header('location: wishlist.php');
}

?>