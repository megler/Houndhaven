<!DOCTYPE html>
<html lang="en">
<head>
<?php include("inc/meta.php"); ?>
<title>Houndhaven</title>
</head>
<body>
    <header>
      <?php include("inc/nav.php"); ?>  
    </header>
    <div class="container">
        <div class="row">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="images/Tramp1-min.jpg" alt="Tramp">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="adoptable.php#tramp" class="btn btn-warning">Learn More About Me!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Marshall1-min.jpg" alt="Marshall">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="adoptable.php#marshall" class="btn btn-warning">Learn More About Me!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Hopper2-min.jpg" alt="Hopper">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="adoptable.php#hopper" class="btn btn-warning">Learn More About Me!</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>
        </div>
        <div class="row quad-col">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        Adopt!
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Our Dogs Are Awesome!</h4>
                        <div class="text-center">
                            <div class="card-body adoptPic">
                                <img class="img-fluid" src="images/loki-min.jpg" alt="Loki">
                                <a href="adoptable.php" class="btn btn-danger adopt-btn">See Available Dogs!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-info text-center">
                        Volunteer
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Make A Difference!</h4>
                        <div class="text-center">
                            <div class="card-body vol-img">
                                <img class="img-fluid" src="images/volunteer-min.jpg" alt="Volunteer">
                                <a href="volunteer.php" class="btn btn-danger adopt-btn">Become A Volunteer!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-info text-center">
                        Donate
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Be Our Hero!  Donate Today!</h4>
                        <div class="text-center">
                            <div class="card-body adoptPic">
                                <img class="img-fluid" src="images/donate-min.jpg" alt="Volunteer">
                                <a href="donate.php" class="btn btn-danger adopt-btn">Donate Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <h1>Who We Are...</h1>
            <p class="info">Houndhaven, Inc. rescues dogs and puppies from euthanasia at kill shelters. We care for them until they can be placed in loving homes or with another rescue group. We believe that these lives are precious, and we are strictly a no kill organization.</p>
            <h2 class="text-right"> Our mission is life.</h2>
        </div>
        <section id="photos">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <header>
                            <h1 class="text-center seuss">Oh The Places You Will Go!</h1>
                            <h2 class="text-center seuss">Houndhaven dogs find loving homes where they are family.</h2>
                        </header>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/BodhiFull-min.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/BodhiThumb-min.jpg" class="img-fluid" alt="Bodhi">
                            </a>
                                <a href="images/WillowFull-min.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/WillowThumb-min.jpg" class="img-fluid" alt="Willow">
                            </a>
                                <a href="images/HowardFull-min.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/HowardThumb-min.jpg" class="img-fluid" alt="Howard">
                            </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/ChloeFull-min.png" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/ChloeThumb-min.png" class="img-fluid" alt="Chloe">
                            </a>
                                <a href="images/BeauFull-min.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/BeauThumb-min.jpg" class="img-fluid" alt="Beau">
                            </a>
                                <a href="images/KimberFull-min.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                <img src="images/thumbs/KimberThumb-min.jpg" class="img-fluid" alt="Kimber">
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
    </div>
    <footer class="footer">
        <?php include("inc/footer.php"); ?>
    </footer>
    <?php include("inc/foot-scripts.php"); ?>
</body>

</html>