<?php
require('connexion.inc.php');

$req = "SELECT * FROM contact";
$result = mysqli_query($conn, $req);

?>
<section id="Listes" class="reveal">
    <div class="dm">
        <h2>Liste des Contacts</h2>
        <form method="POST" action="index.php?pg=supp">
            <table class="contact-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($lign = $result->fetch_assoc()) {
                        $id = $lign['id'];
                        $nom = $lign['nom'];
                        $email = $lign['email'];
                        $message = $lign['message'];

                        echo "<tr>
                                <td><input type='checkbox' name='id[]' value='$id' class='checkbox'></td>
                                <td><a href='index.php?pg=con&id=$id' class='edit-link'>$nom</a></td>
                                <td>$email</td>
                                <td>$message</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="delete-container">
                <button type="submit" class="but delete-btn">Delete</button>
            </div>
        </form>
    </div>
</section>
