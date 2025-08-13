<?php
include_once("./assets/include/header.php");
?>

<!doctype html>

<body>
    <div class="w-75 mx-auto p-3">
        <h1>TuTubo settings</h1>
        <form method="POST" action="./settings.php">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="" id="" />
                <label class="form-check-label" for=""> Default radio </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="" id="" checked disabled />
                <label class="form-check-label" for="">
                    Default checked radio
                </label>
            </div>

        </form>
    </div>
</body>
<?php
include_once("./assets/include/footer.php");
?>