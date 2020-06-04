<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <h1>Page de recherche</h1>    
    <form method="post" action="">
        <h3>Qui voulez-vous rechercher ?</h3>
        <div class="research-bar">
            <input type="search" name="research" value="<?php if (isset($research)) { echo $research; }?>" placeholder="Rechercher..."/> 
        </div>
        <div class="research-refine">
            <p>
                Sexe :
                <input type="radio" name="gender" value="female" id="female" /><label for="female"> Femme</label>
                <input type="radio" name="gender" value="male" id="male" /><label for="male"> Homme</label>
                <input type="radio" name="gender" value="other" id="other" /><label for="other"> Autre</label>
            </p>
            <p>
                Nom de l'entreprise :
                <input type="text" name="company" />
            </p>
        </div>
        <input type="submit" class="btn-primary" name="submit_research" value="Rechercher" />
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>

