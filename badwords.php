<?php
$badword = $_GET['badword'];
$testo = $_GET['testo'];
$testo_pulito = str_replace($badword, '***',$testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <p>Testo:<?php echo $testo  ?></p>
    <p>Lunghezza testo:<?php echo strlen($testo) ?> </p>
    <hr>
    <p>Testo pulito:<?php echo $testo_pulito  ?></p>
    <p>Lunghezza testo:<?php echo strlen($testo_pulito) ?> </p>
</body>
</html>