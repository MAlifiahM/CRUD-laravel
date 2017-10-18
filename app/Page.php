<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'id_chapter', 'image'
    ];

    protected $hidden = [
        
    ];

    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
