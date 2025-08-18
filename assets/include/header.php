<!doctype html>

<html lang="en">

<head>
    <title>VidLock</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="./assets/include/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="./assets/include/bootstrap.css" rel="stylesheet" />
    <script src="./assets/include/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./assets/imgs/logo.png" type="image/x-icon">
</head>
<style>
    @font-face {
        font-family: "Material Symbols Rounded";
        src: url("./assets/fonts/MaterialSymbolsRounded.ttf") format('truetype'), url('./assets/fonts/MaterialSymbolsRounded.woff2') format('woff2');
    }

    .mico {
        font-family: "Material Symbols Rounded";
        font-variation-settings: "wght" 700, "opsz" 24, "GRAD" 0, "FILL" 1;
    }
</style>
<script>
    let device = '';
    if (navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)) {
        const path = window.location.pathname;
        if ($path == "/watch.php" || $path == "/watch") {
            let params = new URLSearchParams(document.location.search);
            let name = params.get("id");
            window.location.href = `./mobile.php?what=watch&id=${name}`
        } else if ($path == "/zaps.php" || $path == "/zaps/*") {
            let params = new URLSearchParams(document.location.search);
            let name = params.get("id");
            window.location.href = `./mobile.php?what=tiny&id=${name}`
        } else if ($path == "/search.php" || $path == "/search") {
            let params = new URLSearchParams(document.location.search);
            let name = params.get("query");
            window.location.href = `./mobile.php?what=search&query=${name}`
        } else if ($path == "/subscriptions.php" || $path == "/subscriptions") {
            window.location.href = `./mobile.php?what=subs`
        } else if ($path == "/user.php" || $path == "/user") {
            let params = new URLSearchParams(document.location.search);
            let name = params.get("channel");
            window.location.href = `./mobile.php?what=tiny&id=${name}`
        } else if ($path == "/you.php" || $path == "/you") {
            window.location.href = `./mobile.php?what=you`
        } else if ($path == "/backrooms/*") {
            window.location.href = `./backrooms-m.php`
        } else {
            window.location.href = "mobile.php" //redir to mobile app download page
        }
    }
</script>
<noscript>
    <h1>JAVASCRIPT IS DISABLED. PLEASE ENABLE JS FOR THE WEBSITE TO WORK</h1>
</noscript>
<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary" id="mainnav">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <img src="./assets/imgs/logo.png" alt="logo" height="50" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcoll"
            aria-controls="navcoll" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-coll">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./zaps.php"><span class="mico align-text-middle">acute</span> zaps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./subscriptions.php"><span class="mico">subscriptions</span> my circle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./you.php"><span class="mico">for_you</span> you</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./settings.php"><span class="mico">settings</span> settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./backrooms/"><span class="mico">animated_images</span> backrooms</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="'coding in javascript sucks lol'"
                    id="search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    search
                </button>
            </form>
            <a class="ms-3 link-danger" href="login.php">log in</a>
        </div>
    </div>
</nav>