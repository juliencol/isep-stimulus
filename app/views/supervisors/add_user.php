<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="container">
      <div id="titre">
        <h1>Gestion des utilisateurs</h1>
      </div>
      <div id="add-section">
        <h3> Ajouter un utilisateur</h3>
        <form method="post" action="">
                        <label>Nom : </label>
                        <input type="text" name="last_name" id="last_name" placeholder="Dupont" required />
                        <br />

                        <label>Prénom : </label>
                        <input type="text" name="first_name" id="first_name" placeholder="Jean" required />
                        <br />

                        <label>Sexe : </label>
                        <input type="radio" name="gender" id="female" value="F" required /><label for id="female"> Femme</label>
                        <input type="radio" name="gender" id="male" value="M" required /><label for id="male"> Homme</label>
                        <input type="radio" name="gender" id="other" value="A" required /><label for id="other"> Autre</label>
                        <br /> 

                        <label>Email : </label>
                        <input type="text" name="email" id="email" placeholder="jeandupont@email.com" required />
                        <br />

                        <label>Mot de passe : </label>
                        <input type="password" name="password" id="password" min="8" placeholder="minimum 8 caractères" required />
                        <br />

                        <label>Date de naissance : </label>
                        <input type="date" name="birthdate" id="birthdate" min="1900-01-01" placeholder="1999-01-01" required />
                        <br />

                        <label>Nom de l'entreprise : </label>
                        <input type="text" name="company_name" id="company_name" placeholder="Dupont Corporation" required />
                        <br />

                        <label>Numéro employé : </label>
                        <input type="number" name="employee_number" id="employee_number" maxlength="5" placeholder="12345" required />
                        <br /><br />    

                        <input type="submit" class="btn-primary" name="submit_add" id="submit_add" value="Ajouter" />

        </form>
      </div>
      <div class="user-list">
          <a class="btn-primary" href="gestion.php">Retour à la liste des utilisateurs</a>
      </div>      
  </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
    

        
      