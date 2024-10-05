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
$info = 
    
        $fname = "MARICAR";
        $lname = "DIRE";
        $age = "20";
        $address ="Taga cainta sa tabi ng kapitbahay namin lot 1, ewan.";
        $contactno = "0921tutunog dapat";
    
    
        $fname1 = "CJ";
        $lname1 = "Duque";
        $age1 = "20";
        $address1 ="kapitbahay mo ako sir ";
        $contactno1 = "0921tut";
    
        $fname2 = "Angelica";
        $lname2 = "Olegario";
        $age2 = "20";
        $address2 ="kanto lang.";
        $contactno2 = "09216548";
    
        $fname3 = "Terence";
        $lname3 = "Alaban";
        $age3 = "20";
        $address3 ="sasakay ng jeep bago dumating";
        $contactno3 = "0986436798";
    

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
        <tr>
        <td><?= $fname ?></td>
        <td><?= $lname ?></td>
        <td><?= $age ?></td>
        <td><?= $address ?></td>
        <td><?= $contactno ?></td>
        </tr>
        <tr>
        <td><?= $fname1 ?></td>
        <td><?= $lname1 ?></td>
        <td><?= $age1 ?></td>
        <td><?= $address1 ?></td>
        <td><?= $contactno1 ?></td>
    </tr>
    <tr>
        <td><?= $fname2 ?></td>
        <td><?= $lname2 ?></td>
        <td><?= $age2 ?></td>
        <td><?= $address2 ?></td>
        <td><?= $contactno2?></td>
        </tr>
        <tr>
        <td><?= $fname3 ?></td>
        <td><?= $lname3 ?></td>
        <td><?= $age3 ?></td>
        <td><?= $address3 ?></td>
        <td><?= $contactno3 ?></td>
        </tr>
    </thead>
</table>

</body>
</html>
