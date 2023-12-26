<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function show()
    {
        return view('item.create', [
            'items' => Item::all()
        ]);
    }

    public function store()
    {
        dd(request()->all());
        $formData=request()->validate([
            'item' => 'required',
            'name' => 'required',
            'address' => 'required',
            'body' => 'required',
            'price' => 'required'
        ]);
        Item::create($formData);
        return redirect('/show');
    }
}
