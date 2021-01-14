<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMemberRequest;
use App\Models\PurchaseRecordModel;
use Illuminate\Http\Request;
use App\Models\MemberModel;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = MemberModel::all();
        return view('members.index',['stored1'=>$members]);
    }

    public function record(Request $request)
    {
        $purchase_records = PurchaseRecordModel::Record($request->input('a_id'))->get();

      return view('purchase_records.index', ['records' => $purchase_records]);
    }

    public function create()
    {

        return view('members.create');

    }

    public function edit($id)
    {
       $members = MemberModel::findOrFail($id);

        return view('members.edit',["member"=>$members]);
    }
    public function store(CreateMemberRequest $request)
    {
        $a_name = $request->input('a_name');
        $birth = $request->input('birth');
        $account = $request->input('account');
        $password = $request->input('password');
        $balance = $request->input('balance');

        $member = MemberModel::create([
            'a_name'=>$a_name,
            'birth'=>$birth,
            'account'=>$account,
            'password'=>$password,
            'balance'=>$balance]);
        return redirect('member');
    }

    public function show($id)
    {
        $member =MemberModel::findOrFail($id);
        return view('members.show',['member'=>$member]);
    }
    public function update($id, CreateMemberRequest $request)
    {
        $member = MemberModel::findOrFail($id);

        $member->a_name = $request->input('a_name');
        $member->birth = $request->input('birth');
        $member->account = $request->input('account');
        $member->password = $request->input('password');
        $member->balance = $request->input('balance');
        $member->save();

        return redirect('member');
    }
    public function destroy($id)
    {
        $member = MemberModel::findOrFail($id);
        $member->delete();
        return redirect('member');
    }

}
