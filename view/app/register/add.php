<div class="wrapform">
    <form action="" method="POST" novalidate>
    <div>
            <?= $form->label('prenom'); ?>
            <?= $form->input('prenom'); ?>
            <?= $form->error('prenom'); ?>
        </div>

    <div>
            <?= $form->label('nom'); ?>
            <?= $form->input('nom'); ?>
            <?= $form->error('nom'); ?>
        </div>

        <div>
            <?= $form->label('email'); ?>
            <?= $form->input('email'); ?>
            <?= $form->error('email'); ?>
        </div>

        <div>
            <?= $form->label('pwd'); ?>
            <?= $form->input('pwd','password'); ?>
            <?= $form->error('pwd'); ?>
        </div>

        <?= $form->submit('submitted', 'Ajout'); ?>
    </form>
</div>