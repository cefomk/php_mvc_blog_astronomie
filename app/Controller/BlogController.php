<?php

namespace App\Controller;

use App\Model\BlogModel;
use App\Service\Form;
use App\Weblitzer\Controller;

class BlogController extends Controller
{
    public function listing()
    {
        $blogs = BlogModel::all('ORDER by created_at DESC');
        $this->render('app.blog.listing',['articles' => $blogs]);
    }

    public function show($id)
    {
        $article = $this->isArticleExistor404($id);
        $this->render('app.blog.show',['article' => $article]);
    }

    public function add()
    {
        $errors = [];
        $form = new Form($errors);
        $this->render('app.blog.add',['form' => $form]);
    }



    public function isArticleExistor404($id)
    {
        $article = BlogModel::findById($id,'id_article');
        if(empty($article)):
            $this->Abort404();
        endif;
        return $article;
    }
}