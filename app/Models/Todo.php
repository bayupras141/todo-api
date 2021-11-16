<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // create a method fillable 'user_id', 'todo', 'todo', 'label', 'done'
    protected $fillable = [
        'user_id', 
        'todo', 
        'label', 
        'done'
    ];

    //create a method hidden user_id
    protected $hidden = [
        'user_id'
    ];

    // create a method casts done 
    protected $casts = [
        'done' => 'boolean'
    ];

    // create a method belongsTo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
