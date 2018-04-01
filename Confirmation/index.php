<?php 
        $bdd = new PDO("mysql:host=localhost;dbname=project", 'root', 'root');

        $liste=$bdd->query('SELECT * FROM projet');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation Code Room</title>
    <script src="../JQuery/jquery-3.3.1.min.js"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    
</head>
<body>
    <!-- <header>
        
    </header> -->
    <section>

    <div id="ok">
        <h1>Abonnement effectué avec succès !!!!!!</h1>
    </div>

    <?php 
        while($info = $liste->fetch()){
?>
            <p>L'abonnement de <strong><?php echo $info['Nom'] ?>  <?php echo $info['Prenom'] ?></strong>
            inscrit le <strong><?php echo $info['DatePaye'] ?></strong> expire le <strong><?php echo $info['DateFin'] ?></strong></p>

            
<?php
        }
?>
<br /><br />
        <a href="../Inscription/index.php">Accueil</a>
    </section>

    <footer>
        <p>Copyright © CodeRoom</p>
    </footer>
</body>
</html>