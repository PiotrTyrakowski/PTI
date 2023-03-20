<?php
// Save the form data in a text file
$file = fopen("responses.txt", "a");

$happy = $_POST['happy'];
// Retrieve other emotions from the form
// ...

$data = "Happy: " . $happy . "\n";
// Append other emotions to $data
// ...

fwrite($file, $data);
fclose($file);

// Redirect the user to the thank you page
header("Location: thanks.html");
exit();
?>
