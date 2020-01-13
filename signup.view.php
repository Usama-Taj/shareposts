<!doctype html>
<html lang="en">
  <head>
    <!--JQurey CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $("#button1").click(function() {
                if($('#country_id').val() == 'Country'){
                    $('#code').val('00');
                    alert('Pleaase select the country');
                }
                if($('input[name=password]').val() != $('input[name=confirm_password]').val())
                    alert('Password does not match')
            });
            $("#country_id").change(function() {
                if($('#country_id').val() == 'Country'){
                    $('#code').val('00');
                    Please
                }
                else{
                    switch ($('#country_id').val()) {
                        case 'Pakistan':
                            $('#code').val('+92');
                            break;
                        case 'Oman':
                            $('#code').val('+968');
                            break;
                        case 'Afghanistan':
                            $('#code').val('+93');
                            break;
                        case 'America':
                            $('#code').val('+1');
                            break;
                        case 'Russia':
                            $('#code').val('+7');
                            break;
                        case 'Canada':
                            $('#code').val('+1');
                            break;
                        case 'Turkey':
                            $('#code').val('+90');
                            break;
                        case 'China':
                            $('#code').val('+86');
                            break;
                        default:
                            break;
                    }
                }
            });
        });
    </script>

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

    <title>Title</title>

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
        <h2 align="center">Sign Up to become a member</h2>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="border-primary mx-auto">
                    <form action="signup.php" method="post">
                        <label for="username" class="badge badge-pill badge-primary">Username:</label>
                        <input name="username" type="text" placeholder="Username" class="form-control rounded" required>
                        <br>
                        <label for="email" class="badge badge-pill badge-primary">Email:</label>
                        <input name="email" type="text" placeholder="Email" class="form-control rounded" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required>
                        <br>
                        <label for="password" class="badge badge-pill badge-primary">Password:</label>
                        <input name="password" type="password" placeholder="Password" class="form-control rounded" required>
                        <br>
                        <label for="confirm_password" class="badge badge-pill badge-primary">Cpmfirm Password:</label>
                        <input name="confirm_password" type="password" placeholder="Confirm Password" class="form-control rounded" required>
                        <br>
                        <label for="country" class="badge badge-pill badge-primary">Country:</label>
                        <select name="country" id="country_id" class="form-control rounded">
                            <option value="Country" selected>Country</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Oman">Oman</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Russia">Russia</option>
                            <option value="America">America</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Canade">Canada</option>
                            <option value="China">China</option>
                        </select>
                        <br>
                        <label for="username" class="badge badge-pill badge-primary">Phone no:</label>
                        <br>
                        <input name="country_code" type="text" id="code" class="form-control d-inline" readonly>
                        <input type="text" class="form-control d-inline" id="phone_no" name="phone_number" placeholder="Phone Number" required>
                        <br>
                        <br>
                        <input type="submit" id="button1" value="S I G N&nbsp;&nbsp;&nbsp;U P" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--Footer Started-->
        <?php require('partials/footer.php'); ?>
        <!--Footer Ended-->
  </body>
</html>