<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood extends Model
{
    use HasFactory;

    protected $fillable = ['id','blood_group','blood_type','validation','volume','client_id','note'];
    public function blood(){
        return $this->belongsTo(Blood::class, 'client_id');
    }
}
