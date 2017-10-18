<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'title', 'pages', 'id_manga'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function pages(){
        return $this->hasMany(Page::class);
    }

    public function manga(){
        return $this->belongsTo(Manga::class);
    }
}
