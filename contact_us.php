<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blockverse Infotech Solutions </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="IT Company, Web development App Development, Graphic Designing" name="keywords">
        <meta content="blockverse is it leading company" name="description">

        <!-- Favicon -->
        <link href="favicon.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 

        <!-- Libraries CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <?php require './components/navbar.php'?>

        <!-- Nav End -->

        <!-- Contact Start -->
        <div class="contact mt-100">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>
                        Feel free to get in touch with us. We'd love to hear from you.
                    </p>
                </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <form class="contactForm" action="contact.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Number" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5631794.492194995!2d73.17307466083672!3d27.78344220585883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db4925fb12825%3A0x3055623118c847bd!2sBlockchain%20Infotech%20Solutions%20LLP%20%7C%20Blockchain%20%7C%20App%20Development%20%7C%20Website%20Development%20%7C%20Software%20Development!5e0!3m2!1sen!2sin!4v1695647877198!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact End -->

        <!-- Footer Start -->
              <?php require './components/footer.php' ?>

        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

        <!-- Libraries JS -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Main Javascript -->
        <script src="js/main.js"></script>

    </body>
</html>
