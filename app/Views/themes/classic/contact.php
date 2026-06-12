

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
                                <a href="contact" class="nav-link">Contact Us</a>
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
                            <a href="contact" class="nav-link">Contact Us</a>
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

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">Contact Us</h1>
                        <p class="lead">Seamlessly actualize client-based users after out-of-the-box value data through
                            frictionless expertise.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--contact us promo section start-->
        <section class="contact-promo ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-comment fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p>We've got live Social Experts waiting to help you <strong>monday to friday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                            <a href="mailto:info@bintangdata.co.id" class="btn btn-link mt-auto">Chat with us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-envelope fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p>Simple drop us an email at <strong>info@bintangdata.co.id</strong>
                                    and you'll receive a reply within 24 hours</p>
                            </div>
                            <a href="mailto:info@bintangdata.co.id" class="btn btn-primary mt-auto">Email Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fab fa-whatsapp fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
                                <p>Give us a ring.Our Experts are standing by <strong>monday to friday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                            <a href="tel:+62822888800" class="btn btn-link mt-auto">+62-822-888-800</a> <br/> <a href="tel:+6281585108884" class="btn btn-link mt-auto">+62-815-8510-8884 (PIC)</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->

        <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading">
                            <h2>Talk to Our Sales & Marketing Department Team</h2>
                            <p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via
                                standardized infrastructures.</p>
                        </div>
                        <form action="#" class="register-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">First name <span
                                              class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="firstName" required placeholder="First name" aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <label for="lastName" class="mb-1">Last name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last name" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="phone" required placeholder="Phone" aria-label="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="email" required placeholder="Email" aria-label="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" id="yourMessage" required placeholder="How can we help you?" style="height: 120px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Get in Touch</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-10">
                        <div class="contact-us-img">
                            <img src="assets/img/contact-us-img-2.svg" alt="contact us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us form end-->


    </div>