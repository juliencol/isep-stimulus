<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Modifier la FAQ</h1>
  
  <form class="form" action="FAQ_adminGestion.html">
      <div class="form">
      <div>
          <input type="text" name="Sujet" id="sujet" placeholder="Sujet">
      </div>
      <div>
          <input type="text" name="Question" id="question" placeholder="Question">
      </div>
      <div>
          <textarea name="message" id="message" cols="100" rows="20" placeholder="Message"></textarea>
      </div>
      </div>
      <input type="submit" value="Enregistrer">
  </form>
  
  <div class="clear" style="clear:both"></div>
  <footer class="footer">  
      <nav class="footerGauche">
          <a href="">Nous contacter</a>
          <a href="">CGU et Mentions légales</a>
      </nav>
      <nav class="footerDroite">
          <a href="">Copyright Stimulus Inc.</a>
      </nav>
  </footer>
  </body>
  </html>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>

