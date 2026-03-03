<?php
require 'config.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

$req = $pdo->query("SELECT * FROM rendezvous ORDER BY created_at DESC");
?>

<h2>Liste des Rendez-vous</h2>
<a href="logout.php">Déconnexion</a>

<table border="1">
<tr>
<th>Nom</th>
<th>Email</th>
<th>Date</th>
<th>Message</th>
<th>Date création</th>
</tr>

<?php while($row = $req->fetch()): ?>
<tr>
<td><?= $row['nom'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['date_rdv'] ?></td>
<td><?= $row['message'] ?></td>
<td><?= $row['created_at'] ?></td>
</tr>
<?php endwhile; ?>

</table>