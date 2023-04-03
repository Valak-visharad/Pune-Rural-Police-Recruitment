<?php
// getting all values from the HTML form

if (isset($_POST['submit'])) {
    $fname = $_POST['Chest_no'];
    //echo $fname;
}

// $name = "John";
// $serialNumber = 1;

// Open the CSV file for reading
$file = fopen('data.csv', 'r');

// Create an empty array to store the data
$data = array();

$flag = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pune Rural Police Recruitment Examination - 2023</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="main">
        <div class="containeer">
            <h1>Pune Rural Police Recruitment Examination - 2023</h1>
            <p><b>Venue:</b> MIT Art, Design and Technology University, Rajbaugh Loni Kalbhor, Solapur Highway,
                Near Bharat Petrol Pump Loni Kalbhor Railway Station,<br> Pune - 412201, Maharashtra India.
            </p>

            <table id="personatable">

                <?php
                while (($row = fgetcsv($file)) != false) {
                    // Check if the serial number and name match the filter
                    if ($fname == $row[7]) {
                        $flag = 1;
                        ?>


                        <!-- TANISHQ IDHAR SE START KAR CODE -->
                        
                            <table align="center" border="1px solid black">
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
    
                                <tr>
                                    <td>
                                        <h3>Serial No.</h3>
                                    </td>
                                    <td>
    
                                        <p><b>
                                            <?php echo $row[0] ?>
                                        </p></b>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
                                        <h3>Name</h3>
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[8] ?>
                                        </p></b>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
    
                                        <h3>Gender</h3>
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[9] ?>
                                        </p></b>
    
                                    </td>
                                </tr>
    
                                <tr>
    
                                    <td>
                                        <h3>Building (Centre) Name</h3>
    
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[1] ?>
                                        </p></b>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
    
                                        <h3>Floor no</h3>
                                    </td>
                                    <td>
    
                                        <p><b>
                                            <?php echo $row[2] ?>
                                        </p></b>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
                                        <h3>Type of room</h3>
    
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[3] ?>
                                        </p></b>
    
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
    
                                        <h3>Hall no</h3>
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[4] ?>
                                        </p></b>
    
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
    
                                        <h3>Class room no</h3>
                                    </td>
                                    <td>
                                        <p><b>
                                            <?php echo $row[5] ?>
                                        </p></b>
    
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>
    
                                        <h3>Desk no</h3>
                                    </td>
                                    <td>
    
                                        <p><b>
                                            <?php echo $row[6] ?>
                                        </p></b>
                                    </td>
                                </tr>
    
                            </table>
                        
                        <!-- yahi tak kar sirf -->
                    <?php }
                }
                if ($flag == 0) {
                    echo'<br><br><br><br>!!! ERROR : KINDLY CHECK THE CHEST NO, No such Chest Number found in records !!!';
                }
                ?>

        </div>

    </div>

    </div>

</body>

</html>

<?php

// Close the CSV file
fclose($file);
?>