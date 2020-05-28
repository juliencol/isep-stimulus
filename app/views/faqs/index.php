<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">

    <header class="titre">
        <h1>
            Foire aux questions
        </h1>
    </header>
    
    <?php foreach($data as $faq_question): ?>
            <table> 
                <thead>
                     <tr>
                         <td>
                         <?= $faq_question->subject ?>
                         </td>
                     </tr>
                </thead>
            <tbody>
                <tr>
                
                    <td>
                    <?= $faq_question->title ?>
                    
                    </td>
                
                </tr>
                <tr>
                    <td class="reponse">
                    <?= $faq_question->answer ?>
                    </td>
                </tr>
            </tbody>
            </table>
            <?php endforeach ; ?>
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>

