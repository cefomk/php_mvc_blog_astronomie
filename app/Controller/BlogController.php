<?php

namespace App\Controller;

use App\Model\BlogModel;
use App\Weblitzer\Controller;

class BlogController extends Controller
{
    public function listing()
    {
        $blogs = BlogModel::all();
        $this->render('app.blog.listing',['articles' => $blogs]);
    }
}