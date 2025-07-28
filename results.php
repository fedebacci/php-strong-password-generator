<?php

session_start();
$generated_password = $_SESSION['generated_password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Results _ Esercizio 2: "EX - Assegnazione Password Generator" (L03 - PHP Funzioni e Parziali)
    </title>

    <!-- # Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info">
                    Your new password is: 
                    <b>
                        <?php
                            if (isset($generated_password)) {
                                echo "$generated_password (" . strlen($generated_password) . ")";
                            } else {
                                echo "No password generated";
                            };
                        ?>
                    </b>
                </div>
                <a class="btn btn-outline-primary" href="./index.php">
                    Generate another password
                </a>
            </div>
        </div>
    </div>
</section>


    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>