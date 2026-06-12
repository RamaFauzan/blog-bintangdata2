<!DOCTYPE html>
<html lang="en" data-bs-theme="light">



<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <header class="main-header w-100 z-10">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.php" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/logo-white.png" alt="logo" class="img-fluid logo-white" style="width:250px;" />
                        <img src="assets/logo.png" alt="logo" class="img-fluid logo-color" style="width:250px;" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <i class="flaticon-menu"
                             data-bs-toggle="offcanvas"
                             data-bs-target="#offcanvasWithBackdrop"
                             aria-controls="offcanvasWithBackdrop"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                            <li>
                                <a href="index.php" class="nav-link">Home</a>
                            </li> 
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full-3">
                                        <?php include 'include/menu.php'; ?>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a href="contact-us.php" class="nav-link">Contact Us</a>
                            </li> 

                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i
                                         class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i
                                         class="flaticon-moon-1 fs-lg"></i></div>
                        </a> <a href="login.php" class="btn btn-link text-decoration-none me-2">Sign In</a>
                        <a href="login.php" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.php" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/logo.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li>
                            <a href="index.php" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <?php include 'include/menu.php'; ?>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="contact-us.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.php" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.php" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header> <!--header section end-->

        <!--hero section start-->
        <section class="hero-section ptb-120" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-5">Engineering the Future of Digital Communities</h1>
                            <p class="lead">We build enterprise-grade social networking, video sharing, and live streaming platforms designed for creators, businesses, organizations, and large-scale communities.</p>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <ul class="nav subscribe-feature-list mt-3">
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i>Enterprise Social Platforms</span>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i>High-Performance Video Technology</span>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i>Social Media Platform Development</span>
                                    </li>                                    
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service hide-medium">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/image-1.svg" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img style="width:300px; z-index: 99;" src="assets/icon.png" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="hero-img-wrap position-relative">
                                <div class="hero-screen-wrap">
                                    <div class="phone-screen">
                                        <img src="assets/img/screen/phone-screen.png" alt="hero image" class="position-relative img-fluid">
                                    </div>
                                    <div class="mac-screen">
                                        <img src="assets/img/screen/mac-screen.png" alt="hero image" class="position-relative img-fluid rounded-custom">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--hero section end-->





        <!--feature promo section start-->
        <section class="pricing-section position-relative overflow-hidden bg-dark text-white pt-120" style="background: url('assets/img/page-header-bg.svg')no-repeat center center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h2>Our Special Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="50">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0 z-2">
                                <div class="feature-icon d-inline-block bg-primary-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/7316/7316979.png">
                                </div>
                                <h3 class="h5">Video Sharing & Live Streaming Platform</h3>
                                <p class="mb-0">A modern video ecosystem for creators, organizations, and communities to share, stream, and monetize content.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0">
                                <div class="feature-icon d-inline-block bg-danger-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/2622/2622166.png">
                                </div>
                                <h3 class="h5">Social Networking Platform</h3>
                                <p class="mb-0">Build meaningful connections through interactive communities, messaging, content sharing, and social engagement tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0">
                                <div class="feature-icon d-inline-block bg-success-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/7253/7253192.png">
                                </div>
                                <h3 class="h5">Membership Community Platform</h3>
                                <p class="mb-0">Exclusive digital communities with membership management, premium content, and subscription-based access.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="50">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0 z-2">
                                <div class="feature-icon d-inline-block bg-primary-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/9743/9743156.png">
                                </div>
                                <h3 class="h5">Influencer & Brand Collaboration Platform</h3>
                                <p class="mb-0">Connecting brands with creators and influencers for marketing campaigns and audience engagement.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0">
                                <div class="feature-icon d-inline-block bg-danger-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/3043/3043621.png">
                                </div>
                                <h3 class="h5">News & Media Publishing Platform</h3>
                                <p class="mb-0">A digital publishing ecosystem designed for journalists, media organizations, and content publishers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0">
                                <div class="feature-icon d-inline-block bg-success-soft rounded-circle mb-32">
                                    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/128/1162/1162499.png">
                                </div>
                                <h3 class="h5">Social Commerce & Professional Platform</h3>
                                <p class="mb-0">Connect, collaborate, and grow through professional networking and social commerce.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning left-5"></div>
          
        </section> <!--feature promo section end-->





    </div>


    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>