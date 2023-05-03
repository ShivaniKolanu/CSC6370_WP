<?php
$conn = new mysqli("localhost", "skolanu1", "skolanu1", "skolanu1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['emp_name'];
    $job = $_POST['job_name'];
    $hire = $_POST['hire_date'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];

    // Use prepared statements
    $stmt = $conn->prepare("INSERT INTO EMPLOYEE (emp_name, job_name, hire_date, salary, department) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $job, $hire, $salary, $department);

    if ($stmt->execute()) {
        echo "Employee Data Inserted successfully!\n";
    } else {
        echo "Error inserting employee data: " . $stmt->error;
    }

    $stmt->close();
    $result = $conn->query("SELECT * FROM EMPLOYEE");

}

$conn->close();
?>


<html>
    <head>
        <title>Classwork 9</title>
        <style>
        table,tr,th,td {
            text-align: center;
            border-spacing: 8px 0;
        }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Employee Name</th>
                <th>Job Name</th>
                <th>Hire Date</th>
                <th>Salary</th>
                <th>Department</th>
            </tr>
            <?php

                while($row_list=mysqli_fetch_assoc($result)){  ?> 
                    <tr>
                        <td><?php echo $row_list['emp_name']; ?></td>
                        <td><?php echo $row_list['job_name']; ?></td>
                        <td><?php echo $row_list['hire_date']; ?></td>
                        <td><?php echo $row_list['salary']; ?></td>
                        <td><?php echo $row_list['department']; ?></td>
                    </tr>

                <?php }

            ?>

        </table>
    </body>
</html>