<div class="wrapform">
    <form action="" method="POST" novalidate>
        <div>
            <?= $form->label('titre'); ?>
            <?= $form->input('titre','text',$article->titre); ?>
            <?= $form->error('titre'); ?>
        </div>

        <div>
            <?= $form->label('contenu'); ?>
            <?= $form->textarea('contenu',$article->contenu); ?>
            <?= $form->error('contenu'); ?>
        </div>

        <div>
            <?= $form->label('image_url'); ?>
            <?= $form->input('image_url','text',$article->image_url); ?>
            <?= $form->error('image_url'); ?>
        </div>

        <?= $form->submit('submitted', 'Modifier l\'article'); ?>
    </form>
</div>