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
        <!--Login Form-->
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <div class="page-header">
                    <h6 class="display-4">Write your post</h6>
                    <form action="makepost.php" method="post">
                        <input type="text" name="title" id="title_id" placeholder="Title" required>
                        <textarea rows="10" cols="50" type="text" name="description" id="description_id" placeholder="Description" required></textarea>
                        <input type="submit" class="btn btn-success btn-outline-dark" value="S U B M I T&nbsp;&nbsp;&nbsp;P O S T">
                    </form>
                </div>
            </div>
        </div>
        <!--Form Ended-->
        <!--Footer Started-->
        <?php require('partials/footer.php'); ?>
        <!--Footer Ended-->
  </body>
</html>