<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public $timestamps = false;

    protected $fillable = ['computer_id', 'reported_by', 'reported_date', 'description', 'urgency', 'status'];

    protected $casts = [
        'reported_date' => 'datetime',
    ];
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
