<?php 
// Create a variable with the restricted folder name
$restricted_folder = 'nome-da-pasta';

// Create a variable with the website homepage URL
$homepage_url = 'https://www.example.com';

// Redirect the user to the homepage if the folder is accessed
if ( basename(__DIR__) == $restricted_folder ) {
    header('Location: ' . $homepage_url);
    exit;
} 
?>
