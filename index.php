<?php
    session_start();
    require_once 'index.view.php';
    require_once 'database.php';
    if (isset($_SESSION['email'], $_SESSION['pass'], $_SESSION['username'])){
        echo '<script>document.getElementById("loginuser").innerHTML="' . $_SESSION['username'] . '(LOG OUT)";</script>';
        
        //Declare and Define Posts
        $db = new Database();
        Database::connect_DB();
        $posts = $db->returnPosts($_SESSION['email']);
        $postss = $db->getAllposts();
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
    else{
        echo '<script>document.getElementById("make_post").style.display = "none";</script>';
        echo '<script>document.getElementById("posts").style.display = "none";</script>';
        echo '<script>document.getElementById("other_post").style.display = "none";</script>';
    }