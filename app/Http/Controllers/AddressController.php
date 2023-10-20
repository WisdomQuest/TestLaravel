<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()                // вывод всех элементов
    {
       return view('addresses.index',['addresses'=>Address::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()               // форма насоздание
    {
        echo 'показать форму для добавления адреса';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)          //принимает запрос от create  (Post)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)           //показывает одну конкретную запись
    {
        return view('addresses.show',['address'=>$address]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)               //  показать форму для редактирования одного адреса
    {
        echo 'показать форму для редактирования адреса: ' . $address->id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)          //принимает и обрабатывает конкретную запись (PUT, PATCH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)            //удаляет конкретную запись (DELETE)
    {
        //
    }
}
