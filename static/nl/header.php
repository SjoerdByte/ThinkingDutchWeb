
<?php
    $currentPage = explode("/", str_replace(".php", "", $_SERVER['REQUEST_URI']))[2];
    $switchPageUrl = $currentPage;
    if(!$currentPage) $currentPage = 'home';

    if (!empty($_SERVER['QUERY_STRING'])) {
    header("Location: https://thinkingdutch.com/nl/pricing", true, 301);
    exit();
}

?>
<html lang="nl">
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5QZH34FNQT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5QZH34FNQT');
</script>

    <title>ThinkingDutch | <?php echo ucfirst($currentPage); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="/assets/js/carsys.js"></script>
    <script src="/assets/js/wincar.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<header>
    <div id="navbar" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 box-shadow navbar-fixed">
        <a href="/nl" class="my-0 mr-md-auto">
            <img class="navbar-image" src="/assets/img/logo_transparant.png">
        </a>
        <nav class="mb-3 mt-3 mb-md-0 mt-md-0">
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'home') echo 'nav-active' ?>" href="/nl">Home</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'products') echo 'nav-active' ?>" href="/nl/products">Producten</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'pricing') echo 'nav-active' ?>" href="/nl/pricing">Prijzen</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'contact') echo 'nav-active' ?>" href="/nl/contact">Contact</a>
        </nav>
        <div class="dropdown nav-item">
            <a class="dropdown dropdown-toggle language-button" id="changeLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-sm language-flag" alt="Dutch flag" src="/assets/img/languages/nl.png">
                <span>Nederlands</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="changeLanguage">
                <a class="dropdown-item" href="/en/<?php echo $switchPageUrl; ?>">
                    <img class="rounded-sm language-flag" alt="UK flag" src="/assets/img/languages/uk.png">
                    Engels
                </a>
                <a class="dropdown-item" href="/nl/<?php echo $switchPageUrl; ?>">
                    <img class="rounded-sm language-flag" alt="Dutch flag" src="/assets/img/languages/nl.png">
                    Nederlands
                </a>
            </div>
        </div>
    </div>
</header>