<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://imgs.search.brave.com/_MT_2-0kNDCplUNgZhsunxRZFJflWucJ1prngL1q61A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9raWl0/LmFjLmluL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIxLzAyL0tJ/SVQtVW5pdmVyc2l0/eS1DYW11cy0zLUxp/YnJhcnkuanBn') no-repeat center center/cover;
            opacity: 0.3;
            z-index: -1;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #007bff;
            color: white;
        }

        td {
            background: #ffffff;
        }

        .message-box {
            font-size: 20px;
            font-weight: bold;
            color: red;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <?php
    // Create connection
    $con = mysqli_connect('localhost:3306', 'root', '', 'cse15');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $roll = $_POST['roll'];
    $sql = "SELECT * FROM `student` WHERE roll = '$roll'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>
                <tr><th>Roll</th><th>Name</th><th>CGPA</th><th>Gender</th><th>Branch</th></tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["roll"] . "</td><td>" . $row["name"] . "</td><td>" . $row["cgpa"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["branch"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='message-box'>No such student exists!!!</div>";
    }

    $con->close();
    ?>
</body>
</html>