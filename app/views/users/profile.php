<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/profile.css'; ?> </style>



<html>
    <link rel="stylesheet" href="../../stylesheets/styleCSSPagesGabriel.css">
    <title>USER Profile</title>
    <div id="container">
        <header>
        </header>
        <section>
            <aside>
                <img id="photo" src="https://res.cloudinary.com/isep/image/upload/v1587367413/stimulus/julien_ar3pu3.jpg"/>
                <button>Changer la photo</button>
            </aside>
            <article>
                <h2>UTILISATEUR</h2>
                <p>Nom: Colombain</p>
                <p>Prénom: Julien</p>
                <p>Date de naissance : 09/09/1999</p>
                <p>Numéro d'employé : 10484</p>
                <p>Entreprise : ISEP</p>
                <button>Editer le profil</button>
            </article>
        </section>
        <a class="btn-primary"  href="<?php echo URLROOT; ?>tests">Tests</a>
        <a class="btn-primary" href="<?php echo URLROOT; ?>tests">Résultats</a>
        <footer></footer>
    </div>

</html>
