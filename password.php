<?php 
session_start();
include 'functions.php';
$allowRepetion = null;

if (isset($_GET['repeatSameCharacter']) && $_GET['repeatSameCharacter']  == 'si') {
    $allowRepetion = true;
    var_dump($allowRepetion);
};

if (isset($_GET['noRepeatSameCharacter']) && $_GET['noRepeatSameCharacter']  == 'no') {
    $allowRepetion = false;
    var_dump($allowRepetion);
};

if (isset($_GET['lunghezzaPassword']) && is_numeric($_GET['lunghezzaPassword']) && $_GET['lunghezzaPassword'] > 0) {
    $_SESSION['password'] = generaPassword($_GET['lunghezzaPassword'], $allowRepetion);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwordo generata</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Password generata:</h1>
                <h2>
                    <?php if (isset($_SESSION['password'])) {
                            echo $_SESSION['password'];
                } ?></h2>
            </div>
        </div>
    </div>
</body>
</html>