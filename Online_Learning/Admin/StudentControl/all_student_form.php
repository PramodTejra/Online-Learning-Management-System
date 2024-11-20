<?php

session_start();

    if (isset($_POST['apply'])) {
    // Get the branch and year values from the button's data attributes
    $department = $_POST['department'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];


    // Redirect to the new page with the branch and year as query parameters
    header("Location: branchYearStudent.php?department=$department&course=$course&semester=$semester");
    exit;
    }

    $host="localhost";

    $user="root";

    $password="";

    $db="iiit_b";

    $data=mysqli_connect($host,$user,$password,$db); 

    $sql="SELECT * from approve_user";

    $result=mysqli_query($data,$sql); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        .content{
    /* margin-left: 20%; */
    margin-top: 5%;
}
        .label_deg {
    display: inline-block;
    text-align: left;
    width: 120px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 5px; /* Add margin bottom for spacing */
}

.add_deg {
    background-color: #f2f2f2; /* Lighter background color */
    width: 500px;
    padding: 30px;
    margin: 0 auto; /* Center the form horizontally */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
}

/* Extra CSS for improved visibility and alignment */
.label_deg {
    display: inline-block;
    text-align: left;
    width: 120px;
    padding-top: 10px;
    padding-bottom: 10px;
}

.add_deg {
    background-color: rgb(121, 181, 211);
    width: 500px;
    padding: 30px;
    margin: 0 auto; /* Center the form horizontally */
    border-radius: 10px;
}

.add_deg form div {
    margin-bottom: 15px; /* Add spacing between form elements */
}

.add_deg form div:last-child {
    margin-bottom: 0; /* Remove bottom margin for last form element */
}

.add_deg form input[type="text"],
.add_deg form input[type="number"],
.add_deg form input[type="email"],
.add_deg form input[type="password"],
.add_deg form select,
.add_deg form textarea {
    width: calc(100% - 130px); /* Adjust width for form inputs */
    padding: 8px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.add_deg form select {
    width: 190px; /* Set width for select inputs */
}

.add_deg form input[type="file"] {
    margin-top: 5px; /* Add top margin for file input */
}

.add_deg form input[type="submit"] {
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px; 
}


/* Add top margin for submit button */
    </style>
    <!-- <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../admission.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
        include '../TeacherControl/admin_sidebar.php';  
    ?>
        <div class="content">
            <center>
            <h1 style="font-weight:550;">Student List</h1>
            <br>
            <div class="add_deg">
                <?php
                $info=$result->fetch_assoc()
                ?>
                <form method="POST">
                     <div>
                        <label class="label_deg">Department</label>
                        <select style="width:175px;" name="department">
                    <option class="input_deg" value="CSE">CSE</option>
                    <option class="input_deg" value="IT">IT</option>
                    <option class="input_deg" value="ECE">ECE</option>
                       </select>
                     </div>
                     <div>
                        <label class="label_deg">Course</label>
                        <select style="width:175px;" name="course">
                              <option class="input_deg" value="B.Tech">B.tech</option>
                              <option class="input_deg" value="M.Tech">M.Tech</option>
                        </select>
                     </div>
                     <div>
                        <label class="label_deg">Semester</label>
                        <select style="width:175px;" name="semester">
                            <option class="input_deg" value="1">SEM 1</option>
                            <option class="input_deg" value="2">SEM 2</option>
                            <option class="input_deg" value="3">SEM 3</option>
                            <option class="input_deg" value="4">SEM 4</option>
                            <option class="input_deg" value="5">SEM 5</option>
                            <option class="input_deg" value="6">SEM 6</option>
                            <option class="input_deg" value="7">SEM 7</option>
                            <option class="input_deg" value="8">SEM 8</option>
                        </select>
                     </div>
                     <div>
                         <input class="btn btn-primary" type="submit" id="submit" name="apply" value="Open">
                     </div>
                </form>
            </div>
            </center>
        </div>
</body>
</html>