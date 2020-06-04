<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Modifier la FAQ</h1>
  <?php 
  if(!empty($data)){
  foreach($data as $questions): ?>
  <form class="form" method="post" >
      <div class="form">
      <div>
      <?php $sujet=$questions->title;?>
        <label for="Sujet"> <strong>Sujet</strong>  </label>
          <input type="text" name="Sujet" id="sujet" placeholder="Sujet" value="<?=$sujet?>">
      </div>
      <div>
      <?php $question=$questions->subject;?>
        <label for="Question"> <strong>Question</strong>  </label>
          <input type="text" name="Question" id="question" value="<?=$question?>">
      </div>
      <div>
      <?php $title=$questions->answer;?>
        <label for="Message"> <strong>Message</strong>  </label>
          <textarea name="Message" id="message" cols="100" rows="20" placeholder="Message"><?=$title?></textarea>
      </div>
      </div>
      <input class="btn-primary" type="submit" value="Enregistrer">
  </form>
  <?php endforeach;}
  else{ ?>
    <form class="form" method="post" >
    <div class="form">
    <div>
        <label for="Sujet"> <strong>Sujet</strong>  </label>
        <input type="text" name="Sujet" id="sujet" placeholder="Sujet">
    </div>
    <div>
        <label for="Question"> <strong>Question</strong>  </label>
        <input type="text" name="Question" id="question" placeholder="Question">
    </div>
    <div>
        <label for="Message"> <strong>Message</strong>  </label>
        <textarea name="Message" id="message" cols="100" rows="20" placeholder="Message"></textarea>
    </div>
    </div>
    <input class="btn-primary" type="submit" value="Enregistrer">
</form>
  <?php } ?>
  
  
  <div class="clear" style="clear:both"></div>
  
  </body>
  </html>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>

