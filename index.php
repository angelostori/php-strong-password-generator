<?php
var_dump($_GET);

function pass_generator(int $num) : string {
    $characters = "qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890,.!£$%&/()^+;:@#";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Pass Gen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <section class="container mt-5">
    <h1 class="text-center mb-4 text-secondary">Strong Password Generator</h1>

    <h2 class="text-center text-light mb-4">
        Genera una password sicura
    </h2>

    <form action="" method="GET" class="card p-4 mx-auto shadow-sm bg-light">
        <div class="mb-3 text-center">
            <label for="length" class="form-label">
                Minimo 6 / Massimo 16
            </label>
            <input type="number" name="pass_length" id="length" min="6" max="16" class="form-control text-center">
        
            
            <span>Consenti ripetizioni di uno o più caratteri:</span>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="repeat" id="yes" value="yes">
            <label class="form-check-label" for="yes">Sì</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="repeat" id="no" value="no">
            <label class="form-check-label" for="no">No</label>
            </div>
        </div>
    </form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>