<html>
<body>
<?php

// Create connection
$con = mysqli_connect('localhost:3306', 'root', '', 'cse15');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$roll = $_POST['roll'];

// Check if the record exists
$check_sql = "SELECT * FROM `student` WHERE roll = '$roll'";
$check_result = mysqli_query($con, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    // If record exists, proceed with deletion
    $sql = "DELETE FROM `student` WHERE roll = '$roll'";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Student record deleted successfully!'); window.location.href = 'delete.html';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($con) . "'); window.history.back();</script>";
    }
} else {
    // If no matching record is found
    echo "<script>alert('Error: No student found with Roll No. $roll'); window.history.back();</script>";
}

// Close the database connection
mysqli_close($con);

?>
</body>
</html>