<?php
    if ( (empty($_POST['artiste'])) || (empty($_POST['oeuvre'])) ) {
        header('Location: form_recherche.php');
    }
    $artiste = $_POST['artiste'];
    $oeuvre = $_POST['oeuvre'];
     $artiste_nettoye =  filter_var( $artiste , FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH );
    
?>
 <html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel ="stylesheet" type="text/css"  href="styles.css" >
</head>
<body>

    <?php include ('header.php')?>
    

    <h1> Réponse </h1>
    <?php
    echo '<p>Nos résultats pour l\'artiste que vous recherchez: '.$artiste_nettoye.'</p>'."\n";
   
    ?>





    <?php include ('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    

</body>


 </html>    
