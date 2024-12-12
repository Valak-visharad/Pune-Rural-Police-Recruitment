<?php
// getting all values from the HTML form


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['Chest_no'];
}

// $name = "John";
// $serialNumber = 1;

// Open the CSV file for reading
$file = fopen('data.csv', 'r');

// Create an empty array to store the data
$data = array();

// Loop through the CSV file and add each row to the array
while (($row = fgetcsv($file)) !== false) {
    // Check if the serial number and name match the filter
    if ($row[1] == $Chest_no) {
        $data[] = $row;
    }
}

// Close the CSV file
fclose($file);

?>
