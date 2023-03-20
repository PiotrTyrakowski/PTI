<?php
// Otwórz plik odpowiedzi.txt w trybie dołączania (a)
$file = fopen("odpowiedzi.txt", "a");

// Przygotuj dane z formularza do zapisania
$szczesliwy = $_POST['szczęśliwy'];
// Pobierz pozostałe wartości z formularza
// ...
$data = "Szczęśliwy: " . $szczesliwy . "\n"; // Zapisz dane jako tekst

// Zapisz dane do pliku
fwrite($file, $data);

// Zamknij plik
fclose($file);

// Przekieruj użytkownika do strony podziękowania
header("Location: dziekuje.html");
exit();
?>
