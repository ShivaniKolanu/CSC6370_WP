<?php
// require_once('server_connection.php');
$conn = new mysqli("localhost", "skolanu1", "skolanu1", "skolanu1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM DEPARTMENT");
?>

<html>
    <head>
        <title>Classwork 9</title>

    </head>
    <body>
        <h1>Employee Registration Form</h1>
        <form method="POST" action="submit.php">
            Employee Name:
            <input type="text" name="emp_name" id="emp_name" required>
            <br><br>
            Job Name:
            <input type="text" name="job_name" id="job_name" required>
            <br><br>
            Hire Date:
            <input type="date" name="hire_date" id="hire_date" required>
            <br><br>
            Salary:
            <input type="text" name="salary" id="salary" required placeholder="Enter Salary in numbers">
            <br><br>
            Department:
            <select name="department" id="department">

                <?php 
                while($row_list=mysqli_fetch_assoc($result)){  
                    ?>  
                    <option value="<?php echo $row_list['dept_name']; ?>">  
                        <?php echo $row_list['dept_name'];?>  
                    </option>  
                    <?php  
                } 
                ?>

            </select>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
