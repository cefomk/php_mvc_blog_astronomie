<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class BlogModel extends Model
{
    protected static $table = 'article';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (titre,contenu,image_url) VALUE (?,?,?)',[[$post['titre'],$post['contenu'],$post['image_url']]]
        );
    }
}