<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','blood_group'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function blood(){
        return $this->hasMany(blood::class);
    }
}
