<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <h1>Foire aux questions</h1>
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
    <a href="<?php echo URLROOT; ?>faqs/new">Poser une question</a>
    <a href="<?php echo URLROOT; ?>faqs/edit">Gérer la FAQ</a>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>

