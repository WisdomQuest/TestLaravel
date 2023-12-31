<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()                // вывод всех элементов
    {
        return view('addresses.index', ['addresses' => Address::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()               // форма насоздание
    {
//        echo 'показать форму для добавления адреса';
        return view('addresses.form', ['action' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAddressRequest $request)          //принимает запрос от create  (Post)
    {
        $validated = $request->safe();
        $address = new Address();
        $address->address = $validated->address;
        $address->save();
        return redirect()->route('addresses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)           //показывает одну конкретную запись
    {
        return view('addresses.show', ['address' => $address]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)               //  показать форму для редактирования одного адреса
    {
//        echo 'показать форму для редактирования адреса: ' . $address->id;
        return view('addresses.form', ['action' => 'edit', 'address' => $address]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)          //принимает и обрабатывает конкретную запись (PUT, PATCH)
    {
        $validated = $request->safe();
        $address->address = $validated->address;
        $address->save();
        return redirect()->route('addresses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)            //удаляет конкретную запись (DELETE)
    {
        $address->delete();
        return redirect()->route('addresses.index');
    }
}
