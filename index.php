<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<?php 
$info = [
    [
        "fname" => "MARICAR",
        "lname" => "DIRE",
        "age" => "20",
        "address" => "Taga cainta sa tabi ng kapitbahay namin lot 1, ewan.",
        "contactno" => "0921tutunog dapat"
    ],
    [
        "fname" => "cJ",
        "lname" => "DUQUE",
        "age" => "20",
        "address" => "ANTIPOLO.",
        "contactno" => "0921tutunog"
    ],
    [
        "fname" => "ANGELICA",
        "lname" => "OLEGARIO",
        "age" => "20",
        "address" => "CAINTA.",
        "contactno" => "111111111"
    ],
    [
        "fname" => "TERENCE",
        "lname" => "ALABAN",
        "age" => "20",
        "address" => "TAYTAY.",
        "contactno" => "0922222222"
    ]
];
?>
<body>
<h1>Hands-on Activity</h1>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact Number</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($info as $info) {
            echo "<tr>";
            echo "<td>{$info['fname']}</td>";
            echo "<td>{$info['lname']}</td>";
            echo "<td>{$info['age']}</td>";
            echo "<td>{$info['address']}</td>";
            echo "<td>{$info['contactno']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
