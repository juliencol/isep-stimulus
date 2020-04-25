<?php
?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>

<html>
    <title>Results</title>
    <div id="container">
    <header>
    </header>
    <h1>Temps de réaction à un son</h1>
        <section>
            <?php ?>
            <abbr>Aucun test n'a été effectué</abbr>
        </section>
    <h1>Capacité à reproduire un son</h1>
        <section>
            <spin>
                <?php ?>
                <aside>
                    <p>Test numéro 0 <br /> Fait le ../../....</p>
                    <br><br>
                </aside>
                <aside>
                    <p>Test numéro 1</p>
                    <br><br>
                </aside>
            </spin>
            <article>
                <table>
                    <caption>Capacité à reproduire un son :</caption>
                    <tr>
                        <th>Numéro de test :</th>
                        <th>Score :</th>
                    </tr>
                    <?php ?>
                </table>
                <br><br>
            </article>
        </section>
    <h1>Temps de réaction à une lumière</h1>
        <section>
            <spin>
                <aside>
                    <?php ?>
                    <p>Test numéro 0</p>
                    <br><br>
                </aside>
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