<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Clinique Santé+</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>Clinique Santé+</h1>
<nav>
<a href="#home">Accueil</a>
<a href="#services">Services</a>
<a href="#contact">Contact</a>
<a href="login.php">Admin</a>
</nav>
</header>

<section id="home">
<h2>Votre santé, notre priorité</h2>
</section>

<section id="services">
<div class="card">Médecine générale</div>
<div class="card">Cardiologie</div>
<div class="card">Pédiatrie</div>
</section>

<section id="contact">
<h2>Prendre Rendez-vous</h2>

<form method="POST" action="traitement.php">
<input type="text" name="nom" placeholder="Nom" required>
<input type="email" name="email" placeholder="Email" required>
<input type="date" name="date" required>
<textarea name="message" placeholder="Message"></textarea>
<button type="submit">Envoyer</button>
</form>

</section>

<footer>© 2026 Clinique Santé+</footer>
</body>
</html>