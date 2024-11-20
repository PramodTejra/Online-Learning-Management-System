<?php

session_start();

    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }

    $host="localhost";

    $user="root";

    $password="";

    $db="iiit_b";

    $data=mysqli_connect($host,$user,$password,$db); 

    $email=$_SESSION['email'];

    $sql="SELECT * FROM teacher t JOIN feedback f ON t.name = f.facname  WHERE email='$email' ";

    $result=mysqli_query($data,$sql);

    // $row=mysqli_fetch_assoc($result);

    // $name = $row['$facname'];
    
    // $sql1="SELECT * from feedback WHERE facname='$name'";
    // $result1=mysqli_query($data,$sql1)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../admission.css"> -->
    <style>
        .table_th{
            padding:20px;
            font-size:20px;
        }
        .table_td{
            padding:20px;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
    include 'teacher_sidebar.php';
    ?>

<div class="content">
            <center>
            <h1 style="font-weight:550;">Feedback Result</h1>
            <br>
            <table border="1px">
                <tr>
                    <th class="table_th">Feedback No.</th>
                    <th class="table_th">q1</th>
                    <th class="table_th">q2</th>
                    <th class="table_th">q3</th>
                    <th class="table_th">q4</th>
                    <th class="table_th">q5</th>
                    <th class="table_th">q6</th>
                    <th class="table_th">q7</th>
                    <th class="table_th">q8</th>
                    <th class="table_th">q9</th>
                    <th class="table_th">q10</th>
                    <th class="table_th">Comments</th>
                    <th class="table_th">Average</th>
                </tr>
                <?php
                    $totalRating = 0;
                    $totalAverage = 0;
                    $fno = 0;
                while($info=$result->fetch_assoc())
                {
                    $fno = $fno + 1;
                    $totalRating = $info['q1'] + $info['q2'] + $info['q3'] + $info['q4'] + $info['q5'] + $info['q6'] + $info['q7'] + $info['q8'] + $info['q9'] + $info['q10'];
                    $average = $totalRating/10;

                ?>
                <tr>
                    <td class="table_td"><?php echo $fno ?></td>
                    <td class="table_td"><?php echo $info['q1']; ?></td>
                    <td class="table_td"><?php echo $info['q2']; ?></td>
                    <td class="table_td"><?php echo $info['q3']; ?></td>
                    <td class="table_td"><?php echo $info['q4']; ?></td>
                    <td class="table_td"><?php echo $info['q5']; ?></td>
                    <td class="table_td"><?php echo $info['q6']; ?></td>
                    <td class="table_td"><?php echo $info['q7']; ?></td>
                    <td class="table_td"><?php echo $info['q8']; ?></td>
                    <td class="table_td"><?php echo $info['q9']; ?></td>
                    <td class="table_td"><?php echo $info['q10']; ?></td>
                    <td class="table_td"><?php echo $info['comments']; ?></td>
                    <td class="table_td"><b><?php echo $average; ?></b></td>
                </tr>
                <?php
                // echo $totalRating;
                $totalAverage = $totalAverage + $average;
                // echo $totalAverage;
                }
                $totalAverage = $totalAverage/$fno;
                $roundedTotalAverage = round($totalAverage,1);
               
                ?>
                <tr>
                    <td colspan="12" class="table_td" style="font-size:x-large;">Total Average</td>
                    <td class="table_td"><b><?php echo $roundedTotalAverage; ?></b></td>
                </tr>
             </table>  
            </center>
        </div>

</body>
</html>