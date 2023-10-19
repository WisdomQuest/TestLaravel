<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public function address()
    {
        return $this->belongsTo(Address::class); // установка связи 1 к 1 (в таблице указано id поле ведущее на address)
    }

    public function orders()
    {
        return $this->hasMany(Order::class); // получаем доступ к заказам клиента
    }
}
