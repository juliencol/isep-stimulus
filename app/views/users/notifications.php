<?php session_start();
?>
<?php include '../../config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/notifications.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>
<html>
<title>USER Notifications</title>
<div id="container">
    <header></header>
    <h1>Notifications</h1>

        <?php
        $nbreTests = "SELECT COUNT (*) FROM tests WHERE user_id = $SESSION['id'] AND description = 'en attente'";
        for($i = 0; $i < $nbreTests; $i++) { ?>
            <article class="results">Vous devez réaliser un test : test du <?php echo "SELECT title FROM test WHERE ..."?></article>
        <?php }
        ?>
    <footer></footer>
</div>
</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>
