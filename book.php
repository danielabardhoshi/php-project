<?php include 'dbconn.php' ?>

<?php

If(isset($_POST['date']) && isset($_POST['time']) && isset($_SESSION['loged_id'])
 && isset($_POST['amount']) && isset($_SESSION['MovieName'])){
$date = $_POST['date'];
$time = $_POST['time'];
$loginID = $_SESSION['loged_id'];
$ticketnumber = $_POST['amount'];
$movieName = $_SESSION['MovieName'];

$insertTicket = "INSERT INTO `ticket` ( `user_id`, `date_time`, `ticket_number`, `MovieNAme` , `status`) 
VALUES ('".$loginID."', '2024-02-".$date." ".$time.":04', '".$ticketnumber."', '".$movieName."', 1)";

$result = mysqli_query($connection,$insertTicket);
if($result){
    $_SESSION['Alert']="Registration succsessful!";
    header("Location: index.php");
}


}
elseif(!isset($_SESSION['loged_id'])){
    header("Location: login.php");
}elseif(!isset($_POST['amount'])){
    header("Location: biletaria.html");
}elseif(!isset($_SESSION['MovieName'])){
    header("Location: index.php");
}



?>