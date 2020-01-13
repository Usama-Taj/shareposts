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

    <style>
      .container #post_heading{
      font-size: 60px !important;
      }
      #opst_title{
        width: fit-content !important;
      }
      #post_description{
        font-family:  sans-serif !important;
        font-size: 30px !important;
        font-weight: 20px !important;
      }

    </style>

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--Java Script Bootstrap-->
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <title><?= $_GET['title'];?></title>

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
          <!--Post-->
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="border border-primary flex-row" style="width:100%;">
                <div id="post_heading">Post:</div>
                  <div class="border border-left-0 border-right-0 border-primary mb-5 ml-5">
                    <h3><?= $title; ?></h3>
                    <h6><?= $email; ?></h6>
                  </div>
                  <span id="post_description" class="border border-left-0 border-right-0 border-top-0 border-success mb-5 ml-5"><?= $post; ?></span>
                </div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col"><hr></div>
                <div class="col-auto">AND</div>
                <div class="col"><hr></div>
              </div>
              <?php if($comments):?>
                <h3>Comments:</h3>
                <?php foreach ($comments as $comment):?>
                  <div class="border-primary ml-5">
                    <h4><?= $db->findUser($comment->fk_user_id)->username; ?></h4>
                    <h6><?= $db->findUser($comment->fk_user_id)->email; ?></h6>
                    <?= $comment->comment_date; ?>
                    <br>
                    <br>
                    <div class="border border-info" style="width:100%;box-sizing:unset;">
                      <p><?=$comment->comment; ?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col"><hr></div>
                    <div class="col-auto">___</div>
                    <div class="col"><hr></div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <br>
                  <br>
                  <h5>Write Your Comment</h5>
                  <form action="post.php?title=<?=$title;?>" method="post">
                      <textarea rows="10" cols="50" type="text" name="comment" id="description_id" placeholder="Comment" required></textarea>
                      <input type="submit" class="btn btn-success btn-outline-dark" value="S U B M I T&nbsp;&nbsp;&nbsp;C O M M E N T">
                  </form>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <!--Footer Started-->
          <?php require('partials/footer.php'); ?>
          <!--Footer Ended-->
  </body>
</html>