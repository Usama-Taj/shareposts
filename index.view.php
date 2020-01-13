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

    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://kit.fontawesome.com/205a835a0e.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
  <?php require('partials/header.php'); ?>
      <!--Navigation Bar Ended-->

      <!--Slider-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://stmed.net/sites/default/files/torres-del-paine-wallpapers-28076-2892860.jpg" alt="First slide">
              <div class="carousel-caption">
                <h3 class="display-4">27 APRIL #rock #newhits #music</h3>
                <span class="display-5">Our special city rock festival</span><br><br>
                <button type="button" class="btn btn-primary btn-md btnround">VIEW MORE</button>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://i.redd.it/p4zcuvebuvwz.jpg" alt="Second slide">
                <div class="carousel-caption">
                  <h3 class="display-4">HTML Homepage Templates</h3>
                  <span class="display-5">30 APRIL #pop #concet #newalbums</span><br><br>
                  <button type="button" class="btn btn-primary btn-md btnround">VIEW MORE</button>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.wallpapermaiden.com/image/2017/09/13/fantasy-world-castle-knights-magician-armor-floating-ships-bridge-fantasy-17650.jpg" alt="Third slide">
              <div class="carousel-caption">
                  <h3 class="display-4">HTML Homepage Templates</h3>
                  <span class="display-5">22 APRIL #Sport #Show #Music</span><br><br>
                  <button type="button" class="btn btn-primary btn-md btnround">VIEW MORE</button>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
          <!--Slider Ended-->

          <br>
          <!--Cards-->
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <div class="row">
              <div class="col-sm-3 col-sm-6 col-md-3 card" id="card1">
                <img src="https://mobirise.com/html-templates/html-homepage-template/assets/images/mbr-626x352.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h4>Night Laser Show</h4>
                  <p class="card-text">#hip-hop #rnb #dance</p>
                  <p class="card-text">
                      We are happy to announce this special laser show.
                  </p>
                  <button type="button" class="btn btn-primary btn-lg" id="navigation_btn_id">See more...</button>
                </div>
              </div>
              <div class="col-sm-3 col-sm-6 col-md-3 card">
                  <img src="https://mobirise.com/html-templates/html-homepage-template/assets/images/mbr-626x939.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h4>Live Music</h4>
                    <p class="card-text">#live #rock #alternative</p>
                    <p class="card-text">
                        Special event for our rock fans! Live music show.
                    </p>
                    <button type="button" class="btn btn-primary btn-lg" id="navigation_btn_id">See more...</button>
                  </div>
              </div>
              <div class="col-sm-3 col-sm-6 col-md-3 card">
                    <img src="https://mobirise.com/html-templates/html-homepage-template/assets/images/mbr-1-626x352.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                    <h4>DJ - Master Class</h4>
                    <p class="card-text">#dj #master-class</p>
                    <p class="card-text">
                      DJ WoodSmell will teach you new tricks: please sign up.
                    </p>
                    <button type="button" class="btn btn-primary btn-lg" id="navigation_btn_id">See more...</button>
                </div>
              </div>
                  <div class="col-sm-3 col-sm-6 col-md-3 card">
                      <img src="https://mobirise.com/html-templates/html-homepage-template/assets/images/mbr-626x417.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h4>Best Night Party</h4>
                        <p class="card-text">#party #club</p>
                        <p class="card-text">
                            Our traditional event: best hits all night long.
                        </p>
                        <button type="button" class="btn btn-primary btn-lg" id="navigation_btn_id">See more...</button>
                      </div>
                    </div>
                    <div class="col-sm-3 col-sm-6 col-md-3 card">
                        <img src="https://mobirise.com/html-templates/html-homepage-template/assets/images/mbr-626x417.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                          <h4>Best Night Party</h4>
                          <p class="card-text">#party #club</p>
                          <p class="card-text">
                              Our traditional event: best hits all night long.
                          </p>
                          <button type="button" class="btn btn-primary btn-lg" id="navigation_btn_id">See more...</button>
                        </div>
                      </div>
                  </div>  
            </div>
          </div>
          <br>

          <!--Footer Started-->
          <?php require('partials/footer.php'); ?>
          <!--Footer Ended-->
  </body>
</html>