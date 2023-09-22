<?php
//FETCHING
// File path to the JSON file
$jsonFile = 'api/messages.json';
$userInput = "";

// Check if the file exists
if (file_exists($jsonFile)) {
    // Read the JSON file content
    $jsonContent = file_get_contents($jsonFile);

    // Check if the content was successfully read
    if ($jsonContent !== false) {
        // Set the response headers to indicate JSON content
        header('Content-Type: application/json');
        
        // Decode the JSON content to an array
        $dataArray = json_decode($jsonContent, true);
        
        // Output the JSON-encoded array
        echo json_encode($dataArray);
       // header('location: index.php?userInput=' . $_GET['userInput']);
        exit;
    } else {
        // Handle the read error
        echo 'Failed to read JSON file';
    }
} else {
    // Handle the file not found error
    echo 'JSON file not found';
}
?>