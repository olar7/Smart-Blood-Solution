<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_form extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','full_name','email','subject','message'];
}
