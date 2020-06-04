<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/notifications.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container" id="container">
    <h1>Notifications</h1>
    <?php if(!empty($data['notifications'])) {
            foreach ($data['notifications'] as $notification) {?>
                <p>Vous devez effectuer : le test numéro <?= $notification->number?>, de type :
                    <?= $notification->title?></p>
            <?php }
        } else {
            if(isset($data['absence_notifications'])) {
                echo $data['absence_notifications'];
            } else {
                echo $data['error_id'];
            }
    } ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
