<!DOCTYPE html>
<html>
<head>
    <title>Display</title>
    <style>
        body {
            background: #d071f9;
        }
        table {
            background-color: white;
        }
    </style>
</head>
<body>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <h2 align="center">Display records</h2>
    <center>
        <table border="1" cellspacing="7" width="85%">
            <tr>
                <th width="5%">ID</th>
                <th width="10%">Name</th>
                <th width="10%">Email</th>
                <th width="10%">Age</th>
                <th width="10%">Date of Birth</th>
            </tr>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['dob'] . "</td>
                 </tr>";
            }
            ?>
        </table>
    </center>
    <?php
} else {
    echo "NO RECORDS FOUND";
}

?>
</body>
</html>
