<section class="tuile">
    <a href="<?= $view->path('add-article') ?>"><button class="btn">Ajouter un article</button></a>
    <?php foreach ($articles as $article) : ?>
        <article>
            <h4>
                <a href="<?= $view->path('article', [$article->id_article]); ?>"><?= $article->titre ?> </a>
            </h4>
            <p>
                <?= substr($article->contenu, 0, 60) . " (...)" ?>
            </p>

        </article>
    <?php endforeach; ?>
</section>