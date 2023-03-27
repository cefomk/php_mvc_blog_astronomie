<?php

namespace App\Controller;

use App\Service\Form;
use App\Model\BlogModel;
use App\Service\Validation;
use App\Model\ConnexionModel;
use App\Weblitzer\Controller;

class ConnexionController extends Controller
{
    public function index()
    {
        $errors = [];
        if (!empty($_POST['submitted'])) :
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors = $this->validConnexion($errors, $validation, $post);
            
            if ($validation->IsValid($errors)) :
                var_dump(ConnexionModel::search($post));
                die();
                // ConnexionModel::search($post);
                //$this->redirect('blog');
            endif;

        endif;
        $form = new Form($errors);
        $this->render('app.connexion.index', ['form' => $form]);
    }


    public function validConnexion($errors, $validation, $post)
    {
         $errors['email'] = $validation->emailValid($post['email']);
        $errors['pwd'] = $validation->textValid($post['pwd'], 'pwd', 8, 32);
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
