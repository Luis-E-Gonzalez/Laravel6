<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /* definimos los campos de nuestra tabla */
    protected $fillable = [
        'name',
    ];

/* the relations inverse for one to one with article category */
    public function Article(){

        return $this->belongsTo(Article::class);
    } 
     
    
}
