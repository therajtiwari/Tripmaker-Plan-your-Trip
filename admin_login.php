<?php 
include('./includes/functions.php');
session_start();

if(isset($_SESSION['admin_email'])){
  header('Location: admin.php');
}
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $is_admin=true;
  // echo $email;
  login($email, $password, $is_admin);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/register.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="contents order-2 order-md-2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Admin Login</h3>
                        </div>
                        <form method="POST" submit="return validateLogin()">
                            <div class="form-group">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" placeholder="Email" class="form-control" id="email" name="email" />
                                <div id="email-error" class="error-message-hide">
                                    Email is required
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="password">Password</label> -->
                                <input type="password" placeholder="Password" class="form-control" id="password"
                                    name="password" />
                                <div id="password-error" class="error-message-hide">
                                    Password is required
                                </div>
                            </div>
                            <br />
                            <!-- <div id="credentials-error" class="error-message-cvisible">
                                Invalid Credentials. Please try again.
                            </div> -->
                            <br />

                            <button type="submit" class="btn btn-block btn-primary" name="submit">
                                Login
                            </button>
                            <br />
                        </form>
                        <!-- <p>
                            Don't Have an Account?
                            <a href="./register.html">Register Now</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bg order-1 order-md-1" style="background-image: url('./images/img4.jpg')"></div>
    </div>

    <script>
    function validateLogin() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        console.log(email, password);

        var eemail = (epassword = true);

        if (email == "") {
            var email_error = document.getElementById("email-error");
            email_error.classList.remove("error-message-hide");
            email_error.classList.add("error-message-visible");
            eemail = false;
        } else {
            var email_error = document.getElementById("email-error");
            email_error.classList.remove("error-message-visible");
            email_error.classList.add("error-message-hide");
            eemail = true;
        }

        if (password == "") {
            var password_error = document.getElementById("password-error");
            password_error.classList.add("error-message-visible");
            password_error.classList.remove("error-message-hide");
            epassword = false;
        } else {
            var password_error = document.getElementById("password-error");
            password_error.classList.remove("error-message-visible");
            password_error.classList.add("error-message-hide");
            eemail = true;
        }

        if (eemail && epassword && !eemail && !epassword) {
            return true;
        } else {
            return false;
        }
    }
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>