<?php
include_once("./assets/include/header.php");
?>

<!doctype html>

<body>
    <div class="w-75 mx-auto p-3">
        <h1>TuTubo settings</h1>
        <form method="POST" action="./settings.php">
            <div class="mb-3">
                <label for="mode" class="form-label">Mode</label>
                <select class="form-select form-select-lg" name="mode" id="mode">
                    <option value="light" selected>Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
            <div class="mb-3"></div>
        </form>
    </div>
</body>
<?php
include_once("./assets/include/footer.php");
?>