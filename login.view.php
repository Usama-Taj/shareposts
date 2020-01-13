<!doctype html>
<html lang="en">
  <head>


    <!--External CSS Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--Java Script Bootstrap-->
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <title>Login</title>

    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://kit.fontawesome.com/205a835a0e.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
        <!--Navigation Bar Started-->
            <?php require('partials/header.php'); ?>
        <!--Navigation Bar Ended-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--Login Form-->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" id="login_div_1">
                        <h2 style="position: absolute;">Login to your Account....</h2>
                        <img src="http://d1qc9xd3klx2m7.cloudfront.net/ditechcms/media/ditech/icons_1/login-icon.svg?ext=.svg" alt="Login image">
                    </div>
                    <div class="col-sm-6">
                        <h2>Write your credentials here.....</h2>
                        <br>
                        <br>
                        <form action="login.php" method="post">
                            <label for="email" class="badge badge-pill badge-primary ml-2">Email:</label>
                            <input name="inputemail" type="text" placeholder="Email Adress..." class="form-control rounded" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required>
                            <br>
                            <label for="inputpassword" class="badge badge-pill badge-primary ml-2">Password:</label>
                            <input name="password" type="password" placeholder="Password" class="form-control rounded" required>
                            <br>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Form Ended-->

        <!--Footer Started-->
        <?php require('partials/footer.php'); ?>
        <!--Footer Ended-->
  </body>
</html>