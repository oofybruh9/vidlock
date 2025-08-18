<?php
include_once("./assets/include/header.php");
/*
include("./assets/include/db.php");
$email = $_POST["email"];
$paswd =  password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$check="SELECT * FROM ppl WHERE Email=? AND Password=?";
$query=$pdo->prepare($check);
$query->bind_param("ss",$email,$paswd);
$query->execute() or die($pdo->error);
$count=$query->num_rows;
if ($count == 1){
    while($row=$query->fetch_assoc){
        $_SESSION['email']=$row['Email'];
    }
    header('Location:index.php');
}
*/
?>

<!doctype html>

<body>
    <div class="w-75 mx-auto p-3">
        <h1>create a VidLock account</h1>
        <div class="hstack">
            
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                placeholder="abc@mail.com" required />
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">password</label>
            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="pwd" required />
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <br>
        <a name="acct" id="acct" class="btn btn-primary" href="./login.php" role="button">already have an account? log
            in here!</a>

    </div>
    <script>
        $(document).ready(function () {
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
</body>
<?php
include_once("./assets/include/footer.php");
?>