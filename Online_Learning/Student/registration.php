<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registraton Form</title>
    <title>Login Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Student/registration.css">
    <!-- <link rel="stylesheet" href="../Student/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       .head{
            background-color: white;
            /* background-image: url(https://img.freepik.com/free-photo/cement-texture_1194-6525.jpg?size=626&ext=jpg&ga=GA1.1.8233333.1713378301&semt=ais); */
            background-size: cover;
            display: flex;
            padding-left: 20px;
        }
        .head img {
    max-width: 100%;
    max-height: 100%; 
    width: auto; 
    height: auto; 
}
.main_img{
    width: 100%;
    height: 900px;
}

nav {
  background-color: rgb(94, 162, 225);
  width: 100%;
  position: absolute;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

nav li {
  float: left;
}

nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

nav li a:hover {
  background-color: #ddd;
  color: #333;
}
.slideshow{
    display: flex;
    justify-items: center;
    align-items: center;
    margin-top: 50px;
    height: 59vh;
}
.current_updates{
    /* border: 2px solid white; */
    display: flex;
    align-items:center ;
    /* justify-content: center; */
    background-color: rgb(94, 162, 225);
    height: 5vh;
}
.updatesheading{
    flex-grow: 1;
    display: flex;
    align-items:center;
    justify-content: center;
    background-color:#333;
    height:100%;
    font-size: 15px;
    color:#ddd;
}
.updates{
    display: flex;
    justify-content: center;
}
.updates marquee a{
    font-size: 20px;
    color: white;
}


.main_img{
    width: 100%;
    height: 900px;
}

/* login form style  */

.form_deg{
    padding-top: 200px;
}
.label_deg{
    display: inline-block;
    color: rgb(0, 0, 0);
    width: 100px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
}
.login_form{
    background-color: rgb(121, 181, 211);
    width: 400px;
    padding-top: 70px;
    padding-bottom: 70px;
}
.title_deg{
    color: black;
    text-align: center;
    width: 400px;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 30px;
}
.body_deg{
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
}



footer{
    margin-top: 20vh;
}

    </style>

</head>
<body background="background.jpg" class="body_deg">
<header>
        <div class="head">
            <img src="https://iiitbhopal.ac.in/images/IIIT-Header.png" />
        </div>
        <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Admin/login.php">Admin Login</a></li>
            <li><a href="../Student/student_login.php">Student Login</a></li>
            <li><a href="../Teacher/teacherlogin.php">Teacher Login</a></li>
            <li><a href="../Student/registration.php">Student Registraton</a></li>
            <li><a href="../Teacher/teacher_registration.php">Teacher Registraton</a></li>
            <li><a href="https://iiitbhopal.ac.in/#!/M0001/SM0057/">Contact Us</a></li>
        </ul>
</nav>
    </header>

<section class="slideshow">
        <div style="width: 100%;"><?php
        include '../carousal.php';    
        ?></div>
    </section>

<section class="current_updates">
        <div class="updatesheading">Current Updates</div>
        <div style="flex-grow: 6;" class="updates">
            <marquee direction="left"><a href="#">This is updates Div</a></marquee>
        </div>
    </section>

     <center>
        <div class="form_degi">
            <centre class="title_deg">
               Student Registration Form
            </centre>
            <form action="../Student/data_check.php" method="POST" class="admission_form">
            <!-- <div class="adm_int">
                <label class="label_text">UserName</label>
                <input class="input_deg" type="text" name="username">
            </div> -->
            <div class="adm_int">
                <label class="label_text">Mr./Ms.</label>
                <select style="width:175px;" name="mrms">
                    <option class="input_deg" value="Mr">Mr</option>
                    <option class="input_deg" value="Ms">Ms</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Father Name</label>
                <input class="input_deg" type="text" name="father">
            </div>
            <div class="adm_int">
                <label class="label_text">Gender</label>
                <select style="width:175px;" name="gender">
                    <option class="input_deg" value="Male">Male</option>
                    <option class="input_deg" value="Female">Female</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Jee Rank</label>
                <input class="input_deg" type="text" name="jeerank">
            </div>
            <div class="adm_int">
                <label class="label_text">Address</label>
                <input class="input_deg" type="text" name="address">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Department</label>
                <select style="width:175px;" name="department">
                    <option class="input_deg" value="CSE">CSE</option>
                    <option class="input_deg" value="IT">IT</option>
                    <option class="input_deg" value="ECE">ECE</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Branch</label>
                <select style="width:175px;" name="branch">
                    <option class="input_deg" value="CSE">CSE</option>
                    <option class="input_deg" value="IT">IT</option>
                    <option class="input_deg" value="ECE">ECE</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Semester</label>
                <select style="width:175px;" name="semester">
                    <option class="input_deg" value="1">SEM 1</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Course</label>
                <select style="width:175px;" name="course">
                    <option class="input_deg" value="B.tech">B.tech</option>
                    <option class="input_deg" value="M.tech">M.tech</option>
                </select>
            </div>
            <div class="adm_int">
                <label class="label_text">Password</label>
                <input class="input_deg" type="password" name="password">
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" type="submit" id="submit" name="apply" value="Apply">
            </div>
        </form>
        </div>
    </center>

        <?php 
        include ('../footer.php');
        ?>
    
</body>
</html>