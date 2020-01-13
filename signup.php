<?php
    session_start();
    require_once 'signup.view.php';
    require_once 'database.php';


    if(isset($_SESSION['email'], $_SESSION['pass'], $_SESSION['username'])){
        echo '<script>alert("Sorry! You cannot Sign Up if logged into another account");window.location.replace("index.php");</script>';
    }
    else {
        echo '<script>document.getElementById("posts").style.display = "none";</script>';
        echo '<script>document.getElementById("make_post").style.display = "none";</script>';
        echo '<script>document.getElementById("other_post").style.display = "none";</script>';
    }
    $db = new Database();
    if(isset($_POST['username'],$_POST['email'],$_POST['password'],$_POST['country'],$_POST['country_code'],$_POST['phone_number'])){
        $db::connect_DB();
        $concat = $_POST['country_code'].$_POST['phone_number'];

        //Check if the user already exists or not
        if($db->findValue('tbl_users','email',$_POST['email'])){
            echo '<script>alert("Sorry! User with same email already exists")</script>';
        }
        else{
            $db->insertDatabase($_POST['username'],$_POST['email'],$_POST['password'],$_POST['country'], $concat);
            echo '<script>alert("Congrats! You\'ve joined the membership");window.location.replace(\'login.php\');</script>';
        }
    }
    else{
        echo '<script>alert("Please! Fill the form")</script>';
    }
?>
    
    