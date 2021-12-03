<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['permission', 'component_id'];
    public $dates = ['deleted_at'];
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id');
    }
}
