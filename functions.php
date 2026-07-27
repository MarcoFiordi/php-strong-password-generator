<?php
function generaPassword(int $passwordLength): string
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?#@";
    $password = "";

    for ($i = 0; $i < $passwordLength; $i++) {
        //aggiungo un carattere casuale 
        $randomIndex = random_int(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    } 
    return $password;
}
