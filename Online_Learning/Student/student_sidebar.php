<!-- <header class="header">
        <a href="" class="admin_dash">Student Dashboard</a>
        <div class="logout">
            <a href="../logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="student_profile.php">My Profile</a>
            </li>
            <li>
                <a href="student_course.php">My Cousres</a>
            </li>
            <li>
                <a href="student_result_show.php">My Result</a>
            </li>
        </ul>
    </aside> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        /* Style for the navigation bar */
        .dash{
            /* background-color: #fff; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 15%; */
            height: 25px;
            border-radius: 5px;
            flex-grow: 1;
        }
        .admin-dash{
            color: #fff;
            font-size: 25px;
        }
        .navbar {
            display: flex;
            height: 80px;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px;
        }
        .nav-items{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-grow: 1;
        }
        /* Style for the navigation items */
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        
        .navbar ul li {
            margin-right: 20px;
        }
        
        .navbar ul li:last-child {
            margin-right: 0;
        }
        
        .navbar ul li a {
            font-size: 20px;
            color: white;
            text-decoration: none;
        }
        
        /* Style for the button */
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="dash">
<a class="admin-dash" href="../Teacher/studenthome.php">Student Dashboard</a>

    </div>
    <div class="nav-items">
        <ul>
            <li>
                <a href="student_profile.php">My Profile</a>
            </li>
            <li>
               <a href="student_course.php">Cousres</a>
            </li>
            <li>
              <a href="student_result_show.php">My Result</a>
            </li>
        </ul>
        <a href="../logout.php" class="btn btn-primary">Logout</a>
    </div>    
</div>
</body>
</html>
