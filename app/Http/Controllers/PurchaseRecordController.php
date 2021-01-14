<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseNameRequest;
use App\Http\Requests\CreatePurchaseRequest;
use App\Models\PurchaseRecordModel;
use Illuminate\Http\Request;

class PurchaseRecordController extends Controller
{
    public function index()
    {
        $records =PurchaseRecordModel::all();
        return view('purchase_records.index',['records'=>$records]);
    }

    public function arc()
    {
        $purchase_records = PurchaseRecordModel::arc()->get();

        return view('purchase_records.index', ['records' => $purchase_records]);
    }
    public function create()
    {
        return view('purchase_records.create');

    }

    public function edit($id)
    {
        $record = PurchaseRecordModel::findOrFail($id);
        return view('purchase_records.edit',['record'=>$record]);
    }

    public function store(CreatePurchaseRequest $request)
    {
        $b_number = $request->input('b_number');
        $b_date = $request->input('b_date');
        $serial_number = $request->input('serial_number');
        $a_id = $request->input('a_id');
        $p_id = $request->input('p_id');

        $record = PurchaseRecordModel::create([
            'b_number'=>$b_number,
            'b_date'=>$b_date,
            'serial_number'=>$serial_number,
            'a_id'=>$a_id,
            'p_id'=>$p_id]);
        return redirect('purchase');
    }
    public function update($id,CreatePurchaseRequest$request)
    {
        $record = PurchaseRecordModel::findOrFail($id);

        $record->b_number = $request->input('b_number');
        $record->b_date = $request->input('b_date');
        $record->serial_number = $request->input('serial_number');
        $record->a_id = $request->input('a_id');
        $record->p_id = $request->input('p_id');
        $record->save();

        return redirect('purchase');
    }
    public function show($id)
    {
        $record =PurchaseRecordModel::findOrFail($id);
        return view('purchase_records.show',['record'=>$record]);
    }
    public function destroy($id)
    {
        $record = PurchaseRecordModel::findOrFail($id);
        $record->delete();
        return redirect('purchase');
    }
}
