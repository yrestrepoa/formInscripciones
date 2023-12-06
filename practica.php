<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Esto va a ser ignorado por PHP y mostrado por el navegador</p>
    <?php echo "Mientras que esto va a ser interpretado";?>

    <p>Esto también será ignorado</p>

    <?php
     $expresión=false;
     if($expresión == true);
     echo"es verdadera";
        ?>
    <?php else: {
        echo "no es verdadera";
    }?>
</body>
</html>