<?php
var_dump($_GET);

$getLength = (int) $_GET["pass_length"];

function pass_generator(int $num) : string {

    $characters = "qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890,.!£$%&/()+;:@#";

    $newPassword = "";

                //prende l'ultimo indice valido della stringa
                //-1 perchè la lunghezza parte da 1 mentre l'indice da 0
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $num; $i++) {
        $randomIndex = random_int(0, $maxIndex);
        $newPassword .= $characters[$randomIndex];
    }

    return $newPassword;
}

var_dump(pass_generator($getLength))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Pass Gen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <section class="container mt-5">
        <h1 class="text-center mb-4 text-secondary">Strong Password Generator</h1>

        <h2 class="text-center text-light mb-4">
            Genera una password sicura
        </h2>

        <div class="alert alert-primary" role="alert">
            Nessun parametro valido inserito
        </div>

        <form action="" method="GET" class="card p-3 mx-auto shadow-sm bg-light">
            <div class="row">

                <div class="col-md-6">
                    <label for="length" class="form-label mt-1">Lunghezza password:</label>

                    <span class="d-block my-3">
                        Consenti ripetizioni di uno o più caratteri:
                    </span>

                    <button type="submit" class="btn btn-primary mt-5">Invia</button>
                    <button type="reset" class="btn btn-secondary mt-5">Annulla</button>
                </div>

                <div class="col-md-2">
                    <input type="number" name="pass_length" id="length" min="6" max="16" class="form-control mb-3">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="repeat" id="yes" value="yes">
                        <label class="form-check-label" for="yes">Sì</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="repeat" id="no" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="letters" id="letters">
                        <label class="form-check-label" for="letters">Lettere</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                        <label class="form-check-label" for="numbers">Numeri</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                        <label class="form-check-label" for="symbols">Simboli</label>
                    </div>
                </div>

            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>