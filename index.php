<?php

include 'functions.php';

$message = '';

// Verifica se è stato inviato il form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // Chiama la funzione di verifica dell'email
    $message = emailControl($_POST['email']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iscriviti alla newsletter</h1>

    <form action="" method="post">
        <label for="email">Indirizzo Email:</label>
        <input type="email" id="email" name="email" required>        
        <input type="submit" value="Invia">        
    </form>    
    
    <div id="result">
        <?php echo $message; ?>
    </div>
    
</body>
</html>


