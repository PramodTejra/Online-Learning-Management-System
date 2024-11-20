<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "iiit_b";
$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * from user_std";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="../admin.css"> -->
    <!-- <link rel="stylesheet" href="../admission.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        /* Style for the navigation bar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px;
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
    <?php
    include '../Admin/admin_sidebar.php';
    ?>

    <div class="content">
        <center>
            <h1 style="font-weight:550;">Applied For Admission</h1>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            ?>
            <br>
            <form action="../Admin/StudentControl/approve_deny.php" method="post">
                <table border="1px">
                    <tr>
                        <!-- <th style="padding:20px; font-size:15px">UserName</th> -->
                        <th style="padding:20px; font-size:15px">Select</th>
                        <th style="padding:20px; font-size:15px">Name</th>
                        <th style="padding:20px; font-size:15px">Father Name</th>
                        <th style="padding:20px; font-size:15px">Gender</th>
                        <th style="padding:20px; font-size:15px">Jee Rank</th>
                        <th style="padding:20px; font-size:15px">Address</th>
                        <th style="padding:20px; font-size:15px">Email</th>
                        <th style="padding:20px; font-size:15px">Phone</th>
                        <th style="padding:20px; font-size:15px">Course</th>
                        <th style="padding:20px; font-size:15px">Dept</th>
                        <th style="padding:20px; font-size:15px">Branch</th>
                        <th style="padding:20px; font-size:15px">Sem</th>
                        <th style="padding:20px; font-size:15px">Password</th>
                        <th style="padding:20px; font-size:15px">Scholar .No.</th>
                        <th style="padding:20px; font-size:15px">Section</th>
                        <th style="padding:20px; font-size:15px"><button class='btn btn-primary' type="submit" name="approve_multiple">Approve</button></th>
                        <th style="padding:20px; font-size:15px"><button class='btn btn-danger' type="submit" name="deny_multiple">Deny</button></th>
                    </tr>

                    <?php
                    while ($info = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td style="padding:20px;"><input style="width: 30px;height:30px;" type="checkbox" name="selected_students[]" value="<?php echo $info['schno'] ?>"></td>
                            <td style="padding:20px;"><?php echo $info['name']; ?></td>
                            <td style="padding:20px;"><?php echo $info['father']; ?></td>
                            <td style="padding:20px;"><?php echo $info['gender']; ?></td>
                            <td style="padding:20px;"><?php echo $info['jeerank']; ?></td>
                            <td style="padding:20px;"><?php echo $info['address']; ?></td>
                            <td style="padding:20px;"><?php echo $info['email']; ?></td>
                            <td style="padding:20px;"><?php echo $info['phone']; ?></td>
                            <td style="padding:20px;"><?php echo $info['course']; ?></td>
                            <td style="padding:20px;"><?php echo $info['department']; ?></td>
                            <td style="padding:20px;"><?php echo $info['branch']; ?></td>
                            <td style="padding:20px;"><?php echo $info['semester']; ?></td>
                            <td style="padding:20px;"><?php echo $info['password']; ?></td>
                            <td style="padding:20px;"><?php echo $info['schno']; ?></td>
                            <td style="padding:20px;">
                                <select name="section[<?php echo $info['section']; ?>]">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td style="padding:20px;"><a class='btn btn-primary' onClick="return confirm('Are You Sure to Approve this');" href='../Admin/StudentControl/approve_deny.php?schno_id=<?php echo $info['schno']; ?>'>Approve</a></td>
                            <td style="padding:20px;"><a class='btn btn-danger' onClick="return confirm('Are You Sure to Delete this');" href='../Admin/StudentControl/approve_deny.php?schnodeny_id=<?php echo $info['schno']; ?>'>Deny</a></td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                
            </form>
        </center>
    </div>
</body>

</html>
