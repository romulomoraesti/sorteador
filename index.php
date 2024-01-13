<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sorteador</title>
</head>
<body>
    <form action="sorteados.php" method="get">
        <h1>Sorteador de números</h1>

        <div>
            <label for="qtd">Quantos números deseja sortear?</label>
            <input type="number" name="qtd" min="1" value="1">
        </div>

        <div>
            <label for="min">Escolha entre:</label>

            <input type="number" min="0" name="min" value="1">
            <input type="number" min="1" name="max" value="50">
        </div>

        <div>
            <button>Sortear números</button>
        </div>
        
        
    </form>
</body>
</html>
