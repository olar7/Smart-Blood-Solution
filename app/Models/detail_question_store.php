<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_question_store extends Model
{
    use HasFactory;

    protected $fillable = ['id','response','detail_id','question_id'];
}
