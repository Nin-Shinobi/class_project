<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="Moi_pfolio.css?v=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>KAYKAY | Portfolio</title>
</head>

<body>

    <header>
       <?php include('haut.inc.php');?>
    </header>

    <main class="container">
      <?php include('contenu.inc.php');?>
    </main>

    <footer>
       <?php include('bas.inc.php');?>
    </footer>

    <script>
        const reveals = document.querySelectorAll('.reveal');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            }
        });
    });

    reveals.forEach(el => observer.observe(el));
    </script>
</body>

</html>