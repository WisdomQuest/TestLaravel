<?php

namespace App\Exceptions;

use Exception;

class MyException extends Exception
{
    //метод чтобы исключения попали в лог файл логфайл
    public function context()
    {
        return ['data'=>'Данные'];
    }

    //отвечает как выглядит исключение
    public function render()
    {
        //если не возвращать ничего откроетс стандартный шаблон исключения со всеми данными о нем: при включенном дебаге
        return 'my Exception';
    }
}
