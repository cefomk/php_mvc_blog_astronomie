<?php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class ConnexionModel extends Model
{
    protected static $table = 'utilisateur';

    public static function search($post)
    {
        $email = implode("",[$post['email']]);

        App::getDatabase()->query(
            'SELECT * FROM ' . self::$table . ' WHERE email = '. $email , 
            get_called_class()
        );
        // App::getDatabase()->query(
        //     'SELECT * FROM ' . self::$table . ' WHERE email = ?', 
        //     [$post['email']],
        //     get_called_class()
        // );
    }
}
