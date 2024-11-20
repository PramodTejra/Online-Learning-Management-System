<?php

session_start();

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='student'){
        header("location:login.php");
    }

    $host="localhost";

    $user="root";

    $password="";

    $db="iiit_b";

    $data=mysqli_connect($host,$user,$password,$db);

    $id=$_GET['schno_id'];

    $sql="SELECT * FROM approve_user WHERE schno='$id' ";

    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();


    if(isset($_POST['update'])){ 
        $email=$_POST['email']; 
        $phone=$_POST['phone']; 
        $semester=$_POST['semester']; 
        $password=$_POST['password']; 

        $query="UPDATE approve_user SET  email='$email', phone='$phone',semester='$semester', password='$password' WHERE schno='$id' ";

        $result2=mysqli_query($data,$query);

        if($result2){
        $_SESSION['message']=' Student Updated Successful';
            header("location:view_student.php");
        }
    }

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
            <h1 style="font-weight:550;">Update Student</h1>
            <div class="add_deg">
            <form action="#" method="POST">
            <div>
                        <label>Scholar No.</label>
                        <?php echo "{$info['schno']}"; ?>
                        </div>
                    <div>
                        <label>Name</label>
                        <?php echo "{$info['name']}"; ?>
                        </div>    
                        <div>
                        <label>Father Name</label>
                        <?php echo "{$info['father']}"; ?>
                    </div>
                    <div>
                        <label>Address</label>
                        <?php echo "{$info['address']}"; ?>
                    </div>
                    <div>
                        <label>Department</label>
                        <?php echo "{$info['department']}"; ?>
                    </div>
                    <div>
                        <label>Branch</label>
                        <?php echo "{$info['branch']}"; ?>
                    </div>
                    <div>
                        <label>Course</label>
                        <?php echo "{$info['course']}"; ?>
                    </div>
                     <div>
                        <label class="label_deg">Email</label>
                        <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                     </div>
                     <div>
                        <label class="label_deg">Phone</label>
                        <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                     </div>
                     <div>
                        <label class="label_deg">Semester</label>
                        <input type="text" name="semester" value="<?php echo "{$info['semester']}"; ?>">
                     </div>
                     <div>
                        <label class="label_deg">Password</label>
                        <input type="password" name="password" value="<?php echo "{$info['password']}"; ?>">
                     </div>
                     <div>
                        <input class ="btn btn-primary" type="submit" name="update" value="Update">
                     </div>
                </form>
            </div>
            </center>
        </div>
</body>
</html>