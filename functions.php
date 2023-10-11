<?php

var_dump($_GET);

$inputPsw = $_GET['password'];

function generateRandomPassword($length = 8)
{
    // Caratteri validi per la password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    // Calcola la lunghezza della stringa dei caratteri
    $characterLength = strlen($characters);

    // Inizializza la password vuota
    $password = '';

    // Genera caratteri casuali fino a raggiungere la lunghezza desiderata
    for ($i = 0; $i < $length; $i++) {
        // Genera un numero casuale tra 0 e la lunghezza dei caratteri
        $randomIndex = random_int(0, $characterLength);

        // Aggiungi il carattere corrispondente alla password
        $password .= $characters[$randomIndex];
    }

    return $password;
}

// Generazione di una password casuale
$password = generateRandomPassword();
echo $password;

var_dump($password)

?>