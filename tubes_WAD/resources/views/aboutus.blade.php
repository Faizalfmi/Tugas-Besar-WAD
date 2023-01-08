<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ANS | About US</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="Home_after.php" class="navbar-brand ms-lg-5">
        <a class="navbar-brand" href="#"><img src="images/logo.png" width="150" height="50"></a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/aboutus" class="nav-item nav-link active">About Us</a>
                
                <div class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product/Service</a>
                    <div class="dropdown-menu m-0">
                        <a href="/service" class="dropdown-item">Service</a>
                        <a href="/product" class="dropdown-item">Product</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact Us</a>
                @if(Auth::user())
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="/profile" class="dropdown-item">Profile</a>
                        <a href="/logout" class="dropdown-item">Logout</a>
                    </div>
                </div>
                @else
                <a href="/login" class="nav-item nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/aboutus.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h1 class="display-5 text-white mb-md-4">PT Adita Nusantara Solution (ANS)</h1>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="/img/home.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h1 class="display-5 mb-0">PT Adita Nusantara Solution (ANS)</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Which founded in 2016, a IT Consulting and System Integrator Company which running by management, who has an experience in Network and System Integration Services. ANS’s commitment itself is to provide excellent services and solutions to achieve high level of customer satisfaction by providing fully integration from WAN to LAN to desktop solution, which well knows as END-to-END service.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="container-fluid bg-light text-dark mt-5 py-5">
        <div class="container pt-4">
            <div class="row g-5">
                <h1 class="text-dark" style="text-align:center;">Our Vision & Mission</h1>
            </div>
            <div>
                <strong><h3 class="mb-2" style="text-align:center;">Vision</h3></strong>
                <p class="text-body fst-italic mb-2" style="text-align:center;">To become one of the world’s leading companies, bringing innovations to improve the way IT Society works and lives</p>
            </div>
            <div>
                <strong><h3 class="mb-2" style="text-align:center;">Mission</h3></strong>
                <p class="text-body fst-italic mb-2" style="text-align:center;">Dedicated to add value to our partners: committing to reliability and trustworthiness in business practice as our foundation for successful long-term relationship with our customer, business partner and suppliers</p>
            </div>
        </div>
    </div>
    <!-- vission Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
            <h1 class="text-white mb-7" style="text-align:center;">System Engineer Certification</h1>
                <div class="col-lg-4 col-md-6">
                    <p class="mb-2 text-white">PANDUIT Certified Engineer</p>
                    <p class="mb-2 text-white">COMMSCOPE Certified Engineer</p>
                    <p class="mb-2 text-white">CCVP  (Cisco Certified Voice Professional)</p>
                    <p class="mb-2 text-white">CCSP  (Cisco Certified Security Professional)</p>
                    <p class="mb-2 text-white">CCDP  (Cisco Certified Design Professional)</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <p class="mb-2 text-white">CCNA  (Cisco Certified Network Associate)</p>
                    <p class="mb-2 text-white">MCTS  (Microsoft Certified Technology Specialist)</p>
                    <p class="mb-2 text-white">MCITP  (Microsoft Certified IT Professional)</p>
                    <p class="mb-2 text-white">CSSA  (Certified Sonicwall Security Administrator)</p>
                    <p class="mb-2 text-white">Hitachi  (Certified Modular Integration Specialist)</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <p class="mb-2 text-white">VMWare  Certified Engineer</p>
                    <p class="mb-2 text-white">CEH (Certified Ethical Hacker)></p>
                    <p class="mb-2 text-white">IBM Certified System Administrator – WebSphere MQ 7.0</p>
                    <p class="mb-2 text-white">BM Certified System Administrator – WebSphere Application Server Network Deployment v7.0</p>
                </div>
            </div>
        </div>
    </div>
    <!-- vission End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Contact Us</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jl. Maulana Hasanudin No.38A, Kp. Cipondoh Rt. 005 Rw. 008 Cipondoh Kota Tangerang 15148 Email: info@adita-ns.com Phone: 021 55712013</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@adita-ns.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>021 55712013</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>