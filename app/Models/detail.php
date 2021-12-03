<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $fillable = ['id','description','test_status','donor_name','donor_nationality','donor_contact','donor_location','blood_id'];
}
