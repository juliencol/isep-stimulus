<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <h1>Modifier les conditions générales d'utilisation</h1>
    <?php
    if(!empty($data)){
    foreach($data as $cgu): ?>
    <form class="form" method="post" >
        <table>
            <tr>
                <td>
                    <?php $cgu=$cgu->content;?>
                    <label for="cgu"> <strong>CGU</strong>  </label>
                    <textarea name="cgu" id="cgu" cols="100" rows="20" placeholder="CGU"><?=$cgu?></textarea>
                </td>
            </tr>
        </table>
        <div class="clear" style="clear:both"></div>
</div>
<input type="submit" value="Enregistrer">
    </form>
<?php endforeach;} 
else{?>
        <form class="form" method="post" >
        <table>
            <tr>
                <td>
                    <label for="cgu"> <strong>CGU</strong>  </label>
                    <textarea name="cgu" id="cgu" cols="100" rows="20" placeholder="CGU"></textarea>
                </td>
            </tr>
        </table>
        <div class="clear" style="clear:both"></div>
</div>
<input type="submit" value="Enregistrer">
    </form>
<?php } ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
