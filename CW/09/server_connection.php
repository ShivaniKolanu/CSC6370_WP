<?php
$host = "localhost";
$user = "skolanu1";
$pass = "skolanu1";
$dbname = "skolanu1";

//connection
$conn = new mysqli($host, $user, $pass, $dbname);
//check conn
if ($conn->connect_error) {
    echo "Could not connect to server\n";
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection established\n";

    $sql1 = "CREATE TABLE IF NOT EXISTS EMPLOYEE(employee_id int(6) unsigned auto_increment primary key,
            emp_name varchar(30) not null, job_name varchar(30) not null,hire_date date not null, salary varchar(30) not null, department varchar(20) not null)";
    $sql2 = "CREATE TABLE IF NOT EXISTS DEPARTMENT(det_id int(6) unsigned auto_increment primary key,
                dept_name varchar(30) not null, dept_location varchar(30) not null ) ";
    // $sql3 = "INSERT INTO DEPARTMENT(dept_name, dept_location) VALUES ('Computer Science', '25 Park Place'), ('Data Science', '55 Park Place'), ('Student Center', '55 Gilmer Street'), ('ISSS', '75 Gilmer Street')";
    if(($conn->query($sql1) == true) && ($conn->query($sql2) == true)){
        echo "\nTables created successfully!";
    } else {
        echo "\nError creating Table: ".$conn->error;
    }
}


echo mysql_get_server_info() . "\n";
$conn->close();
?>