<?php

// Include any other necessary functions or configurations

function getdatachart($sy) {
    global $con; // Assuming $con is your mysqli connection variable

    // Perform your logic to fetch data for the chart using $sy

    // Example: Fetch data from a hypothetical 'chart_data' table
    $query = "SELECT * FROM chart_data WHERE school_year = '$sy'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Error in query: " . mysqli_error($con));
    }

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        // Process each row and add to $data array
        $data[] = $row;
    }

    // Return the data as JSON
    echo json_encode($data);
}

// Add other functions as needed

?>
