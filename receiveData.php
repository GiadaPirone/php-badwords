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
        $paragrafo = $_GET["testo"];
        $lenParagrafo = strlen($paragrafo);


        $censura = $_GET["parolaCensurata"];
        $nuovoParagrafo = str_replace($censura, "***" ,$paragrafo);
        $lenParagrafoCensurato = strlen($nuovoParagrafo);
        
    ?>

    
    <!-- paragrafo -->
    <div>
        <h1>Paragrafo</h1>
        <p><strong>Il paragrafo è:</strong> <?php echo $paragrafo ?> </p>
        <p><strong>La lunghezza è:</strong> <?php echo $lenParagrafo ?> </p>

    </div>

    <!-- paragrafo con parola censurata -->
    <div>
        <h1>paragrafo con censura</h1>
        <p><strong>La strofa della canzone è:</strong>  <?php echo $nuovoParagrafo ?> </p>
        <p><strong>La lunghezza del paragrafo censurato è:</strong> <?php echo $lenParagrafoCensurato ?> </p>
    </div>


</body>
</html>