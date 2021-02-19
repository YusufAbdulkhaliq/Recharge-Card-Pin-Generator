<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidehustle Task-2</title>
</head>
<body>
    <h1>Recharge Card Pin Generator</h1>
    
    <?php
        for ($i=0; $i <220 ; $i++) { 
            $pin = rand(000000000000, 999999999999);
                echo 'Your Recharge Pin is : ' . $pin. "<br>";
        }
        ?>
</body>
</html>