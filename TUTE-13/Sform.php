<?php include("connection.php")?>
<html>
<head>
    <title>Students details Form</title>
    <link rel="stylesheet" href="Sform.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Student details
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Student ID: </label>
                    <input type="text" class="input" name="sid" required>
                </div>

                <div class="input_field">
                    <label for="">Name: </label>
                    <input type="text" class="input" name="sname" required>
                </div>

                <div class="input_field">
                    <label for="">Email : </label>
                    <input type="text" class="input" name="email" required>
                </div> 

                <div class="input_field">
                    <label for="">Password: </label>
                    <input type="password" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label for=""></label>
                    <input type="submit" class="btn" value="Submit" name="register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['register'])
    {
        $sid  = $_POST['sid'];
        $name  = $_POST['sname'];
        $email  = $_POST['email'];
        $pwd    = $_POST['password'];

        if($sid != "" && $name != "" && $email != "" && $pwd != "")
        {

        $query = "INSERT INTO STUDENTS VALUES('$sid','$name','$email','$pwd')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "Failed";
        }
    }
    else
    {
        echo "Please fill the form";
    }
    }
?>