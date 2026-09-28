<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 - Activity 3</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #d9d9d9;
        }
    </style>
</head>

<body>

<?php

$students = array(
    array(
        "ID" => "CA221",
        "Name" => "Mohamed jama Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wartanabada"
    ),

    array(
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    array(
        "ID" => "CA221",
        "Name" => "Nur Adan",
        "Phone" => "06490276",
        "Address" => "Macmacaanka, Hodan"
    )
);

echo "<h1>Student Information</h1>";

echo "<table>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
