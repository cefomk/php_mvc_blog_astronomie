<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur le framework MVC';
        // $message = '';

        if ($message != '') :
            $this->render('app.default.frontpage', array(
                'message' => $message,
            ));
        else :
            $this->Abort404();
        endif;
    }

    public function contact()
    {
        $this->render('app.default.contact',['username' => 'Mehdi']);
    }

    public function Page404()
    {
        $this->render('app.default.404');
    }
}
