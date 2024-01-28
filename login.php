
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background">

    <h1>Login</h1>

    <form id="loginForm" method="post" action="log.php">
        <label for="loginEmail">E-mail address:</label>
        <input type="email" id="loginEmail" name="loginEmail" required><br></br>

        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required><br></br>

        <button type="submit" id="login">Login</button>
    </form>

    <script>
        <?php 
        if(isset($_SESSION['Alert'])){
            echo "alert(".$_SESSION['Alert'].")";
            unset($_SESSION['Alert']);
        } ?>

        $('#login').submit(function(){

        // Perform validation
        var loginEmail = document.getElementById("loginEmail").value;
        var loginPassword = document.getElementById("loginPassword").value;
        if (!loginEmail || !loginPassword) {
            alert("Please fill out all required fields");
            return false;
        }
        // Basic email format validation
        var emailRegex = /\S+@\S+\.\S+/;
        if (!emailRegex.test(loginEmail)) {
            alert("Invalid email address");
            return false;
        }

        return true; 
    });
    </script>

</body>
</html>