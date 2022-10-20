<html lang="en"><head>
    <title>ThinkingDutch | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 box-shadow">
        <a href="/en" class="my-0 mr-md-auto">
            <img class="navbar-image" src="../assets/img/logo_transparant.png">
        </a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/en">Home</a>
            <a class="p-2 text-dark" href="/en/products">Products</a>
            <a class="p-2 text-dark" href="/en/pricing">Pricing</a>
            <a class="p-2 text-dark" href="/en/contact">Contact</a>
        </nav>
        <div class="dropdown">
            <button class="dropdown-toggle language-button" type="button" id="changeLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-sm language-flag" alt="UK flag" src="../assets/img/languages/uk.png">
                <span>English</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="changeLanguage">
                <a class="dropdown-item" href="/en">
                    <img class="rounded-sm language-flag" alt="UK flag" src="../assets/img/languages/uk.png">
                    English
                </a>
                <a class="dropdown-item" href="/nl">
                    <img class="rounded-sm language-flag" alt="Dutch flag" src="../assets/img/languages/nl.png">
                    Dutch
                </a>
            </div>
        </div>
    </div>
</header>
<main class="container">
    <div class="row mt-5">
        <div class="hero py-5">
            <div class="container">
                <div class="row py-4 py-lg-6">
                    <div class="col-lg-7 px-lg-6 p-4">
                        <div class="col-lg-10 ms-lg-5">
                            <div class="mb-4">
                                <div>
                                    <h1 class="text-heading">
                                        Makes <span class="bold-heading">your</span> company<br>
                                        accessible.
                                    </h1>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div>
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-blue btn-lg" href="/en/contact.php" role="button">
                                Contact us
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="9 6 15 12 9 18"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-2 d-none d-md-block d-flex align-items-center justify-content-center justify-content-lg-start">
                        <img class="img-fluid d-none d-sm-block" src="../assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="text-center text-lg-start bg-light text-muted">
    <div class="py-3">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="mb-4">
                        <img class="footer-logo" alt="ThinkingDutch logo" src="../assets/img/logo_transparant.png">
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et rhoncus neque, vitae rutrum ligula.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Products</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Contact</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        ThinkingDutch<br>
                        Theodora Haverstraat 18<br>
                        5122BD Gilze-Rijen<br>
                        The Netherlands<br>
                    </p>
                    <p>
                        rogier@thinkingdutch.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 d-flex justify-content-between" style="background-color: rgba(0, 0, 0, 0.05);">
        <small>
            Coc: <b>18083274</b> | VAT: <b>NL001676141B50</b> | Bank Details: <b>NL93 RABO 0125 4250 07</b>
        </small>
        <div class="list-unstyled d-flex">
            © <?php echo date("Y"); ?> <a class="text-reset fw-bold ml-1" href="/">ThinkingDutch.com</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>