<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;


class Serie extends Model
{
    use HasFactory;

    /**
     * define all data for mass create
     */
    protected $fillable=[
        'title',
        'content',
        'acteur',
        'url',
        'tags',
        'status',
        'trailler_url',
        'is_populair'
    ];

    /**
     *  reletionship with  users
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     *  rating rlt with users we have to define the name of the rating table because larave in case many to many rlt the midle table name's "table1_table2"
     */
    public function rating(){
        return $this->belongsToMany(User::class,'rating','user_id','serie_id')->withTimestamps();
    }

    /**
     *  relationship with comments
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    /**
     *  create a local scope to get last series
     */
    public function scopeLatestSerie(Builder $query){
        return $query->orderBy('created_at','desc');
    }

    /**
     *  create a local scope to get series by thiere status
     */
    public function scopeSerieByStatus(Builder $query,$key,$value){
        return $query->where($key,'like',$value);
    }

    /**
     *  create a local scope to get top viewed series
     */
    public function scopeTopViewed(Builder $query){
        return $query->orderBy('number_of_view','desc')->take(12)->get();
    }

    /**
     * create a locale scope to get top rating
     */
    public function scopeTopRated(Builder $query){
        return $query->withCount('rating')->orderBy('rating_count','desc');
    }


}
