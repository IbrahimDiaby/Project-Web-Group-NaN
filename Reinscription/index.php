<?php 

if(!($_POST['name'] == "")){
    $bdd = new PDO("mysql:host=localhost;dbname=project", 'root', 'root');
    
    $add=$bdd->prepare('INSERT INTO projet(Nom, Prenom, Mail, Forfait, DatePaye)
    VALUES(?, ?, ?, ?, NOW())');
    $add->execute(array(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['surname']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['forfait']), NOW()));
    // $adddate=$bdd->query("INSERT INTO projet(DatePaye) VALUES(NOW()) WHERE ID=111");
    // $adddate->execute(array(NOW()));
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abonnement à Code Room</title>
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="name">
                Nom:<br /><input type="text" name="name" id="name" required />
            </label><br />
            <label for="surname">
                Prenom:<br /> <input type="text" name="surname" id="surname" required />
            </label><br />
            <label for="email">
                Email:<br /> <input type="text" name="email" id="email" required />
            </label><br />

            <!-- <label for="date">
                Date Paye:<br /> <input type="datetime-local" name="date" id="date" required />
            </label><br /> -->

            <!-- <label for="date">
                Date De Fin:<br /> <input type="datetime-local" name="date" id="date" required />
            </label><br /> -->

            <label for="forfait">
                Forfait:<br />
                <select name="forfait" id="forfait">
                    <!-- En fonction des mois -->
                    <option value="1 mois">1 Mois</option>
                    <option value="2 mois">2 Mois</option>
                    <option value="3 mois">3 Mois</option>
                    <option value="4 mois">4 Mois</option>
                    <option value="12 mois">1 An</option>
                </select>
            </label><br />
            <label for="submit">
                <br /><input type="submit" name="submit" value="Confirmer" id="submit"/>
            </label><br />
        </form>
        <br /><br /><br /><br />
        <a href="../Confirmation/index.php">Liste des abonnés</a>
    </section>

    <footer>
        <p>Copyright © CodeRoom</p>
    </footer>
</body>
</html>