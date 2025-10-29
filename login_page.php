<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style_login.css">
</head>

<body>
    <div class="container-login">
        <h1 class="text-center fs-3 mb-3"><img class="logo-img" src="asset/logo.png" alt="">F LOANS</h1>
        <div class="login-box">
            <h2>Login</h2>
            
            <form method="POST" action="php/process_login.php">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" value="Login">
            </form>
            <?php
            if(isset($_GET['message'])) {
                $msg = $_GET['message'];
                if($msg == 'user_not_found'){
                    echo '<p style="text-align: center; color : #dc3545;"><strong>User Not Found!</strong></p>';
                } else if($msg == 'wrong_pass') {
                    echo '<p style="text-align: center; color : #dc3545;"><strong>Password Wrong!</strong></p>';
                } else if($msg == 'created') {
                    echo '<p style="text-align: center; color : #dc3545;"><strong>Account Created!</strong></p>';
                }
            }
            ?>
            <div class="signup-link">
                <p>Dont have an account yet? <a href="signup.php">Register Now</a></p>
            </div>
        </div>
    </div>
</body>
</html>
 
