<?php

namespace App\Controller;

use App\Service\Form;
use App\Model\BlogModel;
use App\Service\Validation;
use App\Weblitzer\Controller;

class RegisterController extends Controller
{
    public function add()
    {
        $errors = [];
        if (!empty($_POST['submitted'])) :
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors = $this->validRegister($errors, $validation, $post);
            
            if ($validation->IsValid($errors)) :
                BlogModel::insert($post);
                $this->redirect('blog');
            endif;

        endif;
        $form = new Form($errors);
        $this->render('app.register.add', ['form' => $form]);
    }


    public function validRegister($errors, $validation, $post)
    {
        $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 2, 255);
        $errors['nom'] = $validation->textValid($post['nom'], 'nom', 2, 255);
        $errors['email'] = $validation->emailValid($post['email']);
        $errors['pwd'] = $validation->textValid($post['pwd'], 'pwd', 20, 32);
        return $errors;
    }

    public function isUserExistor404($id)
    {
        $user = BlogModel::findById($id, 'id_utilisateur');
        if (empty($user)) :
            $this->Abort404();
        endif;
        return $user;
    }
}
