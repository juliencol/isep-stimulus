<?php 

$code=1234;

if (isset($_POST['code']) AND $_POST['code']==$code) 
{
	header ('Location:sound_test_2.php');
	exit();
}

else 
{
	header ('Location:sound_test_mauvais_code.php');
	exit();
}

 ?>
