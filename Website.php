<?php

require_once("connecting.php");//connecting.php has queries of sql which is needed.
if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['number']) &&!empty($_POST['MODE_OF_PAYMENT'])) {

	$fn=$_POST['fname'];
	$e=$_POST['email']; //assignig queries to variables to reduce lines of code.
	$m=$_POST['message'];
	$n=$_POST['number'];
    $MOP=$_POST['MODE_OF_PAYMENT'];

	$sql="INSERT INTO old_age_home VALUES ('','$fn','$e','$m','$n','$MOP')";//the first one is blank as the id is A_I

   $res=mysql_query($sql);//mysql_query() tells the action to be performed on the table
	
	if($res) {

		echo "inserted";
	}
	else {
		echo "not inserted";
	}
}
else {//if any of the fields in the form are empty.
    echo "all fields required";
}

?>
