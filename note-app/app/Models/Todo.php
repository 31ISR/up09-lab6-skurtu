<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'done', 'urgent', 'dateCompleted'];

    protected $casts = [
        'dateCompleted' => 'datetime',
        'done' => 'boolean',
        'urgent' => 'boolean',
    ];

    public function getDateCompletedAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value) : null;
    }
}
