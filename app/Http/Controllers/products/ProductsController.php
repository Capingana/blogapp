<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProductsRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        //
        return  view("admin.pages.products.index");
    }


    public function create()
    {
        //
        return view("admin.pages.products.create");
    }


    public function store(StoreUpdateProductsRequest $request)
    {
        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:10000',
            'photo' => 'image',
        ]);
        */
        dd("Ok");
        //
        $nameFile = $request->name . "." . $request->photo->extension();
        if ($request->file("photo")->isValid()) {
            dd($request->file("photo")->storeAs("public/products", $nameFile));
        } else {
            dd("error");
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
