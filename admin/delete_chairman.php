<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_ass_secretary where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:chairman.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>