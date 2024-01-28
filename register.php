<?php include 'dbconn.php'?>

<?php 

if(isset($_POST['nickname']) && isset($_POST['email']) && isset($_POST['password'])
 && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthday'] )){
    $gender = 0;
    if(isset($_POST['gender'])){
        $gender = 1;
    }


    $insertQuerry = "INSERT INTO `user` (`nickname`, `email`, `password`, `name`, `surname`, `birthday`, `gender`)
     VALUES ('".$_POST['nickname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['name']."',
      '".$_POST['surname']."', '".$_POST['birthday']."', '".$gender."')";
    
      $result = mysqli_query($connection,$insertQuerry);
      if($result){
        $_SESSION['Alert']="Registration succsessful!";
        header("Location: login.html");
      }
}
?>
