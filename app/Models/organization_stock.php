<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization_stock extends Model
{
    use HasFactory;

    protected $fillable = [ 'blood_stock_id','organization_id'];
}
