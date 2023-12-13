<?php
// Funzione per verificare se l'email è valida
function emailControl($email)
{
    // Verifica se l'email contiene @ e .
    if (str_contains($email, '@') && (str_contains($email, '.it') || str_contains($email, '.com'))) {
        return 'Email valida';
    } else {
        return 'Email non valida';
    }
}
?>