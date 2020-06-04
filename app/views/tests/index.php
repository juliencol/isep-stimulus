<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/index.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/common_test.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
	<h1 class="test_header">Sélectionnez votre test</h1>

	<div class="tests">
		<a class="test" href="<?php echo URLROOT; ?>tests/sound_test">
			<img src="https://res.cloudinary.com/isep/image/upload/v1587337102/stimulus/image_sound_test_hps8y3.png">
			<h3>Temps de réaction à un son</h3>
		</a>
	
		<a class="test" href="<?php echo URLROOT; ?>tests/microphone_test">
			<img src="https://res.cloudinary.com/isep/image/upload/v1587337102/stimulus/image_micro_test_lrllre.png">
			<h3>Capacité à reproduire un son</h3>
		</a>	
	
		<a class="test" href="<?php echo URLROOT; ?>tests/light_test">
			<img src="https://res.cloudinary.com/isep/image/upload/v1587337102/stimulus/image_light_test_xkrkfs.png">
			<h3>Temps de réaction à une lumière</h3>
		</a>
	</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>