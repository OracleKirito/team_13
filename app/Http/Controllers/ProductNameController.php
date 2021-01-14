<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\ProductNameModel;
use Illuminate\Http\Request;
use App\Models\CompanyModel;

class ProductNameController extends Controller
{
    public function index()
    {
        $products = ProductNameModel::all();

        return view('product_names.index',['products'=>$products]);
    }

    public function arc()
    {
        $products = ProductNameModel::arc()->get();

        return view('product_names.index', ['products' => $products]);
    }
    public function create()
    {

        return view('product_names.create');

    }

    public function edit($id)
    {
        $product = ProductNameModel::findOrFail($id);
        return view('product_names.edit',['product'=>$product]);
    }

    public function store(CreateProductRequest $request)
    {
        $platform = $request->input('platform');
        $p_name = $request->input('p_name');
        $price = $request->input('price');
        $company = $request->input('company');
        $inventory= $request->input('inventory');

        $record = ProductNameModel::create([
            'platform'=>$platform,
            'p_name'=>$p_name,
            'price'=>$price,
            'company'=>$company,
            'inventory'=>$inventory]);
            return redirect('product');
    }
    public function update($id,CreateProductRequest$request)
    {
        $product = ProductNameModel::findOrFail($id);

        $product->platform = $request->input('platform');
        $product->p_name = $request->input('p_name');
        $product->price = $request->input('price');
        $product->company = $request->input('company');
        $product->inventory = $request->input('inventory');
        $product->save();

        return redirect('product');
    }
    public function show($id)
    {
        $product = ProductNameModel::findOrFail($id);
        return view('product_names.show',['product' => $product]);
    }

    public function destroy($id)
    {
        $product = ProductNameModel::findOrFail($id);
        $product->delete();
        return redirect('product');
    }
}
