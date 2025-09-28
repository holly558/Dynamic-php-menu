<!doctype html>
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
                <img src="img/header-bg.jpg" class="img-fluid">
                <div class="hero-text pt-4">
                    <h2>Contact</h2>
                </div>
            </div>

            <section class="contact section-gap" id="contact-us">




                <div class="container">
                    <div class="row g-5 ">

                        <div class="col-lg-6 p-5 bg-dark text-light">
                            <h2 class="m">Get in Contact</h2>
                            <p>Take a look at our FAQs for answers to our most common queries, or get in touch using the contact form below. </p>
                            <div class="card shadow-sm">
                                <div class="card-body bg-dark">
                                    <form class="p-3">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Your name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..."></textarea>
                                        </div>

                                        <div class="text-center pt-2">
                                            <button type="submit" class="primary-btn text-uppercase w-75">Submit</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-4">
                            <img src="img/museum.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </section>

        </main>


        <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>