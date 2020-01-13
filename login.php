<?php
    session_start();
    require_once 'login.view.php';
    require_once 'database.php';
    $dbase = new Database();
    //If Log out is clicked
    if(isset($_SESSION['email'], $_SESSION['pass']) && $_SERVER['HTTP_REFERER'] != '/Project/login.php' && !isset($_POST['inputemail'],$_POST['password'])){
        echo '<script>alert("You\'ve Logged out");</script>';
        echo '<script>document.getElementById("loginuser").innerHTML="L&nbsp;O&nbsp;G&nbsp;&nbsp;I&nbsp;N&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i>";</script>';
        session_unset();
        session_destroy();
    }
    if(isset($_POST['inputemail'],$_POST['password'])){
        $dbase::connect_DB();

        //Match email and password from the databse using the findValue(which_table, in_which_column, value_to_find) function
        if($dbase->validateUser($_POST['inputemail'], $_POST['password'])){
            $usernamee = $dbase->returnValue('tbl_users','username','email',$_POST['inputemail'])->username;

            //Setting up session
            $_SESSION['email'] = $_POST['inputemail'];
            $_SESSION['pass'] = $_POST['password'];
            $_SESSION['username'] = $usernamee;


            //Redirecting with a new user logged in
            echo '<script>alert("You\'ve logged in");window.location.replace(\'index.php\');</script>';
        }
        else{
            echo '<script>document.getElementById("posts").style.display = "none";</script>';
            echo '<script>document.getElementById("other_post").style.display = "none";</script>';
            echo '<script>document.getElementById("make_post").style.display = "none";</script>';
            echo '<script>alert("Sorry! Invalid Email or Password");</script>';
        }
    }
    else {
        echo '<script>document.getElementById("posts").style.display = "none";</script>';
        echo '<script>document.getElementById("other_post").style.display = "none";</script>';
        echo '<script>document.getElementById("make_post").style.display = "none";</script>';
        echo '<script>alert("Please enter the data")</script>';
    }