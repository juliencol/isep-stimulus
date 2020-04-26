<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>


<header class="titre">
  <h1>Modifier la FAQ</h1>
</header>
  
      <input class="buttonAjout" type=button onclick=window.location.href='./new'; value='Ajouter une question' />
    <div class='body'>
      <?php foreach($data as $faq_question): ?>
        <table> 
            <thead>
                 <tr>
                     <td>
                     <?= $faq_question->subject ?>
                     </td>
                 </tr>
            </thead>
        <tbody>
            <tr>
            
                <td>
                <?= $faq_question->title ?>
                
                </td>
            
            </tr>
            <tr>
                <td class="reponse">
                <?= $faq_question->answer ?>
                </td>
            </tr>
        </tbody>
        </table>
        <?php $num=$faq_question->id ?>
        <aside class="sidebar">
              <ul>
                  <li>
                  <form method="post">
                  <button class="button" type=submit name="idQuestion" value=<?php echo($num)?> >Supprimer </button>
                  </form>
                  </li>
                  
                  <li>
                  <form method="post" action='./new'>
                  <button class="button" type=submit name="newQuestion" value=<?php echo($num)?> >Modifier </button>
                  </form>
                  </li>
                  <li>
                  <?php
                  $name='Question'.$num;
                  ?>
                      <input type="radio" name='<?php echo($name) ?>' id='visible'checked/>
                      <label for="visible">Visible</label>
                      <input type="radio" name='<?php echo($name) ?>' id="invisible">
                      <label for="invisible">Invisible</label>
                  </li>
              </ul>
          </aside>
        <?php endforeach ; ?>
    </div>
 

          <?php require APPROOT . '/views/inc/footer.php'; ?>

