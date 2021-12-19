<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $fillable = ['id','type','last_donation','number_of_donations','diagnosed_disease'];
}
