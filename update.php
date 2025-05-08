<html>
<body>
<?php

// Create connection
$con = mysqli_connect('sql112.infinityfree.com:3306', 'if0_38929520', 'Prajha2004', 'if0_38929520_cse15');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$roll = $_POST['roll'];
$name = $_POST['name'];
$cgpa = $_POST['cgpa'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];

// Check if the record exists
$check_sql = "SELECT * FROM `student` WHERE roll = '$roll'";
$check_result = mysqli_query($con, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    // Update all columns
    $sql = "UPDATE `student` SET 
                name = '$name', 
                cgpa = '$cgpa', 
                gender = '$gender', 
                branch = '$branch' 
            WHERE roll = '$roll'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Student record updated successfully!'); window.location.href = 'update.html';</script>";
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Error: No student found with Roll No. $roll'); window.history.back();</script>";
}

// Close connection
mysqli_close($con);

?>
</body>
</html>
