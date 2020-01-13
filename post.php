<?php
    session_start();
    require 'database.php';
    $db = new Database();
    Database::connect_DB();
    function requireAll($post, $title, $email, $comments, $db){
        require 'post.view.php';
    }
    if(isset($_POST['comment'])){ 
        $emailvar = $_SESSION['email'];
        $titlevar = $_GET['title'];
        $commentvar = $_POST['comment'];
        if($db->enterComment($emailvar, $titlevar, $commentvar))
            echo '<script>alert("Comment Submitted!");</script>';
    }
    if (isset($_SESSION['email'], $_SESSION['pass'], $_SESSION['username'], $_GET['title'])){
        echo '<script>document.getElementById("loginuser").innerHTML="' . $_SESSION['username'] . '(LOG OUT)";</script>';
        
        //Set up the post selected by the user
        $post = $db->returnPostupontitle($_GET['title'])->description;
        $title = $_GET['title'];
        $email = $_SESSION['email'];
        $comments = $db->showComments($_GET['title']);
        //Retrieve all comments made on the displayed post

        //Require the The view page after assigning varibales for the post
        requireAll($post, $title, $email, $comments, $db);

        //Set up the Navigation Bar for the user
        $posts = $db->returnPosts($_SESSION['email']);
        $postss = $db->getAllposts();
        $emptyString = "";
        $path = '~/../post.php?title=';

        //If user made no post
        if(empty($posts)){
            echo '<script>document.getElementById("posts").style.display = "none";</script>';
        }
        //Display the loggged in user's posts
        else{
            foreach ($posts as $post){
                $emptyString = $emptyString . '<a class=\"dropdown-item text-light bg-dark\" href=\"' . $path . str_replace(" ","%20",$post->title) . '\">'. $post->title .'</a>';
            }
            echo '<script>document.getElementById("post").innerHTML="' . $emptyString . '";</script>';
        }

        
        //Display Other's Posts
        $emptyString = ""; 
        $tempUser = null;
        $ite = 0;
        foreach ($postss as $postt){
            if($ite == 0){
                $tempUser = $postt->fk_user_id;
                $emptyString = $emptyString . '<li class=\"dropdown-header\">'.$db->findUser($postt->fk_user_id)->username.'</li>';
            }
            if($postt->fk_user_id == $tempUser){
                $emptyString = $emptyString . '<li class=\"dropdown-item text-light bg-dark\"><a href=\"' . $path . str_replace(" ","%20",$postt->title) . '\">'. $postt->title .'</a></li>';
            }
            else{
                $emptyString = $emptyString . '<li class=\"divider bg-light\"></li>';
                $emptyString = $emptyString . '<li class=\"dropdown-header\">'.$db->findUser($postt->fk_user_id)->username.'</li>';
                $emptyString = $emptyString . '<li class=\"dropdown-item text-light bg-dark\"><a href=\"' . $path . str_replace(" ","%20",$postt->title) . '\">'. $postt->title .'</a></li>';
                $tempUser = $postt->fk_user_id;
            }
            $ite = $ite + 1;
        }
        echo '<script>document.getElementById("other_post_dropdown").innerHTML="' . $emptyString . '";</script>';
    }