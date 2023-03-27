<div class="wrapform">
    <form action="" method="POST" novalidate>
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

        <?= $form->submit('submitted', 'Connexion'); ?>
    </form>
</div>