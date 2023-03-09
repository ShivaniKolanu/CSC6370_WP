<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
        <?php
            if(isset($_POST['name']) && $_POST['name']!="" && isset($_POST['section']) && isset($_POST['credit-card']) && $_POST['credit-card']!="" && isset($_POST['type'])){

                ?>
                <h1>Thanks, sucker!</h1>

                <p>Your information has been recorded.</p>

                <dl>
                    <dt>Name</dt>
                    <dd><?php print $_POST["name"] ?></dd>

                    <dt>Section</dt>
                    <dd><?php print $_POST["section"] ?></dd>

                    <dt>Credit Card</dt>
                    <dd><?php print $_POST["credit-card"] ?>
                    (<?php print $_POST["type"] ?>)
                    </dd>
                </dl>

                <?php 
                    $old_data = file_get_contents("sucker.html");

                    $data = $_POST['name']. ";" .$_POST['section'].";".$_POST['credit-card'].";".$_POST['type']."<br>";

                    $final_data = $old_data.$data;

                    file_put_contents("sucker.html",$final_data);
                    // $file = fopen("sucker.html","a");

                    // fwrite($file,$_POST['name']. ";" .$_POST['section'].";".$_POST['credit-card'].";".$_POST['type']."<br>");
                ?>

                <h4>Here are all the suckers who have submitted here:<br></h4>
                <?php
                    $contents = file_get_contents("sucker.html");
                    echo "<pre>$contents</pre>";
                ?>



                <?php
            }else{
                ?>

                <h1>Sorry</h1>

                <p>You didn't fill out the form completely.<a href="buyagrade.html">Try again?</a></p>



                <?php
            }   
                                
        ?>
        

		

    </body>
</html> 