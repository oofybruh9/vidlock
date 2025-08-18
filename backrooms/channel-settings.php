<?php
include_once("./include/header.php");
?>
<!doctype html>

<body>
    <div class="p-3 mx-auto">
        <h1>channel settings</h1>
        <form action="./editing.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="idk"
                    placeholder="username" />
                <small id="idk" class="form-text text-muted">how it looks: https://example.com/user/username</small>
            </div>
            <div class="mb-3">
                <label for="display-name" class="form-label">Display Name</label>
                <input type="text" class="form-control" name="display-name" id="display-name" aria-describedby="lol"
                    placeholder="User Name" />
                <small id="lol" class="form-text text-muted">Your ACTUAL Channel Name</small>
            </div>
            <div class="mb-3">
                <label for="channel-desc" class="form-label">channel Description</label>
                <textarea class="form-control" name="channel-desc" id="channel-desc" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="pfp" class="form-label">pfp</label>
                <input type="file" class="form-control" name="pfp" id="pfp" placeholder="pfp" aria-describedby="fileHelpId"/>
                Preview:
                <img id="img-upload" style="border-radius: 50%" src="nosrc" width="100">
            </div>
            <div class="mb-3">
                <label for="banner" class="form-label">banner</label>
                <input type="file" class="form-control" name="banner" id="banner" placeholder="banner" aria-describedby="fileHelpId"/>
                Preview:
                <img id="ban-upload" src="nosrc" height="200">
            </div>
        </form>
        <script>
        $(document).ready( function() {
            function readURL(input, target) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(target).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#pfp').change(function () {
                readURL(this, "#img-upload");
            })
            $('#banner').change(function () {
                readURL(this, "#ban-upload")
            })
        })
    </script>
    </div>
</body>
<?php
include_once("../assets/include/footer.php");
?>