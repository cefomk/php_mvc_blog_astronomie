<section class="tuile">
<a href="<?= $view->path('add-article')?>" class="btn"><button>Ajouter un article</button></a>
<?php foreach ($articles as $article) : ?>
        <article>
            <a href="<?= $view->path('article', [$article->id_article]); ?>">
                <h4>
                    <?= $article->titre ?>
                </h4>
            </a>
        </article>
    <?php endforeach; ?>
</section>