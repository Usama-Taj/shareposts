<?php
    session_start();
    require 'makepost.view.php';
    require 'database.php';
    if (isset($_SESSION['email'], $_SESSION['pass'], $_SESSION['username']) && $_SERVER['PHP_SELF'] == '/project/makepost.php'){
        echo '<script>document.getElementById("loginuser").innerHTML="' . $_SESSION['username'] . '(LOG OUT)";</script>';
        $db = new Database();
        Database::connect_DB();
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
        echo '<script>document.getElementById("make_post").style.display = "none";</script>';
        if(isset($_POST['title'],$_POST['description'])){
            
            $id = $db->getPostmaker_id($_SESSION['email'])->ID;
            $title = $_POST['title'];
            $description = $_POST['description'];
            if($db->makePost($id, $title, $description) && isset($_POST['title'],$_POST['description'])){
                echo '<script>alert("Your Post has been submitted successfully");window.location.replace("index.php");</script>';
            }
            elseif (!$db->makePost($id, $title, $description) && isset($_POST['title'],$_POST['description'])) {
                echo '<script>alert("Sorry! post could not be submitted");</script>';
            }
            else{
                    echo '<script>alert("Please! Make a post");</script>';
            }
        }
    }
    else{
        echo '<script>document.getElementById("posts").style.display = "none";</script>';
    }