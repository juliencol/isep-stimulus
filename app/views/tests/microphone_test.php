<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/common_test.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container text-center">
	<h1 class="test_header">Capacité à reproduire un son </h1>
	<p class="text_explicatif">
		Ce test dure approximativement 2 minutes. <br> <br>
		Lorsque vous entendez un son, vous allez devoir approcher votre bouche du  micro qui se trouve devant vous et tenter de le  reproduire.  <br> <br>
		Il ne s'agit pas d'un test de rapidité. Vous devez seulement essayer de reproduire le son duu mieux que vous pouvez. Plus votre reproduction est proche du son d'origine, plus votre score sera élevé. 
	</p>
	<form method="post" action="<?php echo URLROOT; ?>tests/microphone_test_doing">
		<label>Veuillez rentrer le code du test : </label>
		<input type="text" name="code" placeholder="Ex : 6248" maxlength="4" required></p> 
		<input type="submit" value="Commencer le test" class="btn-primary">
	</form>
</div>
	
<?php require APPROOT . '/views/inc/footer.php'; ?>