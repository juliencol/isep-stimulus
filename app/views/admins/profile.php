<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/profile.css'; ?> </style>

<?php require APPROOT . '/views/inc/header_admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-photo">
            <?php if ($data['user']->is_female) { ?>
                <img id="photo" class="profile-picture" src="https://lh3.googleusercontent.com/proxy/t1bJNTxUS7IkaGBq0g1WaMNc13XWvlIMBxMsQZ3ztJvEm6VOoBfpvL2GfNEbKDJcuWcI7Q24ePYdT_CFVhqlBkvKGbj4ghS6O6DuikgaKX2txEZ4Rm1_39cVe66Bi6772evm1MrVxTP3yzGMSfiKJbofwPWZ53CUuTWm8iqx8gKnkI_xZGkP9-6MSIYVUkd2pAmcmKFdWSFTlYNpHCroyq-ns7m4eq3UvZfIG0a0rbb-HIgQPwvPH31ERf9FjqcoSA"/>
            <?php } else { ?>
                <img id="photo" class="profile-picture" src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/user-male-icon.png"/>
            <?php } ?>
        </div>
        <div class="col-info">
            <p>Nom: Cunin</p>
            <p>Prénom: Cyprian</p>
            <p>Date de naissance : 07/01/1999</p>
            <p>Entreprise : Isep</p>
            <p>Rôle : Administrateur</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="profile-btn">
            <a class="btn-primary"  href="<?php echo URLROOT; ?>admins/manage_user">Gérer</a>
            <a class="btn-primary" href="<?php echo URLROOT; ?>/supervisors/search">Rechercher</a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>