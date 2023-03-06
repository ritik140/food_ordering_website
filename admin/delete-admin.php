<?php
//include constant .php file here
include('../config/constant.php');
//1.get the id to admin to be deleted
$id = $_GET['id'];

//2.create the sql Query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the Query 
$res = mysqli_query($conn, $sql);

//to check weather the query excuted successfully or not
if ($res == true) {
    // echo "Admin deleted";
    $_SESSION['delete'] = "Deleted Successfully";
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    $_SESSION['delete'] = "Failed to delete admin";
    header('location:' . SITEURL . 'admin/manage-admin.php');
}

//3.redirect to manage 