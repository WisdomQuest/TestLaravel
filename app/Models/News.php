<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $attributes = [
//        'author_id' => 'Гость',
        ];

/*    public function getTitleAttribute($value)
    {
       return '<b>' . $value . '</b>';
    }*/
}
