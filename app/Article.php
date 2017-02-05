<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $casts = [
        "text" => "array"
    ];
    #Ключевое поле

   public $primaryKey = 'id';

   #Времення метка
   public  $timestamps = TRUE;

   #Поля разрешенные для заполнения
   protected $fillable = ['name','text','img','alias'];

   #Мягкое удаление
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo("App\User");
    }

}
