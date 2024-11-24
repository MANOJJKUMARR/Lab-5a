<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>

<body>
    <?php
    $name = "Nur Ariffin Mohd Zin";
    $matric_number = "DI220089"; 
    $course = "Bachelor of Computer Science (Information Security) with Honours";
    $year_of_study = "3rd Year"; 
    $address = "No 3, Jalan Permas, Pasir Gudang, Johor"; 
    ?>

    <table border="2" cellpadding="5" cellspacing="0">
        <tr>
            <td><b>Name</b></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><b>Matric Number</b></td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td><b>Course</b></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><b>Year of Study</b></td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td><b>Address</b></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
