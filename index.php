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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 mx-5">
        <div class="row mt-5">
            <div class="col mt-5">
                <div class="card mt-5 p-5">

                    <form action="./index.php" method="GET">

                        <!-- Input text inserisci password -->
                        <div class="mb-3 d-flex justify-content-between">
                            <label for="password" class="form-label">Lunghezza password</label>

                            <input type="text" class="form-control w-25" name="password" id="password">
                        </div>

                        <!-- Radio boxs -->
                        <div class="radioboxs">

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


                        


                        

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>