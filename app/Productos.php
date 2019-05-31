<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $tables = "productos";
    //
    public function productos()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }
}
