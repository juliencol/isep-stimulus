<?php session_start()?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php //require APPROOT . '/views/inc/header.php'; ?>

<html>
    <title>Results</title>
    <div class="container">
    <header>
    </header>
        <br><br>
    <h1>Temps de réaction à un son</h1>

        <form method="post">
            <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
            <input type="submit" value="Voir les résultats de ses tests">
        </form>
        <?php foreach ($data as $info) { ?>
            <aside>Vous avez effectué un test de type <?php echo $info["Type"]."<br>"; ?></aside>
        <?php } ?>

        <?php //print_r($time_sound); ?>
        <!---
    <h1>Capacité à reproduire un son</h1>
        <section>
            <spin>

                    <aside>
                        <p>Test numéro  fait le <br>
                        Le score obtenu était de </p>
                        <br><br>
                    </aside>

            </spin>
            <article>
                <table>
                    <caption>Capacité à reproduire un son :</caption>
                    <tr>
                        <th>Numéro de test </th>
                        <th>Score </th>
                    </tr>

                        <td></td>
                        <td></td>

                </table>
                <br><br>
            </article>
        </section>
    <h1>Temps de réaction à une lumière</h1>
        <section>
            <spin>

                <aside>
                    <p>Test numéro<br>
                    Fait le ></p>
                    <br><br>
                </aside>

            </spin>
            <article>
                <br><br>
            </article>
        </section>
    <footer>

    </footer>
</div>------!>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>