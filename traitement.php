<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $date = $_POST['date'];
    $message = htmlspecialchars($_POST['message']);

    $req = $pdo->prepare("INSERT INTO rendezvous(nom,email,date_rdv,message) VALUES (?,?,?,?)");
    $req->execute([$nom,$email,$date,$message]);

    header("Location: index.php?success=1");
}
?>