<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    /**
     *  define fillable
     */
    protected $fillable=[
        'name',
        'biographie',
        'image',
    ];
    /**
     *  rlt with series
     */
    public function series(){
        return $this->hasMany(Serie::class);
    }
}
