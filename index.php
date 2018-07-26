<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>exercice1</title>
</head>
<body>
  <p>
    <?php
    $age = 14;
    if ($age >= 18) //si lâge est supérieur ou égal à 18
    {
      echo 'vous êtes majeur';
    }
    else //sinon
    {
      echo 'vous êtes mineur';
    }
    ?>
  </p>
</body>
