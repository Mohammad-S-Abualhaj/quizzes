<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    // public function users(){
    //     return $this->belongsToMany(User::class, 'quiz_user');
    // }

}
