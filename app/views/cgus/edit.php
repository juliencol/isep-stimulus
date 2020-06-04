<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <h1>Modifier les conditions générales d'utilisation</h1>
    <input class="btn-primary" type=submit onclick=window.location.href='./new'; value='Modifier' name="newCGU" />
    <?php foreach($data as $cgu):?>

    <table>
        <tr>
            <td>
                <?= $cgu->content ?>
            </td>
        </tr>
    </table>

    <div class="clear" style="clear:both"></div>

</div>
<?php endforeach ; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
© 2020 GitHub, Inc.
