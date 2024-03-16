<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type="text/css" href="style.css">
    <title>User Input Form</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration form
        </div>
        <div class="form">
            <div class = "input_field">
                <label>Name:</label>
                <input type="text" class="input" name="name" required>
            </div>
            <div class="input_field">
                <label>Email:</label>
                <input type="email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Age:</label>
                <input type="number" class="input" min="1" name="age" required>
            </div>
            <div class="input_field">
                <label>Date of Birth:</label>
                <input type="date" class="input" name="dob" required>
            </div>
            <div class="input_field">
                <input text-allign="center" type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
    </form>
    </div>
</body>

</html>

<?php
    if($_POST['register']){
        $name_  = $_POST['name'];
        $email = $_POST['email'];
        $age   = $_POST['age'];
        $dob   = $_POST['dob'];

        $query = "INSERT INTO form (name,email,age,dob) values('$name','$email','$age','$dob')";
        $data = mysqli_query($conn,$query);
        if($data){
            echo "Data Inserted into Database";
        }
        else{
            echo "Failed";
        }
    }
?>