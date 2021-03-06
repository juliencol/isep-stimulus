<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/common_test.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container text-center">
	<h1 class="test_header">Temps de réaction à un son</h1>
	<p class="text_explicatif">
		Test en cours
	</p>
	<a class="btn-primary" href="<?php echo URLROOT; ?>tests/light_test_confirmation">Terminer le test</a>

	<div id="test-doing">
		<?php 
        $entered_code = $_POST['code'];
        
        $bdd = new PDO('mysql:host=localhost;dbname=stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $codes = $bdd->query('SELECT code from test_codes WHERE test_type = "3"');

        while ($c = $codes->fetch()) {

            if (!empty($entered_code) AND $entered_code == $c['code']) {

                $action1 = rand(0, 10);
                $action2 = rand(0, 10);
                $action3 = rand(0, 10);
                $action4 = rand(0, 10);
                $action5 = rand(0, 10);
                $moyenne = ($action1 + $action2 + $action3 + $action4 + $action5) / 5;
                //echo $react_moyenne;

                //////////////////// LES ID ICI À MODIFIER ////////////////////
                $test_code = 1234;
                $user_id = 10554;
                $type_type = 3; 
                $score = $moyenne;

                $results = $bdd->prepare('INSERT INTO test_results(test_code, user_id, test_type, score) VALUES(:test_code, :user_id, :test_type, :score)');
                $results->execute(array(
                        'test_code' => $test_code,
                        'user_id' => $user_id,
                        'test_type' => $type_type,
                        'score' => $score
                    ));  
            }

            else {
                header('location:');
            }
        }      
			
		?>
	</div>
	<br>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>