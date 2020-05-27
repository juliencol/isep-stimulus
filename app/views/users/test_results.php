<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php //require APPROOT . '/views/inc/header.php'; ?>

<html>
    <title>Results</title>
    <div id="container">
    <header>
    </header>
    <h1>Temps de réaction à un son</h1>
        <section>
            <?php foreach ($data as $test_done) {?>
                <p>Vous avez effectué le test : <?= $test_done->title?></p>
            <?php }?>
            <abbr>Aucun test n'a été effectué</abbr>
        </section>
    <h1>Capacité à reproduire un son</h1>
        <section>
            <spin>
                <?php foreach ($data as $test_done) {?>
                    <aside>
                        <p>Test numéro <?= $test_done->number?> fait le <?= $test_done->date?><br>
                        Le score obtenu était de <?= $test_done->score?></p>
                        <br><br>
                    </aside>
                <?php }?>
            </spin>
            <article>
                <table>
                    <caption>Capacité à reproduire un son :</caption>
                    <tr>
                        <th>Numéro de test </th>
                        <th>Score </th>
                    </tr>
                    <?php foreach ($data as $test_done) {?>
                        <td><?= $test_done->number?></td>
                        <td><?= $test_done->score?></td>
                   <?php  }?>
                </table>
                <br><br>
            </article>
        </section>
    <h1>Temps de réaction à une lumière</h1>
        <section>
            <spin>
                <?php foreach ($data as $test_done) {?>
                <aside>
                    <p>Test numéro <?= $test_done->number?><br>
                    Fait le <?= $test_done->date?></p>
                    <br><br>
                </aside>
                    <?php }?>
            </spin>
            <article>
                <br><br>
            </article>
        </section>
    <footer>

    </footer>
</div>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>