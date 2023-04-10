<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <form action="badwords.php" method="GET">
        <div>
            <label for="badword">Parola da sostituire</label>
            <input type="text" name="badword" id="badword">
        </div>
        <div>
            <label for="testo">Testo</label>
            <textarea name="testo" id="testo" cols="30" rows="10"></textarea>
        </div>
        <button>Invio</button>
    </form>
    
</body>
</html>