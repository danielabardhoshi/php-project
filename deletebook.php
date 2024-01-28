<?php include 'dbconn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "UPDATE ticket SET status = 0 where id = '".$id."'";
    $result = mysqli_query($connection,$delete);
    header("Location: biletat.php");
}

?>