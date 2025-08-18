<!doctype html>
<html>

<head>
    <title>VidLock backrooms</title>
    <link rel="stylesheet" href="../assets/include/bootstrap.css">
    <script src="../assets/include/bootstrap.bundle.min.js"></script>
    <script src="../assets/include/jquery-3.7.1.min.js"></script>
    <style>
        @font-face {
            font-family: "Material Symbols Rounded";
            src: url("../assets/fonts/MaterialSymbolsRounded.ttf") format('truetype'), url('./assets/fonts/MaterialSymbolsRounded.woff2') format('woff2');
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
            <img src="../assets/imgs/logo.png" alt="VidLock Logo" height="50">
            Backrooms
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./all-videos.php?type=edit">edit content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#uploadModal" data-bs-toggle="modal" data-bs-target="#exampleModal">upload
                        content</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">analytics</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./analytics.php?type=all">all analytics</a></li>
                        <li><a class="dropdown-item" href="./analytics.php?type=video">video-only analytics</a></li>
                        <li><a class="dropdown-item" href="./analytics.php?type=tinies">zap-only analytics</a></li>
                        <li><a href="./all-videos.php?type=analytics" class="dropdown-item">single-content analytics</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./channel-settings.php">channel settings</a>
                </li>
                <li>
                    <a class="nav-link" href="../settings.php">other settings (e.g. theme and font select) over
                        here!</a>
                </li>
                <li>
                    <a class="nav-link" href="../"><span class="mico">home</span> go back home</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="'lock in (sub) to @oofybruh9'"
                    aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">search</button>
            </form>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Video</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./uploading.php" method="POST">
                    <div class="mb-3">
                        <label for="vid-upload" class="form-label">Choose a video file (mp4, webm, mov)</label>
                        <input type="file" class="form-control" name="vid-upload" id="vid-upload"
                            aria-describedby="file-upload" accept=".mp4, .webm, .mov" required />
                        <div id="file-upload" class="form-text">25 MB max filesize</div>
                    </div>
                    <div class="mb-3">
                        <label for="vid-name" class="form-label">Video Name</label>
                        <input class="form-control" type="text" placeholder="Default input" id="vid-name"
                            name="vid-name" aria-describedby="helper-name">
                        <div id="helper-name" class="form-text">will default to file name if not filled out</div>
                    </div>
                    <h5>If your video is 25mb+, please <a href="//example.com/form/783ge32uhed9nhf74h387hq4fu39frh734e">fill out this form</a></h5>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <script>
                    const uploadField = document.getElementById("vid-upload");

                    uploadField.onchange = function () {
                        if (this.files[0].size > 25000000) {
                            alert("file 25mb+! please compress it or fill out form at bottom of modal");
                            this.value = "";
                        }
                    };
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>