<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    </div>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="assets/img/gambar.png" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Registration</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Your First Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Enter Your Last Name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                            <label for="name">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required/>
                            </div>
                            <div class="form-group">
                            <label for="name">Phone No</label>
                                <input type="text" name="number" id="number" placeholder="+62" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Password</label>
                            <input type="text" name="pincode" id="pincode" placeholder="Enter Your Password">
                        </div>
                        <div class="form-submit">
                            <!-- <input type="submit" value="Reset All" class="submit" name="reset" id="reset" /> -->
                            <input type="submit" value="Sign Up" class="submit" name="submit" id="submit" />
                            <p class="login-wrapper-footer-text">Already have an account <a href="/login" class="text-reset">Log in</a></p>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
