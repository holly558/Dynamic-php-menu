<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, museum!</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

</head>

<body>
    <?php include 'header.php';?>
        <main>
            <!--hero-->
            <div class="hero-image">
                <img src="img/header-bg.jpg" class="img-fluid" alt="">
                <div class="hero-text pt-4">
                    <h2>Upcoming Events</h2>
                </div>
            </div>
            <!-- Start upcoming-event Area -->
            <section class="upcoming-event-area section-gap" id="events">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-5 col-lg-10">
                            <div class="title text-center">
                                <h2 class="mb-10">Checkout our Upcoming Events</h2>
                                <p>Who are in extremely love with eco friendly system.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 event-left">
                            <div class="single-events">
                                <img class="img-fluid" src="img/u1.jpg" alt="">
                                <a href="#"><h4>Event on the rock solid carbon</h4></a>
                                <h6><span>21st February</span> at Central government museum</h6>
                                <p>
                                     Vivamus nec diam ut ipsum tincidunt ultricies. Vestibulum vitae arcu mi. 
                                </p>
                                <a href="#" class="primary-btn text-uppercase">View Details</a>
                            </div>
                            <div class="single-events">
                                <img class="img-fluid" src="img/u3.jpg" alt="">
                                <a href="#"><h4>Event on the rock solid carbon</h4></a>
                                <h6><span>21st February</span> at Central government museum</h6>
                                <p>
                                Vivamus nec diam ut ipsum tincidunt ultricies. Vestibulum vitae arcu mi. 
                                </p>
                                <a href="#" class="primary-btn text-uppercase">View Details</a>
                            </div>
                        </div>
                        <div class="col-lg-6 event-right">
                            <div class="single-events">
                                <a href="#"><h4>Event on the rock solid carbon</h4></a>
                                <h6><span>21st February</span> at Central government museum</h6>
                                <p>
                                 Vivamus nec diam ut ipsum tincidunt ultricies. Vestibulum vitae arcu mi. 

                                </p>
                                <a href="#" class="primary-btn text-uppercase">View Details</a>
                                <img class="img-fluid" src="img/u2.jpg" alt="">
                            </div>
                            <div class="single-events">

                                <a href="#"><h4>Event on the rock solid carbon</h4></a>
                                <h6><span>21st February</span> at Central government museum</h6>
                                <p>
                                     Vivamus nec diam ut ipsum tincidunt ultricies. Vestibulum vitae arcu mi. 
                                </p>
                                <a href="#" class="primary-btn text-uppercase">View Details</a>
                                <img class="img-fluid" src="img/u4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End upcoming-event Area -->

        </main>

        <?php include 'footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>
