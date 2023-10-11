<?php


function generateRandomPassword() {
    // Inizializza la password vuota
    $password = '';

    if (isset($_GET['password'])) {
        $inputPsw = $_GET['password'];

        if (strlen($inputPsw) < 8) {
            $error = 'Inserisci almeno 8 caratteri';
            return $error;
        } else {

            // Caratteri validi per la password
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
           
            // Calcola la lunghezza della stringa dei caratteri
            $characterLength = strlen($characters);

            // Genera caratteri casuali fino a raggiungere la lunghezza desiderata
            for ($i = 0; $i < strlen($inputPsw); $i++) {

                // Genera un numero casuale tra 0 e la lunghezza dei caratteri - 1
                $randomIndex = random_int(0, $characterLength - 1);

                // Aggiunge il carattere corrispondente alla password
                $password .= $characters[$randomIndex];
            }
        }
    } else {
        $error = 'Password non specificata';
        return $error;
    }

    return $password;
}

// Generazione di una password casuale
$password = generateRandomPassword();

?>