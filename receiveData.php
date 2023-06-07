<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati ricevuti</title>
</head>
<body>
    <?php
        $titoloCanzone = $_GET["titolo"];
        $lenTitolo = strlen($titoloCanzone);
        

        $strofaCanzone = $_GET["strofa"];
        $lenStrofa = strlen($strofaCanzone);
        
    ?>

    <!-- strofa canzone e lunghezza caratteri -->
    <div>
        <h1>Strofa</h1>
        <p><strong>La strofa della canzone è:</strong>  <?php echo $strofaCanzone ?> </p>
        <p><strong>La lunghezza della strofa  è:</strong> <?php echo $lenStrofa ?> </p>
    </div>

    <!-- titolo della canzone nascosto/ da nascondere e lunghezza caratteri -->
    <div>
        <h1>Titolo</h1>
        <p><strong>Il titolo della canzone è:</strong> <?php echo "***" ?> </p>
        <p><strong>La lunghezza del Titolo è:</strong> <?php echo $lenTitolo ?> </p>

    </div>

</body>
</html>