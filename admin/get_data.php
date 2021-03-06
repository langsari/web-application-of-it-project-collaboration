<?php

header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "projects_itproject");

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();

    $result = mysqli_query($con, "SELECT * FROM files ");

    while ($row = $result->fetch_object()) {

        $point = array("label" => $row->Owner, "y" => $row->pf);

        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
