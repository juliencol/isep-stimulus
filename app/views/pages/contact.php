<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/pages/contact.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Contacter nous</h1>
  <form method="post" action="mail_2.php">
		
		<p>
		<label for="expediteur">Expéditeur : indiquez ici votre adresse email </label> <br> <br>
		<input type="email" name="expediteur" id="expediteur" class="contact" required>
		</p>


		<p>
		<label for="objet">Objet : indiquez ici l'objet de votre message </label> <br> <br>
		<input type="text" name="objet" id="objet" class="contact">
		</p>

		<p>
		<label for="message">Votre message : </label> <br> <br>
		<textarea id="message" name="message" class="contact">	</textarea>
		</p>

		<div id="envoyer">
		<input type="submit" name="Envoyer" id="bouton">
		</div>

	</form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>