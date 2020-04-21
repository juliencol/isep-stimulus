<?php include '../../config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/sound_test_code.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>


	<h1>Temps de réaction à un son</h1>

	<p>Veuillez saisir le code de votre test </p> <br>

	<form method="post" action="test_sound_code_confirmation.php">
		<p><input type="text" name="code" placeholder="Ex : 6248" maxlength="4"></p> 
		
		<p>
			<input type="submit" value="Valider"></form> <form method="post" action="test.php"> <input type="submit" value="Retour" ></form>
		</p>
		
	

