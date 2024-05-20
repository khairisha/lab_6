<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
    $name = "Nurul Khairisha Afza";
    $matricNumber = "DI220170";
    $course = "Information Technology";
    $yearOfStudy = "Year 2";
    $address = "Putrajaya Presint 18";
    ?>
    <table border="1">
        <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
        </tr>
        <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
        </tr>
        <tr>
        <td>Year of Study</td>
        <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
