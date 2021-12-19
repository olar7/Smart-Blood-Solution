<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;

    protected $fillable = ['id','description','slogan','logo','user_id'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
