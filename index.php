<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Twitter
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" name="s1">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="reg.php">Sign up</a>
        </div>
    </div>
</body>
<?
if(isset($_GET['s1'])){
    $login=$_GET['userName'];
    $password=$_GET['password'];
    $con=mysqli_connect('localhost','root','','registr');
    $sql="SELECT * FROM `user` WHERE user_name='$login' AND password='$password';";
    $r=mysqli_query($con,$sql);
    $q=mysqli_num_rows($r);

    if($q){
        ?>
        <script>
            window.location.href='user.php';
        </script>
        <?
    }        
    else{
        
        ?>
        <script>
            alert("Login yoki parol xato?");
        </script>
        <?
    }       
}

?>

</html>