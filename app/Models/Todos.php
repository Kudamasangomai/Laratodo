<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,
        'description',
        'category' ,
        'StartDate' ,
        'user_id'
        
];
public const Category = ['work', 'school','personal'];



public function user()
{
    return $this->belongsTo('App\Models\User');
}
}
