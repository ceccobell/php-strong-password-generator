<?php
function generaPassword($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ|!"£$%&/()=?^_-:.;,@ç°à#§ù*+][èé><';
    $stringaRandom = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
};

$password = generaPassword($_GET['lunghezza password']);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Passwordo Generator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="get">
                <div class="col-4 mt-5">
                    <div class="mb-3">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lunghezza Password:
                        </label>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="lunghezza password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>