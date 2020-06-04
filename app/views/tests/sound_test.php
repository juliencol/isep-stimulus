<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/common_test.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container text-center">
	<h1 class="test_header">Temps de réaction à un son</h1>
	<p class="text_explicatif">
		Ce test dure approximativement 2 minutes. <br> <br>
		Lorsque vous entendez un son, appuyez sur le bouton qui se trouve devant vous. <br> <br>
		Il s'agit d'un test de rapidité. Plus vous êtes rapide à appuyer sur le bouton, plus votre score sera élevé. <br> <br>
		Cependant, prenez garde à ne pas appuyer trop tôt. Si vous appuyez avant que le son ne se fasse entendre, vous devrez recommencer. 

	</p>
	<a class="btn-primary" href="<?php echo URLROOT; ?>tests/test_confirmation"">Commencer le test</a>	
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>