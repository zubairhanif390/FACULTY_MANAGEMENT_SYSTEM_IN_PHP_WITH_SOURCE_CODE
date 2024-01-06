<?php

function sanitized($string){
    global $conn; // Assuming $conn is your mysqli connection variable
    $string = mysqli_real_escape_string($conn, trim($string));
    return $string;
}

function loaddata($tablename){
    global $conn; // Assuming $conn is your mysqli connection variable

    $sel = mysqli_query($conn, "SELECT * FROM $tablename");
    $data = array();

    while($row = mysqli_fetch_assoc($sel)){
        extract($row);

        if($tablename == "subjects"){
            $data[] = array('<input type="checkbox" name="subj_id" id="subj_id" value='.$subj_id.'>', $subj_code, $subj_desc, $units);
        }
        // Add similar conditions for other tables

    }

    echo json_encode($data);
}

// Add similar modifications for other functions

?>
