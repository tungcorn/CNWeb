<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public $timestamps = false;
    protected $fillable = ['computer_name', 'model', 'operating_system', 'processor', 'memory', 'available'];

    public function issue()
    {
        return $this->hasMany(Issue::class);
    }
}
