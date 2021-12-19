<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_stock extends Model
{
    use HasFactory;

    protected $fillable = ['id','blood_type','blood_group','collected_date','blood_checkup_report','organization_id'];

    public function organization(){
        return $this->belongsTo(Organization::class);
}
}
