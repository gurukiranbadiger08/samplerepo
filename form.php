<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body{
        background:url("https://mcdn.wallpapersafari.com/medium/51/80/JdpMBo.jpg");
        background-size:cover;
    }

    h1{
        color: black;
        text-align: center;
        
    }

    form{

        padding-left: 750px;
        text-align:left;
    }

    label{
        size: 30px;
    }
    
    table{
        border: 1px solid black;
        padding: 50px;
        float: left;
    }

    tr{
        padding: 5px; 
    }
    
      
</style>
</head>

<body>
    <h1>SAMPLE FORM</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label>NAME:&nbsp;<input type="text" id="t1" placeholder="Enter your Name" name="t1" required><br></label><br>
        <label>ADDRESS:&nbsp;<input type="textarea" id="t2" placeholder="Enter your address" name="t2" required><br></label><br>
        <label>GENDER:&nbsp;<input type="radio" id="t3" name="t3" value="male" required>male&nbsp;
            <input type="radio" id="t3" name="t3" value="female" required>female&nbsp;
            <input type="radio" id="t3" name="t3" value="other" required>other&nbsp;<br></label><br>
        <label>DESIGNATION:&nbsp;<select  id="t4" name="t4" required>
                <option value="ASE">Associate software Developer</option>
                <option value="Sinior s/w dev">Sinior software Developer</option>
                <option value="finance">Finance</option>
                <option value="admin">Admin</option>
            </select><br></label><br>
        <label>
            <p><input type="checkbox" id="t5" name="t5" value="yes"> Above mentioned Info are correct</p><br>
        </label><br>
        <label><input type="reset" value="Reset">&nbsp;&nbsp;<input type="submit" value="Submit"></label><br>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['t1'];
        $adress=$_POST['t2'];
        $gender=$_POST['t3'];
        $designation=$_POST['t4'];
        $check=$_POST['t5'];
        /*if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }*/
       echo "<table>";
  echo "<tr>";
    echo "<th>NAME</th>";
    echo "<th>Address</th>";
    echo "<th>Gender</th>";
    echo "<th>Designation</th>";
    echo "<th>Check</th>";
  echo "</tr>";
  echo "<tr>";
   echo  "<td>$name</td>";
    echo "<td>$adress</td>";
    echo "<td>$gender</td>";
    echo "<td>$designation</td>";
    echo "<td>$check</td>";
 echo "</tr>";
echo "</table>";
    }
    ?>
</body>

</html>