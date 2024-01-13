
<?php
    require 'rand.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Numeros sorteados</title>
</head>
<body>
    <div class="container">
        <h2>Números sorteados</h2>
        <ul>
            <?php
                $numerosSorteados = sortearNumeros();
                foreach($numerosSorteados as $numeroSorteado) {
                    echo "<li>".$numeroSorteado."</li>";
                }
            ?>
            </ul>
        </div>
    </div>
</body>
</html>
