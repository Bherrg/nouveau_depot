<!DOCTYPE html>
<html>
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recherche</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel ="stylesheet" type="text/css"  href="styles.css" >
    </head>
     <body>
     <?php include ('header.php')?>
        <h1>Recherche</h1>
            <div id="formulaire">
                <form method="post" action="reponse_recherche.php">
                    <label for="artiste">Quel artiste cherchez vous: </label> 
                    <input type="text" name="artiste" id="artiste"><br />

                    <input class="button"type="submit" value="Rechercher">
                </form>
            </div>
        <?php include ('footer.php')?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    

    </body>
</html>