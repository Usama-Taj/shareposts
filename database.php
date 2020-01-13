<?php
    class Database
    {   
        //Propertes
        private static $host;
        private static $dbname;
        private static $user;
        private static $password;
        private static $dsn;
        private static $pdo;

        //Define Your Database
        function __construct(){
            self::$host = 'localhost';
            self::$dbname = 'project';
            self::$user = 'root';
            self::$password = '123';
            self::$dsn = 'mysql:host='. self::$host . ';dbname='. self::$dbname;
        }
        //Make a Connection to the database
        static function connect_DB(){
            try{
                self::$pdo = new PDO(self::$dsn, self::$user, self::$password);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        //Search out the value form the database table
        function findValue($table, $col, $valuee){
            $stmt = self::$pdo->prepare("SELECT $col FROM $table WHERE $col = :valuee");
            $stmt->execute(['valuee' => $valuee]);
            $values = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($values->email) || isset($values->pass) || isset($values->username) || isset($values->country) || isset($values->phoneno))
                return true;
            else
                return false;
        }

        //Insert values into Tabel named "tbl_users"
        function insertDatabase($username, $email, $pass, $country, $phoneno){
            $query = 'INSERT INTO tbl_users(username, email, pass, country, phoneno) VALUES(:username, :email, :pass, :country, :phoneno)';
            $stmt = self::$pdo->prepare($query);
            $stmt->execute(['username' => $username, 'email' => $email, 'pass' => $pass, 'country' => $country, 'phoneno' => $phoneno]);
        }

        //Return the value from the database according to the dpecified property
        function returnValue($table, $column, $property, $valuee){
            $stmt = self::$pdo->prepare("SELECT $column FROM $table WHERE $property = :valuee");
            $stmt->execute(['valuee' => $valuee]);
            $values = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($values->email) || isset($values->pass) || isset($values->username) || isset($values->country) || isset($values->phoneno))
                return $values;
            else
                return 'no_value_found';
        }

        //This function will make a join on the table to get posts from the table w.r.t given email
        function returnPosts($email){
            $stmt = self::$pdo->prepare("SELECT title, description FROM tbl_posts WHERE fk_user_id = (SELECT ID FROM tbl_users WHERE email = :email)");
            $stmt->execute(['email' => $email]);
            $posts = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(isset($posts))
                return $posts;
            else
                return 'no post available';
        }
        //Return Username from the database w.r.t email from tbl_user
        function returnUser($email){
            $stmt = self::$pdo->prepare("SELECT username FROM tbl_users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($user->username))
                return $user;
            else
                return 'no user available';
        }

        //Return username of the post w.r.t to title of the post from tbl_users nad tbl_posts by applying a join
        function returnUserofpost($title){
            $stmt = self::$pdo->prepare("SELECT username FROM tbl_users WHERE ID = (SELECT fk_user_id FROM tbl_posts WHERE title = :title)");
            $stmt->execute(['title' => $title]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($user->username))
                return $user;
            else
                return 'no user available';
        }
        function returnPostupontitle($title){
            $stmt = self::$pdo->prepare('SELECT description FROM tbl_posts WHERE title = :title');
            $stmt->execute(['title' => $title]);
            $description = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($description)){
                return $description;
            }
            else{
                die('post_not_found');
            }
        }

        function getPostmaker_id($email){
            $stmt = self::$pdo->prepare('SELECT ID FROM tbl_users WHERE email = :email');
            $stmt->execute(['email' => $email]);
            $id = $stmt->fetch(PDO::FETCH_OBJ);
            if(isset($id)){
                return $id;
            }
            else{
                die('ID not Found');
            }
        }

        function makePost($id, $title, $description){
            $stmt = self::$pdo->prepare('INSERT INTO tbl_posts(fk_user_id, title, description) VALUES(:id, :title, :descr)');
            return $stmt->execute(['id' => $id, 'title' => $title, 'descr' =>$description]);
        }

        //When a user make comment
        function enterComment($commenter, $post_title, $comment){
            $stmt = self::$pdo->prepare("INSERT INTO tbl_comment(comment, fk_user_id, fk_post_id) VALUES(:comment, (SELECT ID FROM tbl_users WHERE email = :commenter), (SELECT ID FROM tbl_posts where title = :post_title))");
            return $stmt->execute(['comment' => $comment, 'commenter' => $commenter, 'post_title' => $post_title]);
        }

        //Display all comments mad on that post
        function showComments($post){
            $stmt = self::$pdo->prepare('SELECT * FROM tbl_comment WHERE fk_post_id = (SELECT ID FROM tbl_posts WHERE title = :title)');
            $stmt->execute(['title' => $post]);
            $comments = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(empty($comments)){
                return null;
            }
            else {
                return $comments;
            }
        }

        //Find the The user's email upon the given ID
        function findUser($id){
            $stmt = self::$pdo->prepare('SELECT * FROM tbl_users WHERE ID = :id');
            $stmt->execute(['id' => $id]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            if(empty($user)){
                return null;
            }
            else {
                return $user;
            }  
        }

        //Retrieve a specific user's post
        public function getAllposts(){
            $stmt = self::$pdo->prepare("SELECT * FROM tbl_posts ORDER BY fk_user_id");
            $stmt->execute();
            $posts = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(empty($posts)){
                return null;
            }
            else{
                return $posts;
            }
        }
        //
        public function validateUser($email, $password){
            $stmt = self::$pdo->prepare('SELECT * FROM tbl_users WHERE email = :email and pass = :password');
            $stmt->execute(['email' => $email, 'password' => $password]);
            if($stmt->fetch(PDO::FETCH_OBJ))
                return true;
            else
                return false;
        }
        //Destructor to destroy all the values
        function __destruct(){
            self::$host = null;
            self::$dbname = null;
            self::$password = null;
            self::$dsn = null;
            self::$pdo = null;
        }
    }

// $db = new Database();
// Database::connect_DB();
// var_dump($db->getAllposts());
// die($db->finduserEmail('9')->email);
// $db->enterComment('jdm@gmail.com','Games','Games are not good for health!');
// $comments = $db->showComments('Games');
// foreach ($comments as $comment) {
//     echo $comment->comment;
// }


