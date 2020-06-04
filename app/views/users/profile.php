<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/profile.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

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
            <p>Nom: <?php echo ucfirst($data['user']->last_name); ?></p></p>
            <p>Prénom: <?php echo ucfirst($data['user']->first_name); ?></p></p>
            <p>Date de naissance : <?php echo $data['user']->birthday_date; ?></p></p>
            <p>Entreprise : <?php echo ucfirst($data['user']->company); ?></p></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="profile-btn">
            <a class="btn-primary"  href="<?php echo URLROOT; ?>tests">Tests</a>
            <a class="btn-primary" href="<?php echo URLROOT; ?>/users/test_results">Résultats</a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
