<!-- 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
 -->


<?php

include __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col mt-5">
                <div class="card mt-5 p-5">

                    
                    <form action="./index.php" method="GET">
                        
                        <!-- Input text inserisci password -->
                        <div class="mb-3 d-flex justify-content-between">
                            <label for="password" class="form-label">Lunghezza password</label>
                            
                            <input type="text" class="form-control w-25" name="password" id="password">
                        </div>
                        <h3>Ecco la tua password casuale: <?php echo $password; ?></h3>

                        <!-- Radio boxs -->
                        <div class="radioboxs">Consenti ripetizioni di uno o più caratteri:

                            <!-- Radio Si -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDef" id="radioSi">
                                <label class="form-check-label" for="radioSi">
                                    Si
                                </label>
                            </div>

                            <!-- Radio No -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDef" id="radioNo" checked>
                                <label class="form-check-label" for="radioNo">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Tutti i checkbox-->
                        <div class="checkboxs d-flex flex-column justify-content-end align-items-end">

                            <!-- Filtro per Lettere -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="defaultCheck">
                                <label class="form-check-label" for="defaultCheck">Lettere</label>
                            </div>
                            <!-- Filtro per Numeri -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="defaultCheck">
                                <label class="form-check-label" for="defaultCheck">Numeri</label>
                            </div>
                            <!-- Filtro per Simboli -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="defaultCheck">
                                <label class="form-check-label" for="defaultCheck">Simboli</label>
                            </div>

                        </div>

                        <!-- Bottoni per invio e annulla -->
                        <button type="submit" class="btn btn-primary mt-3">Invia</button>
                        <button type="reset" class="btn btn-secondary btn mt-3">Annulla</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>