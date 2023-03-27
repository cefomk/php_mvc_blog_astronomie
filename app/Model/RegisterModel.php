<?php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class RegisterModel extends Model
{
    protected static $table = 'utilisateur';

    public static function insert($post)
    {
        $mdp = password_hash($post['pwd'],PASSWORD_DEFAULT);
        
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (prenom,nom,email,pwd) VALUE (?,?,?,?)',
            [
                $post['prenom'],
                $post['nom'],
                $post['email'],
                $mdp
            ]
        );
    }

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
          "UPDATE " .self::$table . " SET titre = ?,contenu = ?,image_url = ?, modified_at = now() WHERE id_article = $id",
          [
            $post['titre'],
            $post['contenu'],
            $post['image_url']
          ]
          );
    }
}
