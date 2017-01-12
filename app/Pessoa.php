<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function igreja()
    {
        return $this->hasOne('Igreja');
    }
}
