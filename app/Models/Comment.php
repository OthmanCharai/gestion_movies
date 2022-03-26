<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     *  define fillable for comment table
     */
    protected $fillable = [
        'content',
        'user_id',
        'serie_id'
    ];

    /**
     *  relationship with user
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     *  relationship with series
     */
    public function series(){
        return $this->belongsTo(Serie::class);
    }
}
