<html>
    <head>
        <title>CW04 | Ex2</title>
        <style>
            body{
                background-color:lightgray;
                color:blue;
            }
            h1{
                font-style:italic;
            }
        </style>
    </head>


    <body>
        <h1>Classwork 4  - Exercise 2 </h1>
        <h2> PHP code to print below pattern. </h2>
        <?php 

            for ($i = 0; $i <= 5; $i++) {
                for ($j = 0; $j < $i; $j++) {
                echo "*";
                }
                echo "<br>";
            }
        
        ?>
        <br><br><a href="index.php">Back to Main Page</a>

    </body>
</html>