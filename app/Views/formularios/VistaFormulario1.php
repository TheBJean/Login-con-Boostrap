<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">Adivina el Número</h5>
                <p class="card-text">Intenta adivinar el número entre 1 y 10.</p>
                <input type="number" id="guess" class="form-control mb-3" placeholder="Ingresa tu número">
                <button class="btn btn-primary" onclick="checkGuess()">Adivinar</button>
                <p id="result" class="mt-3"></p>
            </div>
        </div>
    </div>

    <script>
        const randomNumber = Math.floor(Math.random() * 10) + 1;

        function checkGuess() {
            const userGuess = document.getElementById('guess').value;
            const result = document.getElementById('result');

            if (userGuess == randomNumber) {
                result.textContent = 'esa es, adivinaste el número.';
                result.classList.add('text-success');
            } else {
                result.textContent = 'nop ese no es, intenta de nuevo.';
                result.classList.add('text-danger');
            }
        }
    </script>
</body>

</html>