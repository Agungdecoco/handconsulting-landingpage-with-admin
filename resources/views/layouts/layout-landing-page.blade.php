<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href='https://fonts.googleapis.com/css?family=Poppins:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap'
        rel='stylesheet'>

    <title>Hand-Consulting</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-finance-business.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Hand Consulting</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/#top">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="btn-group">
                                <a class="nav-link" href="/#services">Our Services</a>
                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split nav-link"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <span class="visually-hidden">Toggle Dropdown</span> --}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/services#tabs-1">Management</a></li>
                                    <li><a class="dropdown-item" href="/services#tabs-2">Legal</a></li>
                                    <li><a class="dropdown-item" href="/services#tabs-3">Complience</a></li>
                                    <li><a class="dropdown-item" href="/services#tabs-4">Outsourcing</a></li>
                                    <li><a class="dropdown-item" href="/services#tabs-5">IT Solution</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Location</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nostrum?</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63309.12673346703!2d112.66670627910159!3d-7.3740145999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e368c741d6f3%3A0x358cf03e3faf4bae!2sARR!5e0!3m2!1sen!2sid!4v1645086331684!5m2!1sen!2sid"
                        width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Our Service</h4>
                    <ul class="menu-list">
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">Complience</a></li>
                        <li><a href="#">Outsourcing</a></li>
                        <li><a href="#">IT Solution</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>FAQ</h4>
                    <ul class="menu-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">How We Work</a></li>
                        <li><a href="#">Quick Support</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Follow Us</h4>
                    <p style="font-size:15px"><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;081259771971</p>
                    <p style="font-size:15px"><i class="fa fa-envelope"></i>&nbsp;&nbsp;hand17081945@gmail.com</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- <div class="col-md-3 footer-item last-item">
          <h4>Contact Us</h4>
          <div class="contact-form">
            <form id="contact footer-contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                      placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div> -->
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2022 Hand Consulting Co., Ltd.
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Additional Scripts -->
    {{-- <script src="{{ asset('assets/js/jquery.singlePageNav.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script>
        $(function() {
            // Single Page Nav
            $('#navbarResponsive').singlePageNav({
                'offset': 100,
                'filter': ':not(.external)'
            });

            // On mobile, close the menu after nav-link click
            $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function() {
                $('#navbarResponsive').removeClass('show');
            });
        });
    </script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>
