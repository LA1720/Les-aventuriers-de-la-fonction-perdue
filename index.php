<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function writeSecretSentence(string $parametre_1, string $parametre_2){

    return $parametre_1." s'incline face à ".$parametre_2;
  }

    var_dump(writeSecretSentence("lion","tiger"));

    ?>
</body>
</html>