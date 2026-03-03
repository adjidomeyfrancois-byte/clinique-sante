<?php
require 'config.php';

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $req = $pdo->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $req->execute([$username,$password]);
    $user = $req->fetch();

    if($user){
        $_SESSION['admin'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        echo "Identifiants incorrects";
    }
}
?>

<form method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button type="submit" name="login">Connexion</button>
</form>