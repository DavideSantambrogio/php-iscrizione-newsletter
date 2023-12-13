<?php
include 'functions.php';

$message = '';
$alertClass = ''; // Inizializza la variabile

// Verifica se è stato inviato il form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // Chiama la funzione di verifica dell'email
    $message = emailControl($_POST['email']);

    // Imposta la classe dell'alert in base all'esito della validazione
    $alertClass = ($message === 'Email valida') ? 'alert-success' : 'alert-danger';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Iscriviti alla newsletter</h1>

        <form action="" method="post" class="input-group mt-3">    

            <input type="text" class="form-control" placeholder="Inserisci Indirizzo Email:" aria-label="Recipient's username" id="email" name="email" aria-describedby="button-addon2">

            <button type="submit" value="Invia" class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>

        </form>      
        
        <div id="result" class="mt-3 alert  <?php echo $alertClass; ?>">
            <?php echo $message; ?>
        </div>

    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


