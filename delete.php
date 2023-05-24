<?php
include "config.php";
if (isset($_GET['id'])) {
    $user_id=$_GET['id'];
    $sql="DELETE FROM `operations` WHERE `id` ='$user_id'";
    $result=$connect->query($sql);
    if($result == TRUE){
        echo "RECORD deleted successfully.";
    }else{
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    }
}
?>