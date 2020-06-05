
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">

    <div class="graph1">

        <h1>Résultats tests</h1>
        <br><br><br>

        <a class="btn-primary" href="<?php echo URLROOT; ?>tests/sound_test_results">Réaction à un son</a>	

        <a class="btn-primary" href="<?php echo URLROOT; ?>tests/microphone_test_results">Reproduction de son</a>	

        <a class="btn-primary" href="<?php echo URLROOT; ?>tests/light_test_results"">Réaction à une lumière</a>	

    </div>
    
    
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>