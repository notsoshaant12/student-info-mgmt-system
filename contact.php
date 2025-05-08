<html>
<head>
    <title>Database Insert</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .message-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <?php
    // database connection
    $con = mysqli_connect('sql112.infinityfree.com:3306', 'if0_38929520', 'Prajha2004', 'if0_38929520_cse15');

    // get the post records
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $cgpa = $_POST['cgpa'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];

    // database insert SQL code
    $sql = "INSERT INTO `student` (`roll`, `name`, `cgpa`, `gender`, `branch`) VALUES ('$roll', '$name', '$cgpa', '$gender', '$branch')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "<div class='message-box'>Student Record Inserted</div>";
    }
    ?>
</body>
</html>
