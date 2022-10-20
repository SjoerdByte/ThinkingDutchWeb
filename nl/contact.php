<html lang="nl">
<head>
    <title>ThinkingDutch | Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 box-shadow">
        <a href="/nl" class="my-0 mr-md-auto">
            <img class="navbar-image" src="../assets/img/logo_transparant.png">
        </a>
        <nav class="mb-3 mt-3 mb-md-0 mt-md-0">
            <a class="p-3 nav-item" href="/nl">Home</a>
            <a class="p-3 nav-item" href="/nl/products.php">Producten</a>
            <a class="p-3 nav-item" href="/nl/pricing.php">Prijzen</a>
            <a class="p-3 nav-item nav-active" href="/nl/contact.php">Contact</a>
        </nav>
        <div class="dropdown nav-item">
            <a class="dropdown dropdown-toggle language-button" id="changeLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-sm language-flag" alt="The Netherlands flag" src="../assets/img/languages/nl.png">
                <span>Nederlands</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="changeLanguage">
                <a class="dropdown-item" href="/en">
                    <img class="rounded-sm language-flag" alt="United Kingdom flag" src="../assets/img/languages/uk.png">
                    Engels
                </a>
                <a class="dropdown-item" href="/nl">
                    <img class="rounded-sm language-flag" alt="The Netherlands flag" src="../assets/img/languages/nl.png">
                    Nederlands
                </a>
            </div>
        </div>
    </div>
</header>
<main class="container">
    <div class="row mt-5">
        <div class="col-12 col-lg-6">
            <h4>Contacteer ons</h4>
            <form method="POST" action="/backend/contact.php">
                <div class="row mt-4">
                    <?php
                        if (isset($_GET['status'])) {
                    ?>
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            <small>
                            <?php
                                if($_GET['status'] == 'success') {
                                    echo 'We hebben uw bericht ontvangen, we nemen snel contact met u op!';
                                }
                            ?>
                            </small>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw naam</label>
                            <input required type="text" name="name" class="form-control" placeholder="Uw naam">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw email</label>
                            <input required type="email" name="email" class="form-control" placeholder="Uw email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Bericht</label>
                            <textarea required class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 text-right">
                    <div class="col-12">
                        <button class="btn btn-dark">Versturen</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <h4>Contact gegevens</h4>
            <div class="mt-4 contact">
                <p>
                    <img class="business-icon" src="../assets/img/logo_icon_transparant.png">
                    ThinkingDutch B.V.<br>
                    Theodora Haverstraat 18<br>
                    5122BD Gilze-Rijen<br>
                    Nederland
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/mail.svg">
                    <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/phone.svg">
                    <a href="tel:+31858768712">085 8768712</a>
                </p>
            </div>
        </div>
    </div>
</main>
<footer class="text-center text-lg-start bg-light text-muted mt-5">
    <div class="py-3">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-12 col-lg-4 mx-auto mb-4">
                    <h6 class="mb-4">
                        <img class="footer-logo" alt="ThinkingDutch logo" src="../assets/img/logo_transparant.png">
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et rhoncus neque, vitae rutrum ligula.
                    </p>
                </div>
                <div class="col-12 col-lg-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Links
                    </h6>
                    <p>
                        <a href="/nl/" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="/nl/products.php" class="text-reset">Producten</a>
                    </p>
                    <p>
                        <a href="/nl/pricing.php" class="text-reset">Prijzen</a>
                    </p>
                    <p>
                        <a href="/nl/contact.php" class="text-reset">Contact</a>
                    </p>
                </div>
                <div class="col-12 col-lg-4 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        ThinkingDutch B.V.<br>
                        Theodora Haverstraat 18<br>
                        5122BD Gilze-Rijen<br>
                        Nederland
                    </p>
                    <p>
                        info@thinkingdutch.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 d-flex justify-content-between" style="background-color: rgba(0, 0, 0, 0.05);">
        <small>
            KvK: <b>18083274</b> | BTW: <b>NL001676141B50</b> | Rabobank: <b>NL93 RABO 0125 4250 07</b>
        </small>
        <div class="list-unstyled d-flex">
            © <?php echo date("Y"); ?> <a class="text-reset fw-bold ml-1" href="/">ThinkingDutch.com</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>