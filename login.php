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
<!-- azure, discord, github, google, twitter -->
<!doctype html>

<body>
    <div class="w-75 mx-auto p-3">
        <h1>login to VidLock</h1>
        <form method="POST" action="./check.php">
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com" required/>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">password</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="pwd" required/>
            </div>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
        <br>
        <a name="noacct" id="noacct" class="btn btn-primary" href="./signup.php" role="button">no account? create an account here!</a>
        
    </div>
</body>
<?php
include_once("./assets/include/footer.php");
?>