<section>
    <?php foreach ($articles as $article) : ?>
        <article>
            <h4><?= $article->titre ?></h4>
            <p><img src="<?= $article->image_url?>"></p>
            <p><?= $article->contenu?></p>
        </article>
    <?php endforeach; ?>
</section>