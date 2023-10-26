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

    <style>
        /* Sample CSS to style the website section */
        /* Base styles for all screen sizes */
        .website-section {
            padding: 50px 0;
            background-color: #f0f0f0;
        }

        .section-paragraph p {
            font-size: 18px;
            color: #555;
        }

        .section-cards .card {
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            overflow: hidden;
            border-radius: 10px;
        }

        .card h3 {
            font-size: 24px;
            color: #333;
        }

        /* Media queries for responsiveness */
        @media (min-width: 768px) {

            /* Adjust font size for larger screens */
            .section-heading h2 {
                font-size: 36px;
                color: #333;
            }
        }

        @media (max-width: 767px) {

            /* Adjust styles for smaller screens */
            .section-heading h2 {
                font-size: 28px;
                color: #333;
            }

            .card p {
                font-size: 16px;
                color: #777;
            }
        }
    </style>
</head>

<body>
    <!-- Nav Start -->
    <?php require './components/navbar.php' ?>

    <!-- Nav End -->

    <!-- Header Start-->
    <div class="header">
        <div id="header-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                <li data-target="#header-slider" data-slide-to="1"></li>
                <li data-target="#header-slider" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="carousel-content">
                                <h2>Welcome to Blockverse Infotech Solutions</h2>
                                <p>Your trusted partner for innovative IT solutions.</p>
                                <a class="btn" href="/">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-img">
                                <img src="images/Hand Shake webimage.svg" alt="Image 1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="carousel-content">
                                <h2>Your One stop Digital Solutions</h2>
                                <p>Empowering Your Digital Success, One Solution at a Time.</p>
                                <a class="btn" href="/">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-img">
                                <img src="images/Team work web image.svg" alt="Image 2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="carousel-content">
                                <h2>Your Business, Our Commitment</h2>
                                <p>Your Success, Our Promise: Committed to Your Business Growth.</p>
                                <a class="btn" href="/d">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-img">
                                <img src="images/Best of luck web image.svg" alt="Image 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a class="carousel-control-prev" href="#header-slider" data-slide="prev">
                <i class="ion-ios-arrow-back"></i>
            </a>
            <a class="carousel-control-next" href="#header-slider" data-slide="next">
                <i class="ion-ios-arrow-forward"></i>
            </a>
        </div>
    </div>
    <!-- Header End-->


    <!-- <section class="website-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-content">
                            <div class="section-heading">
                                <h2>Welcome to Our Website</h2>
                            </div>
                            <div class="section-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae fringilla quam. Sed tincidunt libero id quam auctor, at ultrices arcu viverra.</p>
                            </div>
                            <div class="section-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae fringilla quam. Sed tincidunt libero id quam auctor, at ultrices arcu viverra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-cards">
                            <div class="row rounded">
                                <div class="col-md-6">
                                    <div class="card">
                                        <img src="/images/19362653.jpg" alt="Card Image 1">
                                        <div class="card-body">
                                            <h3>Card Title 1</h3>
                                            <p>Some text describing Card 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <img src="card-image-1.jpg" alt="Card Image 1">
                                        <div class="card-body">
                                            <h3>Card Title 1</h3>
                                            <p>Some text describing Card 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <img src="card-image-1.jpg" alt="Card Image 1">
                                        <div class="card-body">
                                            <h3>Card Title 1</h3>
                                            <p>Some text describing Card 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <img src="card-image-1.jpg" alt="Card Image 1">
                                        <div class="card-body">
                                            <h3>Card Title 1</h3>
                                            <p>Some text describing Card 1.</p>
                                        </div>
                                    </div>
                                </div>
                                 Repeat this structure for the other cards 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         -->
    <!-- About Start-->
    <div class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Blockverse Infotech Solutions</h2>
                <p>
                    At Blockverse Infotech Solutions, we excel in technology and innovation, driven by a passion for solving complex challenges with transformative solutions.
                </p>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-img">
                        <img src="images/welcome web image.svg" alt="About Us Image" class="img-fluid">
                    </div>
                    <div class="about-content">
                        <h2>Welcome to Blockverse</h2>
                        <p>
                            Blockverse Infotech Solutions isn't just another tech company; we're the architects of digital
                            evolution. As pioneers in the realm of Blockchain Development, Web Development, and App
                            Development, we don't just write code; we sculpt the future. Our commitment to innovation
                            and excellence isn't a mere statement; it's a blueprint for transforming your vision into reality.
                            At Blockverse, we thrive on challenges, and every project is a canvas where we paint the
                            future with pixels and blockchain blocks. Join us on this unique voyage to uncharted digital
                            territories, where creativity knows no bounds, and technology is the paintbrush for a
                            masterpiece waiting to be unveiled.

                        </p>
                        <a class="btn" href="/about.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/Team Meeting web page.svg" alt="Our Story Image" class="img-fluid">
                    </div>
                    <div class="about-content">
                        <h2>Your One Stop Digital Solutions</h2>
                        <p>
                            Blockverse Infotech Solutions is the beacon of digital innovation, offering a singular destination for all your digital needs. With a fusion of expertise and cutting-edge technology, they craft bespoke solutions, from stunning web designs to powerful mobile apps. Elevate your digital presence and thrive in the online landscape with Blockverse Infotech Solutions by your side. Explore our website now to embark on a journey of digital transformation like never before.
                        </p>
                        <a class="btn" href="/about.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/Busniess Stratgey 1.svg" alt="Our Goal Image" class="img-fluid">
                    </div>
                    <div class="about-content">
                        <h2>Your Business, Our Commitment</h2>
                        <p>
                            Blockverse Infotech Solutions isn't just another tech company; we're the architects of digital evolution. As pioneers in the realm of Blockchain Development, Web Development, and App Development, we don't just write code; we sculpt the future. Our commitment to innovation and excellence isn't a mere statement; it's a blueprint for transforming your vision into reality. At Blockverse, we thrive on challenges, and every project is a canvas where we paint the future with pixels and blockchain blocks. Join us on this unique voyage to uncharted digital territories, where creativity knows no bounds, and technology is the paintbrush for a masterpiece waiting to be unveiled.
                        </p>
                        <a class="btn" href="/about.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Services</title>
        <!-- Add your CSS and other meta tags here -->
    </head>

    <body>
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>
                        At Blockverse Infotech Solutions, we offer a wide range of services to meet your IT needs.
                    </p>
                </div>
                <div class="row  w-100 p-3  min-vh-30">
                    <div class="col-sm-6 col-md-4 col-lg-3 rounded">
                        <div class="service-item">
                            <div class="service-icon">
                                <!-- <i class="ion-ios-desktop"></i> -->
                                <img src="images/19362653.jpg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">Web Design</a></h4>
                                <p>Create visually appealing websites tailored to your brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/webd.jpeg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">Web Development</a></h4>
                                <p>Build scalable web applications for your business goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/appdesi.jpeg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">App Design</a></h4>
                                <p>Create intuitive mobile app interfaces for iOS and Android.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/appdev.jpeg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">App Development</a></h4>
                                <p>Turn your app ideas into reality with custom development.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more services with similar length descriptions here -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/iot.png" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">IoT Software</a></h4>
                                <p>Develop custom solutions for Internet of Things (IoT) applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/block.jpeg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">Blockchain Dev</a></h4>
                                <p>Harness blockchain technology with custom development services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/nft.jpg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">NFT/Tokens</a></h4>
                                <p>Create and manage NFTs and custom tokens for various purposes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="images/embed.jpeg" alt="">
                            </div>
                            <div class="service-detail">
                                <h4><a href="/">Embedded Systems</a></h4>
                                <p>Unlock the potential of embedded systems with our services.</p>
                            </div>
                        </div>
                    </div>

                    <!-- You can add more services as needed -->
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Add your other HTML content and scripts here -->
    </body>

    </html>


    <!-- Service End -->

    <!-- Call To Action Start -->
    <div class="call-to-action">
        <div class="container text-center">
            <div class="section-header">
                <h2>Unlock Your Potential</h2>
                <p>
                    Ready to transform your business with innovative IT solutions?
                </p>
            </div>
            <a class="btn" href="/contact.html">Get Started</a>
        </div>
    </div>

    <!-- Call To Action End -->


    <!--Pricing End-->

    <!-- Skills Start-->
    <!-- <div class="skills">
            <div class="container">
                <div class="section-header">
                    <h2>Our Skills</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="skill-item">
                            <h3>Front End Skills</h3>
                            <div class="skill-name">
                                <p>HTML</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>CSS</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>jQuery</p><p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill-item">
                            <h3>Back End Skills</h3>
                            <div class="skill-name">
                                <p>PHP</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>Laravel</p><p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>MySQL</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Skills End-->


    <!-- Counters Start-->
    <!-- <div class="counters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-person"></i>
                        <h2 data-toggle="counter-up">100</h2>
                        <p>Our Staffs</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-people"></i>
                        <h2 data-toggle="counter-up">200</h2>
                        <p>Our Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-checkmark"></i>
                        <h2 data-toggle="counter-up">300</h2>
                        <p>Completed Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-trending-up"></i>
                        <h2 data-toggle="counter-up">400</h2>
                        <p>Running Projects</p>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Counters End-->

    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Explore Our Work</h2>
                <p>
                    Take a look at some of the projects we've worked on.
                </p>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="img/portfolio-1.jpg" class="img-fluid" alt="Portfolio 1">
                        <a href="img/portfolio-1.jpg" data-lightbox="portfolio" data-title="E-commerce Website" class="link-preview" title="Preview"><i class="ion-md-eye"></i></a>
                        <a href="/portfolio/e-commerce-website" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h3>E-commerce Website</h3>
                        <p>Web Design</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="img/portfolio-2.jpg" class="img-fluid" alt="Portfolio 2">
                        <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Mobile App Development" title="Preview"><i class="ion-md-eye"></i></a>
                        <a href="/portfolio/mobile-app-development" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h3>Mobile App Development</h3>
                        <p>App Development</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="img/portfolio-3.jpg" class="img-fluid" alt="Portfolio 3">
                        <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Corporate Website" title="Preview"><i class="ion-md-eye"></i></a>
                        <a href="/portfolio/corporate-website" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h3>Corporate Website</h3>
                        <p>Web Development</p>
                    </div>
                </div>

                <!-- You can add more portfolio items as needed -->
            </div>
        </div>
    </div>

    <!-- Portfolio End -->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Talented Team</h2>
                <p>
                    Get to know the professionals behind Blockverse Infotech Solutions.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/ajay sir.jpg" class="img-fluid" alt="John P. Haight">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Dr. Ajay Jain</h3>
                        <p>Founder & CEO</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/shivangi mam.jpg" class="img-fluid" alt="John P. Haight">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Dr.Shivangi</h3>
                        <p>CEO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/naman.jpeg" class="img-fluid" alt="David R. Bernard">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Naman Vijayvargiya</h3>
                        <p>COO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/My project.jpg" class="img-fluid" alt="David R. Bernard">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Harshit Sharma</h3>
                        <p>CMO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/aditya.jpg" class="img-fluid" alt="Dana A. Thomas">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Aditya Bishnoi</h3>
                        <p>Cheif Technical Officer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/resham.jpg" class="img-fluid" alt="Ava M. Proctor">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Resham Agarwal</h3>
                        <p>HR Expert & </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/mahendraaa.jpg" class="img-fluid" alt="Ava M. Proctor">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Mahender Saini</h3>
                        <p>Flutter developer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/shivanshu.jpeg" class="img-fluid" alt="Ava M. Proctor">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Shivanshu Tyagi</h3>
                        <p>Flutter Developer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-item">
                    <div class="team-img">
                        <img src="images/prikshits.png" class="img-fluid" alt="Ava M. Proctor">
                        <div class="team-social">
                            <a href="#"><i class="ion-logo-twitter"></i></a>
                            <a href="#"><i class="ion-logo-facebook"></i></a>
                            <a href="#"><i class="ion-logo-linkedin"></i></a>
                            <a href="#"><i class="ion-logo-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Prikshit Saini</h3>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Blockverse Infotech Solutions</h2>
                <p>
                    Have questions or need assistance? Reach out to us!
                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form">
                        <form class="contactForm" onsubmit="sendEmail(); reset(); return false;">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="number" name="number" placeholder="Number" required="required" data-validation-required-message="Please enter your Number" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter your Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit" id="sendMessageButton">Send Message</button></div>
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
    <Script src="mail/contact.js"></Script>
    <script src="path-to-your-jqBootstrapValidation-plugin.js"></script>



    <!-- Main Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
<!-- k=rsa;t=s;p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCbmGbQMzYeMvxwtNQoXN0waGYaciuKx8mtMh5czguT4EZlJXuCt6V+l56mmt3t68FEX5JJ0q4ijG71BGoFRkl87uJi7LrQt1ZZmZCvrEII0YO4mp8sDLXC8g1aUAoi8TJgxq2MJqCaMyj5kAm3Fdy2tzftPCV/lbdiJqmBnWKjtwIDAQABz -->
<!-- api._domainkey -->
<!-- tracking -->
<!-- api.elasticemail.com -->



<!-- 3B42F0DB7BB7FCA290866003683856EBDA64 -->