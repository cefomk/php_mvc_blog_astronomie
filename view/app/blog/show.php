<section>
        <article>
                <h4><?= $article->titre ?></h4>
                <p><img src="<?= $article->image_url ?>"></p>
                <p><?= $article->contenu ?></p>
                <p>
                        <a href="<?= $view->path('edit-article', [$article->id_article]); ?>" class="btn">Editer</a>
                        <a href="<?= $view->path('delete-article', [$article->id_article]); ?>" onclick="return confirm('Etes vous certain de supprimer cet article ?')" class="btn btn-alert">Supprimer</a>
                </p>
        </article>
</section>