<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['id', 'name', 'last', 'twitter'];

    public static function all($columns = ['*'])
    {
        return new Collection([
            new User(['id' => 1, 'name' => 'Mark', 'last' => 'Antonio', 'twitter' => '@antono']),
            new User(['id' => 2, 'name' => 'Pedro', 'last' => 'Luis', 'twitter' => '@peluo']),
            new User(['id' => 3, 'name' => 'Luis', 'last' => 'Marquez', 'twitter' => '@luma']),
            new User(['id' => 4, 'name' => 'Juan', 'last' => 'Cartas', 'twitter' => '@jucar']),
            new User(['id' => 5, 'name' => 'Pepe', 'last' => 'Le pew', 'twitter' => '@pewpew']),
        ]);
        //new Illuminate\Database\Eloquent\Collection(['id' => 1, 'name' => 'Mark', 'last' => 'Antonio', 'twitter' => '@antono']);

    }

}
