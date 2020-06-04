<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<?php require APPROOT . '/../public/css/cgus/index.css'; ?>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container text-center">
    <h1>Conditions générales d'utilisation</h1>
    <?php foreach($data as $cgu):?>
        <table class="col-info">
            <tr>
                <td>
                    <p> <?= $cgu->content ?></p>
                </td>
            </tr>
        </table>
    <?php endforeach ; ?>
    <div class="links">
        <a class="btn btn-primary" href="<?php echo URLROOT; ?>cgus/edit">Modifier les conditions générales d'utilisation</a>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>




