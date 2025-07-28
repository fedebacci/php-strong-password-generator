<?php

function generate_password (int $password_length) : string {
    $generated_password = "";
    $possible_characters = "ABHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $min = 1;
    $max = strlen($possible_characters) - 1;
    do {
        $random_character = $possible_characters[rand($min, $max)];
        $generated_password .= $random_character;
    } while (strlen($generated_password) < $password_length);

    return $generated_password;
};

?>