<?php 

if(isset($_GET['id'])) {
    include('connexion.inc.php');
    $req = sprintf ("SELECT * FROM contact WHERE id ='%d'", $_GET['id']);

    $result = mysqli_query ($conn, $req);
    $enreg = $result -> fetch_assoc();

    $id = $enreg['id']; 
    $nom = $enreg['nom'];
    $email = $enreg['email'];
    $message = $enreg['message'];

}

?>

<section id="Contact" class="reveal">
            <div class="dm">
                <h2>Contact</h2>
                <form id="contact-form" method='post' action='index.php?pg=ins'>
                    <input type="text" placeholder="Nom" required name='nom' <?php if (isset($enreg)) echo "value = '$nom'";?> >
                    <input type="email" placeholder="Email" required name='email' <?php if (isset($enreg)) echo "value = '$email'";?> >
                    <textarea placeholder="Votre message" rows="5" required name='msg'><?php if (isset($enreg)) echo "$message";?></textarea>
                    <?php if (isset($enreg)) echo "<input type='hidden' name='id' value = '$id'>";?>
                    <button class="but" type="submit">Envoyer le message</button>
                </form>

                <div class="reseaux">
                    <a href="https://www.facebook.com/Venkay147?mibextid=ZbWKwL"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="tiktok.com/@Venance147"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="instagram.com/venancekayode"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://discord.gg/YmYBYunZ"><i class="fa-brands fa-discord"></i></a>
                    <a href="https://wa.me/qr/Y7POZBT5PNPBN1"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
</section>

