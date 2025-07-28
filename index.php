<?php

echo "isset(S_GET['password_length']): " . isset($_GET['password_length']);
// echo "<br/>";
// echo "strlen(S_GET['password_length']): ". strlen($_GET['password_length']) ?? 0;
echo "<br/>";



// $password_length = $_GET['password_length'] ?? null;
// $password_length = isset($_GET['password_length']) ? $_GET['password_length'] : null;
if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];
    echo "<br/>";
    echo "password_length appena settato: ". $password_length;
    echo "<br/>";
    echo "isset(password_length): ". isset($password_length);
};



echo "<br/>";
echo "<br/>";
// if (isset($_GET['password_length']) && strlen($_GET['password_length']) > 0) {
// if ($password_length) {
if (isset($password_length)) {
    echo "<br/>";
    echo "strlen(S_GET['password_length']): " . strlen($_GET['password_length']);

    $password_length = $_GET['password_length'];
    echo "password_length 1: $password_length";
    var_dump($password_length);

    $generated_password = generate_password($password_length + 0);
};


function generate_password (int $password_length) {
    echo "password_length ricevuta in funzione generate_password: $password_length";
    var_dump($password_length);
    $generated_password = "TEST PW";
    echo "Password generated $generated_password";
    return $generated_password;
};


if (isset($generated_password)) {
    echo "<br/>";
    echo "generated_password outside:";
    var_dump($generated_password);
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Esercizio 2: "EX - Assegnazione Password Generator" (L03 - PHP Funzioni e Parziali)
    </title>

    <!-- # Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        Strong Password Generator
                    </h1>
                </div>

                <div class="col-12">
                    <form>
                        <div class="mb-3">
                            <label for="password_length" class="form-label">
                                Lunghezza password:
                            </label>
                            <input name="password_length" type="number" class="form-control" id="password_length" value="<?php echo $password_length ?? 0 ?>">
                        </div>

                        <div class="mb3">
                            <button class="btn btn-primary">
                                Invia
                            </button>
                            <!-- <button action="index.php" class="btn btn-secondary"> -->
                            <button class="btn btn-secondary disabled">
                                Annulla
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <div class="alert alert-info">
                        Your new password is: 
                        <b>
                            <?php
                                if (isset($generated_password)) {
                                    echo "$generated_password";
                                } else {
                                    echo "No password generated";
                                };
                            ?>
                        </b>
                    </div>
                </div>


            </div>
        </div>
    </section>
    


    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>