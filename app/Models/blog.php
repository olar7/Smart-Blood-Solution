<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','date','content','author','image', 'admin_id'];

    public function admin(){
        return $this->belongsTo(Admin::class);
}

}