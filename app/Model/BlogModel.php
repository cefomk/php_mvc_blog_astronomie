<?php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;
use UnderflowException;

class BlogModel extends Model
{
    protected static $table = 'article';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (titre,contenu,image_url) VALUE (?,?,?)',
            [
                $post['titre'],
                $post['contenu'],
                $post['image_url']
            ]
        );
    }

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
          "UPDATE " .self::$table . " SET titre = ?,contenu = ?,image_url = ? WHERE id_article = $id",
          [
            $post['titre'],
            $post['contenu'],
            $post['image_url']
          ]
          );
    }
}
