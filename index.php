<?php
session_start();
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
            <form action="password.php" method="get">
                <div class="col-4 mt-5">
                    <div class="mb-3">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lunghezza Password:
                        </label>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="lunghezzaPassword" id="lunghezzaPassword">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 d-flex mt-3">
                        <div class="me-3">Consenti di ripetere lo stesso carattere:</div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox" value="si" name="repeatSameCharacter" id="repeatSameCharacter">
                            <label class="form-check-label" for="repeatSameCharacter">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="no" name="noRepeatSameCharacter" id="noRepeatSameCharacter">
                            <label class="form-check-label" for="noRepeatSameCharacter">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mt-3 d-flex">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox" value="si" name="containOnlyLetter" id="containOnlyLetter">
                            <label class="form-check-label" for="containOnlyLetter">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox" value="si" name="containOnlyNumbers" id="containOnlyNumbers">
                            <label class="form-check-label" for="containOnlyNumbers">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox" value="si" name="containOnlySpecialChars" id="containOnlySpecialChars">
                            <label class="form-check-label" for="containOnlySpecialChars">
                                Caratteri Speciali
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>