<html lang="nl"><head>
    <title>ThinkingDutch | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <div class="my-0 mr-md-auto">
            <img class="navbar-image" src="../assets/img/logo_transparant.png">
        </div>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/en">Home</a>
            <a class="p-2 text-dark" href="/en/products">Products</a>
            <a class="p-2 text-dark" href="/en/pricing">Pricing</a>
            <a class="p-2 text-dark" href="/en/contact">Contact</a>
        </nav>
        <div class="dropdown">
            <button class="dropdown-toggle language-button" type="button" id="changeLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>English</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="changeLanguage">
                <a class="dropdown-item" href="/en">
                    <img class="rounded-sm language-flag" alt="United States flag" src="../assets/img/languages/us.png">
                    English
                </a>
                <a class="dropdown-item" href="/nl">
                    <img class="rounded-sm language-flag" alt="The Netherlands flag" src="../assets/img/languages/nl.png">
                    Dutch
                </a>
            </div>
        </div>
    </div>
</header>
<main class="container">
    <div class="row mt-5">

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
                        <a href="#!" class="text-reset">Telefonie</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Product #2</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Product #3</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Links
                    </h6>
                    <p>
                        <a href="/" class="text-reset">Pricing</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        Adresgegevens<br>
                        1111EK Stad<br>
                        The Netherlands
                    </p>
                    <p>
                        info@thinkingdutch.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © <?php echo date("Y"); ?>
        <a class="text-reset fw-bold" href="/">ThinkingDutch.com</a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>