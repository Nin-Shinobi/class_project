<?php
if (isset($_POST['id'])) {
    include('connexion.inc.php');
    foreach ($_POST['id'] as $id) {
        $req = sprintf ("DELETE FROM contact WHERE id = '%d'", $id);
        $result = mysqli_query($conn, $req);
    }
    header("location:index.php?pg=lis");
}
?>