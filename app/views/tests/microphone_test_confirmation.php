<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/test_confirmation.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>
<br><br>
<div class="container">
	<h1>Les résultats du test ont été enregistrés avec succès </h1>

	<div id="bouton">
		
		<p><a href="<?php echo URLROOT; ?>tests/microphone_test_results">Voir les résultats</a></p>

		<br><br><br>

		<p><a href="<?php echo URLROOT; ?>users/profile">Retour au profil </a></p>

	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>