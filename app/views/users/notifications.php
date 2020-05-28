<?php session_start();
?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/notifications.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>
<html>
<title>USER Notifications</title>
<div id="container">
    <header></header>
    <h1>Notifications</h1>

        <?php foreach ($data as $notification) {?>
            <p>Vous devez effectuer : le test numéro <?= $notification->number?>, qui correspond à :
            <?= $notification->title?></p>
        <?php } ?>
    <footer></footer>
</div>
</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>
