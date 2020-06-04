<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>

<html>
    <title>Results</title>
    <div class="container">
        <br><br>
        <br><br>
       <?php
           if(!isset($data['absence_time_sound'])) {
               echo $data['error_id'];
           } else { ?>
               <h1>Temps de réaction à un son</h1>

        <?php

        if(!empty($data['time_sound'])) {
            foreach ($data['time_sound'] as $info) { ?>
                <aside>Vous avez effectué un test de type <?php echo $info->title."<br> le ".$info->date." et vous avez obtenu un score de ".$info->score; ?></aside>
            <?php }
        } else {
            if(isset($data['absence_time_sound'])) {
                echo $data['absence_time_sound'];
            }

        } ?>



    <h1>Capacité à reproduire un son</h1>
        <section>

                    <?php if (!empty($data['reproduct_sound'])) { ?>
                        <spin>
                            <?php foreach ($data['reproduct_sound'] as $info) { ?>
                                <aside>
                                    Vous avez effectué un test <?php echo $info->title."<br> le ".$info->date." et vous avez obtenu un score de ".$info->score; ?>
                                </aside>
                            <?php  }?>


                        </spin>
                        <article>

                        <table>
                    <caption>Capacité à reproduire un son :</caption>
                    <tr>
                        <th>Numéro de test </th>
                        <th>Score </th>
                    </tr>
                    <?php foreach ($data['reproduct_sound'] as $info) { ?>
                        <td><?php echo $info->number;?></td>
                        <td><?php echo $info->score;?></td>
                    <?php } ?>


                </table>
            </article>
                    <?php } else {
                        if(isset($data['absence_reproduct_sound'])) { ?>
                            <?php echo $data['absence_reproduct_sound']; ?>
                        <?php }

                    } ?>

                <br><br>

        </section>
    <h1>Temps de réaction à une lumière</h1>
        <section>
            <?php if(!empty($data['time_light'])) {
                foreach ($data['time_light'] as $info) { ?>
                    <aside>
                        Vous avez effectué un test de type <?php echo $info->title."<br> le ".$info->date." et vous avez obtenu un score de ".$info->score; ?>
                        <br><br>
                    </aside>
               <?php }
            } else {
                if(isset($data['absence_time_light'])) {
                    echo $data['absence_time_light'];
                }

            }?>

        </section>
    <footer>

    </footer>
         <?php  }
           ?>


</div>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>