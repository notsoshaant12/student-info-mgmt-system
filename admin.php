<html>
<head>
    <title>Student Management</title>
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

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://akm-img-a-in.tosshub.com/indiatoday/images/story/202502/btech-student-committed-suicide-in-kiit-hostel-170504933-16x9.jpg?VersionId=6INhFZ_aWi0tIXU5i7BhLSnk6gjpcL4W') no-repeat center center/cover;
            opacity: 0.3;
            z-index: -1;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        .btn {
            display: block;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <?php 
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        
        if($uname == "prashant" && $pass == "pjha") {
            echo '<a href="insert.html" class="btn">Insert Student</a>';
            echo '<a href="update.html" class="btn">Update Student</a>';
            echo '<a href="delete.html" class="btn">Delete Student</a>';
        } else {
            echo '<p class="error">Invalid Credentials !!!</p>';
        }
        ?>
    </div>
</body>
</html>
