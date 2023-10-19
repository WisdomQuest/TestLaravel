<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->hasOne(Client::class); // доступ по связи 1 к 1.. (в таблице не указано поле ведущее на client)
    }
}
