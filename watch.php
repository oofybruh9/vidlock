<?php
include_once("./assets/include/header.php");
?>
<!doctype html>

<body>
    <video id="player" playsinline controls>
        <!--<source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4" />-->
        <source src="https://drive.usercontent.google.com/download?id=17bjud6L1GGI7-6oWa10eM3mYJiZtDXA9&export=download" type="video/mp4">
    </video>
    <div class="mb-3 p-3">
    <h1>Big Buck Bunny</h1>
    <a href="./user.php?channel=peachopen" class="link-underline link-underline-opacity-0">
    <img src="./assets/imgs/pfps/sample.png" width="60" class="rounded-circle"/>
    The Peach Open Movie Project</a>
    
    </div>
    <script src="./assets/include/plyr.js"></script>
    <link rel="stylesheet" href="./assets/include/plyr.css">
    <script>
        const plyr = new Plyr("#player")
    </script>
</body>
<?php
include_once("./assets/include/footer.php");
?>