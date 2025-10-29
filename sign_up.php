<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style_login.css">
</head>
<body>
    <div class="container-signup">
        <div class="signup-box">
            <h2>Signup</h2>
            <?php
            if (isset($_GET['message'])) {
                $msg = $_GET['message'];
                if ($msg == 'exist') {
                    echo '<p style="text-align: center; color : #dc3545;"><strong>Username Already Exist</strong></p>';
                }
            }?>
            <form method="POST" action="php/process_register.php">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="textbox">
                            <input type="text" name="first_name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="textbox">
                            <input type="text" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="textbox">
                    <input type="text" name="nik" placeholder="NIK" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="textbox">
                            <input type="text" name="phone_number" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="textbox">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="textbox">
                    <input type="address" name="address" placeholder="Address" required>
                </div>
                <input type="submit" value="Daftar">
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>