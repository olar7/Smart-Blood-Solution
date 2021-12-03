<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $fillable = ['component'];
    public $timestamps = false;

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
