<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Models\CompanyModel;
use App\Models\ProductNameModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companys =CompanyModel::all();
        return view('companys.index',['companys'=>$companys]);
    }

    public function product(Request $request)
    {
        $products = ProductNameModel::Products($request->input('company'))->get();

        return view('product_names.index', ['products' => $products]);
    }
    public function create()
    {

        return view('companys.create');

    }

    public function edit($id)
    {
        $company = CompanyModel::findOrFail($id);
        return view('companys.edit',['company' => $company]);
    }
    public function store(CreateCompanyRequest $request)
    {
        $c_name = $request->input('c_name');
        $c_manager = $request->input('c_manager');
        $c_phone = $request->input('c_phone');
        $c_address= $request->input('c_address');

        $company = CompanyModel::create([
            'c_name'=>$c_name,
            'c_manager'=>$c_manager,
            'c_phone'=>$c_phone,
            'c_address'=>$c_address]);

        return redirect('company');
    }
    public function update($id,CreateCompanyRequest$request)
    {
        $company = CompanyModel::findOrFail($id);

        $company->c_name = $request->input('c_name');
        $company->c_manager = $request->input('c_manager');
        $company->c_phone = $request->input('c_phone');
        $company->c_address = $request->input('c_address');
        $company->save();

        return redirect('company');
    }

    public function show($id)
    {
        $company = CompanyModel::findOrFail($id);
        $products = $company->products;
        return view('companys.show',['company' => $company, 'products'=>$products]);
    }

    public function destroy($id)
    {
        $company = CompanyModel::findOrFail($id);
        $company->delete();
        return redirect('company');
    }
}



