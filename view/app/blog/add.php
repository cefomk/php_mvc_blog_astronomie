<div class="wrapform">
    <form action="" method="POST" novalidate>
            <?= $form->label('titre');?>
            <?= $form->input('titre');?>
            <?= $form->error('titre');?>

            <?= $form->label('contenu');?>
            <?= $form->textarea('contenu');?>
            <?= $form->error('contenu');?>

            <?= $form->label('image_url');?>
            <?= $form->input('image_url');?>
            <?= $form->error('image_url');?>

            <?= $form->submit('submit','Ajout l\'article');?>
    </form>
</div>