<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP BAD WORDS</title>
</head>
<body>
    <div>
        <form action="receiveData.php" method="GET">
            <textarea name="testo" placeholder="Inserisci del testo" id="" cols="30" rows="10"></textarea>
            <input type="text" name="parolaCensurata"  placeholder="Inserisci parola da censurare">

            <button type="submit">Invia</button>
        </form>
    </div>
    
</body>
</html>