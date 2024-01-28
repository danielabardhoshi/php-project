<?php include 'dbconn.php'?>

<?php 

if(isset($_POST['loginEmail']) && isset($_POST['loginPassword'])){
    $email = $_POST['loginEmail'];
    $passw = $_POST['loginPassword'];
    
    $getUser = "SELECT id from user WHERE email = '".$email."' and password = '".$passw."';";
    
    $result = mysqli_query($connection,$getUser);
    
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['loged_id'] = $row['id'];
    }

    if(isset($_SESSION['loged_id'])){
        if($result){
            $_SESSION['Alert']="Login successful!";
            header("Location: index.php");
          }    
    }else{
        $_SESSION['Alert']="E-mail or password is incorrect!";
        header("Location: login.php");
    }
      
}
?>
