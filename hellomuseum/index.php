<!--Museum application with dynamic php script-->
<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, museum!</title>

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
                <img src="img/hero4.jpg" class="img-fluid" alt="">
                <div class="hero-text w-75 w-md-75 pt-5">
                    <h1>Explore The National Museum of Natural History </h1>
                    <h2 class="pt-2">Book a Virtual Tour Today!</h2>

                </div>
            </div>
            
            <!-- Start quote Area -->
            <section class="quote-area section-gap">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 quote-left text-left">
                            <hr class="mb-4" style="width:50%;color:orange;opacity:1;height:2px;text-align:center;margin:auto;">
                            <span class="pt-2">The Natural World is the </span>greatest source of excitement,
                            <br> the wings to the <span>mind</span>, and flight
                            <br> to the <span>imagination</span>.

                        </div>
                        <div class="col-lg-6 quote-right py-5 px-1">
                            <h2>Welcome</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End quote Area -->
        </main>

        <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="main.js"></script>


</body>

</html>