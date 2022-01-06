<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Answer;

class Result extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question(){
        return $this->belongsTo(Question::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
}
