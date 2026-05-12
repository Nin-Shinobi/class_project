<?php
require('connexion.inc.php');

$id = $_POST['id'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['msg'];

if (isset($id)) {
    $req = sprintf("UPDATE contact SET nom = '%s', email = '%s', message = '%s' WHERE id = %d",$nom, $email, $message, $id);
} else {
    $req = sprintf("INSERT INTO contact (nom, email, message) VALUES ('%s', '%s', '%s')", $nom, $email, $message);
}

$result = mysqli_query($conn, $req);

header('Location: index.php?pg=con');
exit;
?>
