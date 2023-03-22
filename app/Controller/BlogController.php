<?php

namespace App\Controller;

use App\Weblitzer\Controller;

class BlogController extends Controller
{
    public function listing()
    {
        $this->dd('test');
        $this->render('app.blog.listing');
    }
}