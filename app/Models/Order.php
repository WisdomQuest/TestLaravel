<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class); // получаем из Order ссылку на клиента
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
