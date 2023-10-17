<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //   protected $table = 'postsss'; если нужно изменить название таблицы что указано в миграции posts Schema::create('posts'..
    //   public $timestamps = false; убирает в таблице $timestamps.. в наполнении миграции create_posts нужно закоментить
    //   protected $primaryKey = 'alias'; меняет первичный ключ. название столбца id
    //   protected $keyType = 'string' указывает что первичный ключ не целое чисол а строка

    //установка дефолтных значений столбцов таблицы
    protected $attributes = [
        'title' => 'новый пост',
        'is_publish' => false,
    ];
}
