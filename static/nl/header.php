<?php
    $currentPage = explode("/", str_replace(".php", "", $_SERVER['REQUEST_URI']))[2];
    $switchPageUrl = $currentPage;
    if(!$currentPage) $currentPage = 'home';
?>
<html lang="nl">
<head>
    <title>ThinkingDutch | <?php echo ucfirst($currentPage); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<header>
    <div id="navbar" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 box-shadow navbar-fixed">
        <a href="/nl" class="my-0 mr-md-auto">
            <img class="navbar-image" src="../../assets/img/logo_transparant.png">
        </a>
        <nav class="mb-3 mt-3 mb-md-0 mt-md-0">
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'home') echo 'nav-active' ?>" href="/nl">Home</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'products') echo 'nav-active' ?>" href="/nl/products">Producten</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'pricing') echo 'nav-active' ?>" href="/nl/pricing">Prijzen</a>
            <a class="p-2 p-md-3 nav-item <?php if($currentPage == 'contact') echo 'nav-active' ?>" href="/nl/contact">Contact</a>
        </nav>
        <div class="dropdown nav-item">
            <a class="dropdown dropdown-toggle language-button" id="changeLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-sm language-flag" alt="Dutch flag" src="../../assets/img/languages/nl.png">
                <span>Nederlands</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="changeLanguage">
                <a class="dropdown-item" href="/en/<?php echo $switchPageUrl; ?>">
                    <img class="rounded-sm language-flag" alt="UK flag" src="../../assets/img/languages/uk.png">
                    Engels
                </a>
                <a class="dropdown-item" href="/nl/<?php echo $switchPageUrl; ?>">
                    <img class="rounded-sm language-flag" alt="Dutch flag" src="../../assets/img/languages/nl.png">
                    Nederlands
                </a>
            </div>
        </div>
    </div>
</header>