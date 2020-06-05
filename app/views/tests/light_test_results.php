
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/test_results.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">


        <h1>Temps de réaction à une lumière</h1>


        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChartReaction);

        google.charts.setOnLoadCallback(drawChartReproduction);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChartReaction() {

            // Create the data table.
            var data = google.visualization.arrayToDataTable([
                ['Date', 'Temps'],

                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $sql = "SELECT * FROM test_results WHERE test_type = '3'";
                foreach ($bdd->query($sql) as $graph) {
                    echo '["' . $graph['date'] . '", ' . $graph['score'] .'],';
                }
                ?>
            ]);

            var options = {
            title: 'Temps moyen de réaction à son',
            hAxis: {title: 'Date du test',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}

            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div_reaction'));
            chart.draw(data, options);
        }
        </script>
        <div id="chart_div_reaction" style="width: 100%; height: 500px;"></div>

        <br><br>
        <a class="btn-primary" href="<?php echo URLROOT; ?>users/test_results"">Retour aux résultats</a>


</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>