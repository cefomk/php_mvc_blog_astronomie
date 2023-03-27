<?php

namespace App\Controller;

use App\Service\Form;
use App\Service\Validation;
use App\Model\RegisterModel;
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
                RegisterModel::insert($post);
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
        $errors['pwd'] = $validation->textValid($post['pwd'], 'pwd', 8, 32);
        return $errors;
    }
}
