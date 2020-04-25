<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Modifier la FAQ</h1>
  <div class="bodyTable">
      <input class="buttonAjout" type=button onclick=window.location.href='./FAQ_Add.html'; value='Ajouter une question' />
      <div class="body">
       
          <table> 
              <thead>
                  <tr>
                      <td>
                          Sujet 1
                      </td>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Question 1 ?</td>
                  </tr>
                  <tr>
                      <td class="reponse">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad possimus voluptatum provident molestiae quod. Incidunt quod ipsa, sunt nam exercitationem, a soluta sequi quo est praesentium quia deleniti alias numquam?
                      </td>
                  </tr>
              </tbody>
          </table>
          <aside class="sidebar">
              <ul>
                  <li><input class="button" type=button onclick=window.location.href=''; value='Supprimer' /></li>
                  
                  <li><input class="button" type=button onclick=window.location.href=''; value='Modifier' /></li>
                  <li>
                      <input type="radio" name="visibleQ1" id='visible'checked/>
                      <label for="vidible">Visible</label>
                      <input type="radio" name="visibleQ1" id="invisible">
                      <label for="invisible">Invisible</label>
                  </li>
              </ul>
          </aside>
  
      </div>
      <div class="body">
          
          <table> 
              <thead>
                  <tr>
                      <td>
                      Sujet 2
                      </td>
                  </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Question 2 ?</td>
              </tr>
              <tr>
                  <td class="reponse">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad possimus voluptatum provident molestiae quod. Incidunt quod ipsa, sunt nam exercitationem, a soluta sequi quo est praesentium quia deleniti alias numquam?
                  </td>
              </tr>
          </tbody>
          </table>
          <aside class="sidebar">
              <ul>
                  <li><input class="button" type=button onclick=window.location.href=''; value='Supprimer' /></li>
                  
                  <li><input class="button" type=button onclick=window.location.href=''; value='Modifier' /></li>
                  <li>
                      <input type="radio" name="visibleQ2" id='visible' checked/>
                      <label for="vidible">Visible</label>
                      <input type="radio" name="visibleQ2" id="invisible">
                      <label for="invisible">Invisible</label>
                  </li>
              </ul>
          </aside>
  
      </div>
  </div>
</div>

