<!doctype html>
<html>

<head>
    <title>TuTubo Studio</title>
    <link rel="stylesheet" href="../assets/include/bootstrap.css">
    <script src="../assets/include/bootstrap.bundle.min.js"></script>
    <script src="../assets/include/jquery-3.7.1.min.js"></script>
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
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <img src="../assets/imgs/logo.png" alt="TuTubo Logo" width="120">
            Studio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./all-videos.php?type=edit">edit content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#uploadModal">upload content</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">analytics</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./analytics.php?type=all">all analytics</a></li>
                        <li><a class="dropdown-item" href="./analytics.php?type=video">video-only analytics</a></li>
                        <li><a class="dropdown-item" href="./analytics.php?type=tinies">tiny-only analytics</a></li>
                        <li><a href="./all-videos.php?type=analytics" class="dropdown-item">single-content analytics</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./channel-settings.php">channel settings</a>
                </li>
                <li>
                    <a class="nav-link" href="../settings.php">other settings (e.g. theme and font select) over here!</a>
                </li>
                <li>
                    <a class="nav-link" href="../">go back home</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="'lock in (sub) to @oofybruh9'" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">search</button>
            </form>
        </div>
    </div>
</nav>