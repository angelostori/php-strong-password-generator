<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Pass Gen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="container mt-5">
    <h1 class="text-center mb-4">Password Generator</h1>

    <h5 class="text-center text-muted mb-4">
        Inserisci da quanti caratteri vuoi che sia formata la tua password sicura
    </h5>

    <form action="" method="GET" class="card p-4 mx-auto shadow-sm bg-light" style="max-width: 400px;">
        <div class="mb-3 text-center">
            <label for="length" class="form-label">
                Minimo 6 / Massimo 16
            </label>
            <input type="number" name="pass_length" id="length" min="6" max="16" class="form-control text-center">
        </div>
    </form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>