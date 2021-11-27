<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
/* Modelos a ocupar  */
use App\Category;
use App\Images;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use SoftDeletes;
    /* declaramos nuestros campos de nuestra tabla tags*/    
    protected $fillable = [
        'title',
        'img',
        'subtitle',
        'body',
        'category_id',
        'img_id',
    ];

/* definindo la relacion de article and category one a one */
    public  function category()
    {
        return $this->hasOne(Category::class,'foreign_key');


    }

/* definimos la relacion de imagenes  one a one  */

    public function Image(){
        return $this->hasMany('App\Images', 'foreign_key', 'img_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
 
    public static function reglas() {
        return [
            'title' => 'required|max:255'
            , 'img' => 'bail|nullable|max:150'
            , 'subtitle' => 'required|max:150'
            , 'body' => 'required|max:5000'
            , 'category_id' => 'required|exists:categories,id'
            , 'img_id' => 'required|exists:images,id'
        ];
     }

}
