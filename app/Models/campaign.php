<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','photo','date','description','organization_id'];

    
    public function organization(){
        return $this->belongsTo(Organization::class);
}
}
