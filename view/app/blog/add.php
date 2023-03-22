<div class="wrapform">
    <form action="" method="POST" novalidate>
        <div>
            <?= $form->label('titre'); ?>
            <?= $form->input('titre'); ?>
            <?= $form->error('titre'); ?>
        </div>

        <div>
            <?= $form->label('contenu'); ?>
            <?= $form->textarea('contenu'); ?>
            <?= $form->error('contenu'); ?>
        </div>

        <div>
            <?= $form->label('image_url'); ?>
            <?= $form->input('image_url'); ?>
            <?= $form->error('image_url'); ?>
        </div>

        <?= $form->submit('submitted', 'Ajout l\'article'); ?>
    </form>
</div>