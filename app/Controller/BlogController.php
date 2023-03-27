<?php

namespace App\Controller;

use App\Service\Form;
use App\Model\BlogModel;
use App\Service\Validation;
use App\Weblitzer\Controller;

class BlogController extends Controller
{
    public function listing()
    {
        $blogs = BlogModel::all('ORDER by created_at DESC');
        $this->render('app.blog.listing', ['articles' => $blogs]);
    }

    public function show($id)
    {
        $article = $this->isArticleExistor404($id);
        $this->render('app.blog.show', ['article' => $article]);
    }

    public function add()
    {
        $errors = [];
        if (!empty($_POST['submitted'])) :
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors = $this->validBlog($errors, $validation, $post);
            
            if ($validation->IsValid($errors)) :
                BlogModel::insert($post);
                $this->redirect('blog');
            endif;

        endif;
        $form = new Form($errors);
        $this->render('app.blog.add', ['form' => $form]);
    }


    public function validBlog($errors, $validation, $post)
    {
        $errors['titre'] = $validation->textValid($post['titre'], 'titre', 20, 255);
        $errors['contenu'] = $validation->textValid($post['contenu'], 'contenu', 20, 2000);
        $errors['image_url'] = $validation->textValid($post['image_url'], 'image', 20, 500);
        return $errors;
    }

    public function delete($id)
    {
        BlogModel::delete($id,'id_article');
        $this->redirect('blog');
    }

    public function edit($id)
    {
        $article = $this->isArticleExistor404($id);
        $errors = [];
        if (!empty($_POST['submitted'])) :
            
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors = $this->validBlog($errors, $validation, $post);
            
            if ($validation->IsValid($errors)) :
                BlogModel::update($post,$id);
                $this->redirect('blog');
            endif;

        endif;
        $form = new Form($errors);
        $this->render('app.blog.edit', [
            'form' => $form, 
            'article' => $article
        ]);

    }

    public function isArticleExistor404($id)
    {
        $article = BlogModel::findById($id, 'id_article');
        if (empty($article)) :
            $this->Abort404();
        endif;
        return $article;
    }
}
